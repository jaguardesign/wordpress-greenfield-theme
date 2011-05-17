<?php get_header(); ?>

<?php if (have_posts()) : ?>
  <?php $post = $posts[0];  /* HACK: Set $post so that the_date() works. */ ?>

  <?php get_template_part('partials/archive-title'); ?>

  <?php while (have_posts()) : ?>
    <?php the_post(); ?>
    <?php get_template_part('partials/post'); ?>
  <?php endwhile; ?>

  <?php get_template_part('partials/page-navigation'); ?>

<?php else : ?>
  <?php get_template_part('partials/not-found'); ?>  
<?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>

