<?php require \Helpers\get_fragment_path('__header') ?>

<h2><?php echo $item['desc'] ?></h2>
<p><a href="/">На главную</a></p>
<section id="gallery-item">
    <img src="../images/<?php echo $item['src'] ?>" alt="">
</section>
<p><a href="/">На главную</a></p>

<?php require \Helpers\get_fragment_path('__footer') ?>