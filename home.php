<?php get_header();
$currentPage = get_query_var('paged') === 0 ? 1 : get_query_var('paged');
$search_link = get_bloginfo('url') . get_locale() === 'fr_FR' ? '/articles/' : '/en/news/';
global $wp_query;
$totalPage = ceil($wp_query->found_posts / $posts_per_page);
?>

<section class="search">
    <div class="search_content">
        <h1><?= __('NEWS', 'khun') ?></h1>
        <form action="<?= $search_link ?>">
            <input name="s" value="<?= get_query_var('s') ?>" type="text" placeholder="<?= __('FIND_NEWS_PLACEHOLDER', 'khun') ?>">
            <button>
                <i class="fa fa-search"></i>
            </button>
        </form>
    </div>
</section>

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


<section class="pagination">

    <div>
        <?php if (get_previous_posts_link()) {
            previous_posts_link(
                '<i class="fa fa-chevron-left"> </i>' . __('PREVIOUS_PAGE', 'khun')
            );
        } ?>
    </div>
    <div>
        <?php if ($wp_query->found_posts > $posts_per_page) { ?>

            <span><?= $currentPage ?></span>/<span> <?= $totalPage ?></span>
        <?php } ?>
    </div>
    <div>
        <?php if (get_next_posts_link()) {
            next_posts_link(
                __('NEXT_PAGE', 'khun') . '<i class="fa fa-chevron-right"> </i>'
            );
        } ?>
    </div>

</section>


<?php get_footer() ?>