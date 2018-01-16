<?php get_header(); ?>

<div class="container">
  <div class="row">

    <div class="col-sm-12">

      <div id="content" role="main">
        <header>
          <h1><?php echo single_cat_title(); ?></h1>
          <hr>
        </header>

            <div class="card-columns">
              <?php
              /* Start the Loop */
              while ( have_posts() ) : the_post();?>
                <div class="card">
                  <?php if ( has_post_thumbnail() ) : ?>
                      <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                          <?php the_post_thumbnail('medium',['class' => 'card-img-top']); ?>
                      </a>
                  <?php endif; ?>
                   <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                   <div class="card-block">
                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                      <h4 class="card-title px-2"><?php the_title(); ?></h4>
                    </a>
                     <p class="card-text px-2"><?php the_excerpt();?></p>
                   </div>
                   <div class="card-footer">
                     <small class="text-muted"><?php get_template_part('loops/post_logs'); ?></small>
                   </div>
                </div>
              <?php
              endwhile;?>
              </div><!-- #primary -->






      </div><!-- /#content -->
    </div>


  </div><!-- /.row -->
</div><!-- /.container -->

<?php get_footer(); ?>
