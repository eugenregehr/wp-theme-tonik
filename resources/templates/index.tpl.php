<?php get_header(); ?>

<section class="section">
    <div class="container">
        <?php if (have_posts()) : ?>
            <h4>Posts</h4>

            <div class="posts">
                <?php while (have_posts()) : the_post() ?>
                    <?php do_action('theme/index/post/thumbnail'); ?>
                <?php endwhile; ?>
            </div>
        <?php else : ?>
            <?php do_action('theme/index/content/none'); ?>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>