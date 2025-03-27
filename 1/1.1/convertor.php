<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Конвертор</title>
    </head>
    <body>
        <h1>Преобразование из дюймов в сантиметры</h1>
        <?php $ins = 20; $cents = $ins * 2.54; ?>
        <p><?php echo$ins ?> дюймов = <?php echo round($cents) ?> сантиметров.</p>
        <?php $ins = 27; $cents = $ins * 2.54; ?>
        <p><?php echo$ins ?> дюймов = <?php echo round($cents) ?> сантиметров.</p>
    </body>
</html>