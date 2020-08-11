<?php
$app->theme->head();
?>
<div class="container">
    <?php
    if (!defined('PARAMETERS')) {
        header('Location: ' . BASE_URL . '404');
    } else {
        $article = $app->articles->getSingle(PARAMETERS[0]);
        if (empty($article)) {
            header('Location: ' . BASE_URL . '404');
        }
    }


    ?>
    <div class="top">
        <img src="<?php echo ROOT_URL ?>uploads/posts/<?php echo $article['image'] ?>" alt="<?php echo $article['title'] ?>" class="img">
        <h1><?php echo $article['title'] ?></h1>
        <p class="excerpt">
            <?php echo $article['excerpt'] ?>
        </p>
    </div>
    <div class="article">
        <?php echo $article['cont'] ?>
    </div>
</div>
<?php
$app->theme->footer();
?>