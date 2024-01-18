<div class="article_card">
    <p><?php the_post_thumbnail('thumbnail') ?></p>
    <p class="article_date"><?php the_date() ?></p>
    <p class="article_title"><?php the_title() ?></p>
    <div class="article_content"><?php the_excerpt() ?></div>
    <a href="<?php the_permalink() ?>">Lire plus ></a>
</div>