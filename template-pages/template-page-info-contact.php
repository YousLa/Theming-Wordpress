<?php /* Template Name: Page avec des infos contact */ ?>


<?php get_header() ?>


<main>
    <div class="content">
        <?php the_post() ?>
        <?php the_content() ?>
    </div>

    <div class="contact_info">
        <p>Rue ...</p>
    </div>
</main>


<?php get_footer() ?>