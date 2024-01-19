<?php get_header() ?>

<main>
    <section class="actu">
        <div class="articles">
            <?php while (have_posts()) {
                the_post();
                get_template_part('template-parts/card');
            } ?>
        </div>
    </section>
</main>

<?php get_footer() ?>