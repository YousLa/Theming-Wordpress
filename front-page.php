<!-- include('header.php') -->
<?php get_header() ?>

<main>
    <section class="actu">
        <div class="top">
            <h1><?= __('LAST_NEWS', 'khun') ?></h1>
            <a href="/articles"><span class="fa fa-chevron-right"></span><?= __('ALL_NEWS', 'khun') ?></a>
        </div>
        <!--  -->
        <div class="articles">
            <?php $loop = getLastNews() ?>
            <?php while ($loop->have_posts()) {
                $loop->the_post();
                get_template_part('template-parts/card');
            } ?>
        </div>

    </section>
</main>

<!-- include('footer.php') -->
<?php get_footer() ?>