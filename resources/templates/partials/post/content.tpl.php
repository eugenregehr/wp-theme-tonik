<article>
    <h1><?php the_title(); ?></h1>

    <time>
        <small><?php the_date(); ?></small>
    </time>

    <p><?php do_action('theme/modules'); ?></p>
</article>