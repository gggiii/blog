<?php
$app->theme->head();
?>
<div class="topOptions">
    <select class="articleFilter" onchange="selectChange(this)">
        <option value="new">Newset</option>
        <option value="popular">Most red</option>
        <option value="trending">Newset</option>
    </select>

</div>
<div class="container">

    <div class="main">
        <?php
        $all = $app->articles->getAll();
        foreach ($all as $id => $article) :
        ?>
            <article>
                <a href="<?php echo BASE_URL?>article/<?php echo $article['id']?>">
                    <img src="<?php echo ROOT_URL . 'uploads/posts/' . $article['image'] ?>" alt="<?php echo $article['title']; ?>">
                    <div class="details">
                        <p class="title"><?php echo $article['title']; ?></p>
                        <p class="excerpt"><?php echo $article['excerpt']; ?></p>
                    </div>
                </a>
            </article>

        <?php

        endforeach;
        ?>

    </div>
    <div class="sidebar">
        text
    </div>

</div>

<?php
$app->theme->footer();
?>