<?php

namespace App\Errors;

use Throwable;
use PDOException;

class ErrorHandler
{
    public static function register(): void
    {
        set_error_handler([self::class, 'handleError']);
        set_exception_handler([self::class, 'handleException']);
        register_shutdown_function([self::class, 'handleShutdown']);
    }

    public static function handleError(int $errno, string $errstr, string $errfile, int $errline): void
    {
        throw new \ErrorException($errstr, 0, $errno, $errfile, $errline);
    }

    public static function handleException(Throwable $exception): void
    {
        http_response_code(500);

        // Логируем ошибку
        error_log($exception);

        // Очищаем буфер вывода, чтобы удалить случайно отрендеренный контент
        while (ob_get_level()) {
            ob_end_clean();
        }

        // Подключаем шаблон ошибки 500
        include DOCUMENT_ROOT . '/resources/view/v3/templates/errors/500.php';

        // Полностью останавливаем выполнение скрипта
        exit();
    }

    public static function handleShutdown(): void
    {
        $error = error_get_last();
        if ($error && in_array($error['type'], [E_ERROR, E_PARSE, E_CORE_ERROR, E_COMPILE_ERROR])) {
            self::logError(new \ErrorException($error['message'], 0, $error['type'], $error['file'], $error['line']));
            self::renderErrorPage(500);
        }
    }

    private static function logError(Throwable $exception): void
    {
        $logMessage = sprintf(
            "[%s] %s in %s on line %d\nStack trace:\n%s\n\n",
            date('Y-m-d H:i:s'),
            $exception->getMessage(),
            $exception->getFile(),
            $exception->getLine(),
            $exception->getTraceAsString()
        );

        file_put_contents(DOCUMENT_ROOT . '/storage/logs/error.log', $logMessage, FILE_APPEND);
    }

    private static function renderErrorPage(int $code, string $message = ''): void
    {
        http_response_code($code);
        echo renderView("v3/templates/errors/$code.php", ['message' => $message]);
        exit();
    }
}
