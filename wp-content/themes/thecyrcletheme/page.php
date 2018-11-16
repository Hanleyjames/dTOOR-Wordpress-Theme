<?php get_header(); ?>
<div class="page-slug" <?php page_class(); ?>>
  <div class="col-md-12">
    <h1><?php the_title();?></h1>
  </div>
  <div class="col-md-12" >
    <?php the_content();?>
  </div>
</div>
<?php get_footer(); ?>
