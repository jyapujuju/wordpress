<?php
// for the active class
$i = 1;?>
<?php
  $defaults = array(
  'showposts' => 3,
  //category number
  'ca' => 17,
  'orderby' => 'date',
  'order' => 'DESC'
  );
  query_posts($defaults);
 ?>
 <?php if ( have_posts() ) { ?>
   <!-- not loop  -->
   <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
     <div class="carousel-inner" role="listbox">
       <!-- loop start  -->
      <?php while ( have_posts() ) { ?>
        <?php the_post(); ?>
        <div class="carousel-item <?php if ($i == 1) echo 'active'; ?>">
          <?php if ( has_post_thumbnail() ) { ?>
            <?php the_post_thumbnail( 'small', array( 'class' => 'img-fluid' ) ); ?>
          <?php }
          else {
            echo '<img src="' . get_bloginfo( 'stylesheet_directory' ). '/images/default.jpeg" />';
          }?>
          <div class="carousel-caption ">
            <h3><?php the_title(); ?></h3>
            <p class=" d-none d-md-block"><?php the_excerpt(); ?></p>
          </div>
        </div>
   <?php $i++; }   ?>
  </div>
 </div>
 <?php 	} ?>
<?php wp_reset_query(); ?>
