<div class="article_card">
    <div class="article_image">
        <?php the_post_thumbnail('medium') ?>
    </div>

    <div class="article_date">
        <?= get_the_date() ?>
    </div>

    <div class="article_title">
        <?php the_title() ?>
    </div>

    <div class="article_content">
        <?php the_excerpt() ?>
    </div>

    <div class="article_link">
        <a href="<?php the_permalink() ?>">
            Lire plus <i class="fa fa-chevron-right"></i>
        </a>
    </div>
</div>