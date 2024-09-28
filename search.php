<?php get_header(); ?>

<h1>検索結果</h1>

<?php if (have_posts()) : ?>
    <ul>
        <?php while (have_posts()) : the_post(); ?>
            <li>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                <div><?php the_excerpt(); ?></div>
            </li>
        <?php endwhile; ?>
    </ul>
    <?php the_posts_navigation(); // ページネーション ?>
<?php else : ?>
    <p>検索結果が見つかりませんでした。</p>
<?php endif; ?>

<?php get_footer(); ?>
