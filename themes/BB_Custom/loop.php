<?php if(is_page('home')){ ?>
<div class="row clearfix">
  <div class="c8">
    <?php echo do_shortcode( '[responsive_slider]' ); ?>
  </div>
  <div class="c4">
    <?php get_sidebar('main'); ?>
  </div>

</div>
<?php } elseif(is_home()){?>
<div class="row clearfix">
  <div class="c8">
    <?php if ( have_posts () ) : while ( have_posts () ) : the_post(); ?>
    <article>
      <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
      <?php if(has_post_thumbnail()) { 
        the_post_thumbnail('thumbnail');
      } else {} ?>
      <?php the_excerpt(); ?>
  <?php endwhile; else : ?>
  <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
  <?php endif; ?>
  </div>
</div>
<?php wp_reset_query(); ?>
<?php } elseif(is_page("find-a-dealer")){?>
<div class="row clearfix">
  <div class="c8">
    <?php echo do_shortcode('[SLPLUS]'); ?>
  </div>
</div>
<?php wp_reset_query(); ?>
<?php } elseif(is_page()){?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="row"><div class="c12"><h2><?php the_title(); ?></h2>
<?php if(has_post_thumbnail()) { 
        the_post_thumbnail('large');
      } else {} ?>
</div></div>
<div class="row clearfix">
  <div class="c8">
    <?php if (!is_page(array('all-products', 'literature'))) { ?>
          <div id="tabs">
            <ul>
              <li><a href="#tabs-1">Overview</a></li>
              <li><a href="#tabs-2">Features</a></li>
              <li><a href="#tabs-3">Specifications</a></li>
              <li><a href="#tabs-4">Compare</a></li>
              <li><a href="#tabs-5">Support</a></li>

            </ul>
            <div id="tabs-1">
           <?php echo get_post_meta($post->ID, 'overview', true); ?>
            </div>
            <div id="tabs-2">
            	<?php echo get_post_meta($post->ID, 'features', true); ?>
            </div>
            <div id="tabs-3">
            	<?php echo get_post_meta($post->ID, 'specifications', true); ?>
            </div>
            <div id="tabs-4">
            	<?php echo get_post_meta($post->ID, 'compare', true); ?>
            </div>
            <div id="tabs-5">
            	<?php echo get_post_meta($post->ID, 'support', true); ?>
            </div>
          </div>
        <?php } else {} ?>
</div>
</div>
	<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
<?php wp_reset_query();?>
<?php } elseif(is_single()){?>
<?php if (have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <div class="row clearfix">
    <div class="c8">
      <article>
      <h2><?php the_title(); ?></h2>
      <?php if(has_post_thumbnail()){
        the_post_thumbnail('large');
      } else {} ?>
      <?php the_content(); ?>
    </article>

    </div>
  </div>
<?php endwhile; else: ?>
  <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
<?php wp_reset_query();?>
<?php } elseif(is_search()){?>
<div class="row clearfix">
  <div class="c7">
<h2>Search results for: <?php echo get_search_query(); ?></h2>
<p><?php echo $wp_query->found_posts; ?> result(s) found.</p>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <h3><a href="<?php the_permalink();?>" title="<?php the_title();?>"><?php the_title(); ?></a></h3>
  <article>
    <?php 
    $myOverview = get_post_meta($post->ID, 'overview', true);
    if ($myOverview != null) {
      echo '<p>' . $myOverview . '</p>';
    } else {
      the_excerpt(); } ?>
  </article>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
</div></div>
<?php wp_reset_query();?>
<?php } ?>