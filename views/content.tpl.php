<!DOCTYPE html>
<html lang='ja'>
    <head>
        <mata charset='utf-8'>
        <title>PHP-Web</title>
        <style>body {padding: 10px;}</style>
    </head>
    <body>
        <h1>Good morning japan</h1>
        <p>This is <?= $name ?></p>
        <p><?= $message ?></p>
        <?php foreach ($players as $player) { ?>
            <p><?= $player ?>はモンスターと戦った</p>
        <?php } ?>
    </body>
</html>