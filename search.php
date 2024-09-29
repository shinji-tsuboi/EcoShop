<?php get_header(); ?>

<section id="search">
    <div class="search-result">
        <h2><?php echo esc_html(get_search_query()); ?>の検索結果</h2>
        <?php if (have_posts()) : ?>
            <ul>
                <?php while (have_posts()) : the_post(); ?>
                <li class="search-result-list">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    <div><?php the_excerpt(); ?></div>
                </li>
                <?php endwhile; ?>
            </ul>
            <?php the_posts_navigation(); // ページネーション ?>
            <?php else : ?>
                <p>検索結果が見つかりませんでした。</p>
                <?php endif; ?>
    </div>
    <div class="search-img">
        <img src="<?php echo get_template_directory_uri(); ?>/image/PC/cta.jpg" alt="#">
    </div>
</section>

<?php get_footer(); ?>
