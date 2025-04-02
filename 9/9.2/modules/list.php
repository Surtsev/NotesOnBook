<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="../styles.css" rel="stylesheet" type="text/css">
        <title><?php use Models\Image;
            use const Settings\IMAGE_PATH;
            use const Settings\SITE_NAME;

            echo SITE_NAME ?></title>
    </head>
    <body>
        <h1><?php echo SITE_NAME ?></h1>
        <section id="gallery">
            <?php
                $cnt = Image::get_count();
                for ($i = 0; $i < $cnt; $i++) {
                    $img = Image::get_image($i);
            ?>
            <a href="/<?php echo $i ?>/">
                <img src="<?php echo IMAGE_PATH . $img['src'] ?>"
                title="<?php echo $img['desc'] ?>">
            </a>
            <?php } ?>
        </section>
    </body>
</html>