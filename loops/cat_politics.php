<?php
  $defaults = array(
  'showposts' => 3,
  //category number
  'cat' => 4,
  'orderby' => 'date',
  'order' => 'DESC'
  );
  query_posts($defaults);
 ?>
 <?php if ( have_posts() ) { ?>
   <!-- not loop  -->
      <h3 class="text-center widget card-header"><?php echo get_cat_name(4);?></h3>
       <!-- loop start  -->
      <?php while ( have_posts() ) { ?>
        <?php the_post(); ?>
        <!-- html -->
        <div class="row my-2 home-5-excerpts">

          <div class="col-md-2">
            <?php if ( has_post_thumbnail() ) { ?>
              <?php the_post_thumbnail( 'small', array( 'class' => 'img-fluid' ) ); ?>
            <?php }
            else {
              echo '<img src="' . get_bloginfo( 'stylesheet_directory' ). '/images/default.jpeg" />';
            }?>
          </div>

          <div class="col-md-10">
            <a href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a>
            <small><?php get_template_part('loops/post_logs'); ?></small>
          </div>

        </div>

        <!-- html end -->
   <?php }   ?>
 <?php 	} ?>
<?php wp_reset_query(); ?>
