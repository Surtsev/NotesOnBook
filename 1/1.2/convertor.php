<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Конвертор</title>
    </head>
    <body>
        <h1>Преобразование из дюймов в сантиметры</h1>
        <?php $aIns = [19, 20, 24, 27, 32, 45, 80]; $cnt = count($aIns);
            for($i = 0; $i < $cnt; ++$i) {
                echo "<p>" . $aIns[$i] . " дюймов = " . round($aIns[$i] * 2.54) . " сантиметров.</p>";
            }
        ?>
    </body>
</html>