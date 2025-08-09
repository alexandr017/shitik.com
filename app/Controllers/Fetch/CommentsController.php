<?php

namespace app\Controllers\Fetch;

use App\Repositories\CommentRepository;

class CommentsController
{
    public function store() : void
    {
        if (!isset($_POST) || !isset($_POST['lang']) || !isset($_POST['entry_type']) || !isset($_POST['entry_id']) || !isset($_POST['name']) || !isset($_POST['comment'])) {
            abort(404);
        }

        // Проверка reCAPTCHA
        $verifyUrl = 'https://www.google.com/recaptcha/api/siteverify';
        $response = file_get_contents($verifyUrl . '?secret=' . getEnvValue('GOOGLE_CAPTCHA_SECRET') . '&response=' . $_POST['token']);
        $responseKeys = json_decode($response, true);

        if (empty($responseKeys['success']) || $responseKeys['score'] < 0.5) {
            echo json_encode(['result' => false]);
            exit;
        }

        $lang = clearData($_POST['lang']);
        $entryType = (int) $_POST['entry_type'];
        $entryId = (int) $_POST['entry_id'];
        $name = clearData($_POST['name']);
        $comment = clearData($_POST['comment']);

        $commentRepository = new CommentRepository();
        $result = $commentRepository->store($lang, $entryType, $entryId, $name, $comment);

        if ($result) {
            echo json_encode(['result' => true]);
            return;
        }

        echo json_encode(['result' => false]);
    }
}