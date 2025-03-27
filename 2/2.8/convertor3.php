<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Конвертор</title>
    </head>
    <body>
        <h1>Преобразование из дюймов в сантиметры</h1>
        <form action="convertor3.php" method="post">
            <p>Величина в дюймах:
            <input type="text" name="inches" size="10"></p>
            <p><input type="submit" value="Преобразовать"></p>
        </form>
        <?php if(isset($_POST['inches'])) {
            $ins = (double)$_POST['inches'];
            $cents = $ins * 2.54;
            if ($ins <= 0)
                echo "<p>Величина в дюймах должна быть больше нуля!</p>";
            else {
                $ins = str_replace('.', ',', "$ins");
                $cents = str_replace('.', ',', "$cents");
                echo "<p>" . $ins . " дюймов = " . $cents . " сантиметров</p>";
            }
        } ?>
    </body>
</html>