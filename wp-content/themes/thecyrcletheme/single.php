<?php get_header(); ?>
<div class="flex-container-content">
  <div class="page-slug" <?php post_class(); ?>>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <h2><?php the_title(); ?></h2>
      <?php the_content(); ?>
    <?php endwhile; ?>
  </div>
</div>
<?php get_footer(); ?>
