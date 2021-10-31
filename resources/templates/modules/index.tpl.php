<?php if (have_rows('modules')) : ?>
  <?php while (have_rows('modules')) : the_row(); ?>
     <?php do_action('theme/module/title'); ?>
  <?php endwhile; ?>
<?php endif; ?>