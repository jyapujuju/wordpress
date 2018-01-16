<?php
/*
The Single Posts Loop
=====================
*/
?>

  <?php if(have_posts()): while(have_posts()): the_post(); ?>
  <article role="article" id="post_<?php the_ID()?>" <?php post_class()?>>
    <header>
      <h1>
        <?php the_title()?>
      </h1>
      <p class="mb-0">
        <em>
          <?php get_template_part('loops/post_logs'); ?>
        </em>
      </p>
      <p class="text-muted" style="margin-bottom: 30px;">
        <i class="fa fa-folder-open"></i>&nbsp;
        <?php _e('Filed under', 'b4st'); ?>:
        <?php the_category(', ') ?><br/>
      </p>
    </header>
    <main class="single-post-article">
      <?php the_post_thumbnail(); ?>
      <?php the_content()?>
      <?php wp_link_pages(); ?>
    </main>
  </article>
  <?php endwhile; ?>
  <?php else: ?>
  <?php wp_redirect(get_bloginfo('url').'/404', 404); exit; ?>
  <?php endif; ?>
