<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Link przekierowujący</title>
</head>
<body>
    <?php
        // Docelowa strona
        $target = "\index.html";

        // Zbieranie danych o kliknięciu
        $ip = $_SERVER['REMOTE_ADDR'];
        $agent = $_SERVER['HTTP_USER_AGENT'];
        $time = date('Y-m-d H:i:s');

        // Zapis do pliku log.txt
        file_put_contents('log.txt', "$time - $ip - $agent\n", FILE_APPEND);

        // Przekierowanie na stronę
        header("Location: $target");
        exit;
    ?>
</body>
</html>
