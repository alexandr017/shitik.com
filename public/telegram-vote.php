<?php
if (isset($_POST['vote'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP']
        ? $_SERVER['HTTP_CLIENT_IP']
        : ($_SERVER['HTTP_X_FORWARDED_FOR']
            ? $_SERVER['HTTP_X_FORWARDED_FOR']
            : $_SERVER['REMOTE_ADDR']);

    $filename = 'tmp-voting.txt';
    $data = file_get_contents($filename);
    $newData = $_POST['vote'] . ' - ' . date('Y-m-d H:i:s') . ' - ' . $ip . "\n";
    $newData = $data . $newData;
    file_put_contents($filename, $newData);
}