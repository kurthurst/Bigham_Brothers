<?php if(is_page('home')){ ?>
<div class="row clearfix">
  <div class="c8">
    <?php echo do_shortcode( '[responsive_slider]' ); ?>
  </div>
  <div class="c4 end">
                    <ul class="menu-secondary desktop">
                        <li><a href="<?php bloginfo(url); ?>/bbcfg/">Build your tool</a></li>
                        <li><a href="<?php bloginfo('url'); ?>/find-a-dealer">Find a dealer</a></li>
                    </ul>
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
  <div class="c4 end">
                    <ul class="menu-secondary desktop">
                        <li><a href="<?php bloginfo(url); ?>/bbcfg/">Build your tool</a></li>
                        <li><a href="<?php bloginfo('url'); ?>/find-a-dealer">Find a dealer</a></li>
                    </ul>
    <?php get_sidebar('main'); ?>
  </div>
</div>
<?php wp_reset_query(); ?>
<?php } elseif(is_page("find-a-dealer")){?>
<div class="row clearfix">
  <div class="c8">
    <?php echo do_shortcode('[SLPLUS]'); ?>
  </div>
  <div class="c4 end">
                    <ul class="menu-secondary desktop">
                        <li><a href="<?php bloginfo(url); ?>/bbcfg/">Build your tool</a></li>
                        <li><a href="<?php bloginfo('url'); ?>/find-a-dealer">Find a dealer</a></li>
                    </ul>
    <?php get_sidebar('main'); ?>
  </div>
</div>
<?php wp_reset_query(); ?>
<?php } elseif(is_page()){?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <div class="row clearfix">
    <div class="c8">
      <h2><?php the_title(); ?></h2>
        <?php if(has_post_thumbnail()) { 
                the_post_thumbnail('large');
              } else {} ?>

              <?php if (!is_page(array('all-products', 'literature', 'about'))) { ?>
          <div id="accordion">
            <h3>Overview</h3>
            <div>
              <?php the_field('overview'); ?>
            </div>
            <h3>Features</h3>
            <div>
              <?php the_field('features'); ?>
            </div>
            <h3>Options</h3>
            <div>
              <div id="options-accordion">
                <h3>Tool Bar</h3>
                <div>
                  <?php the_field('tool_bar'); ?>
                </div>
                <h3>Row Spacing</h3>
                <div>
                  <?php the_field('row_spacing'); ?>
                </div>
                <h3>Gang Type</h3>
                <div>
                  <?php the_field('gang_type'); ?>
                </div>
                <h3>Height Adjustment</h3>
                <div>
                  <?php the_field('height_adjustment'); ?>
                </div>
                <h3>Row Cleaner</h3>
                <div>
                  <?php the_field('row_cleaner'); ?>
                </div>
                <h3>Coulter</h3>
                <div>
                  <?php the_field('coulter'); ?>
                </div>
               </div>
            </div>
            <h3>Parts and Manuals</h3>
            <div>
              <?php the_field('parts'); ?>
            </div>
            <h3>Gallery</h3>
            <div>
              <?php the_field('gallery'); ?>
            </div>
          </div>
          <div id="tabs">
            <ul>
              <li><a href="#tabs-1">Overview</a></li>
              <li><a href="#tabs-2">Features</a></li>
              <li><a href="#tabs-3">Options</a></li>
              <li><a href="#tabs-4">Parts and Manuals</a></li>
              <li><a href="#tabs-5">Gallery</a></li>

            </ul>
            <div id="tabs-1">
           <?php the_field('overview'); ?>
            </div>
            <div id="tabs-2">
              <?php the_field('features'); ?>
            </div>
            <div id="tabs-3">
              <div id="options-accordion-2">
                <h3>Tool Bar</h3>
                <div>
                  <?php the_field('tool_bar'); ?>
                </div>
                <h3>Row Spacing</h3>
                <div>
                  <?php the_field('row_spacing'); ?>
                </div>
                <h3>Gang Type</h3>
                <div>
                  <?php the_field('gang_type'); ?>
                </div>
                <h3>Height Adjustment</h3>
                <div>
                  <?php the_field('height_adjustment'); ?>
                </div>
                <h3>Row Cleaner</h3>
                <div>
                  <?php the_field('row_cleaner'); ?>
                </div>
                <h3>Coulter</h3>
                <div>
                  <?php the_field('coulter'); ?>
                </div>
               </div>
            </div>
            <div id="tabs-4">
              <?php the_field('parts'); ?>
            </div>
            <div id="tabs-5">
              <?php the_content(); ?>
            </div>
          </div>
        <?php } else {
         the_content(); 
        } ?>
    </div>
    <div class="c4 end">
                    <ul class="menu-secondary desktop">
                        <li><a href="<?php bloginfo(url); ?>/bbcfg/">Build your tool</a></li>
                        <li><a href="<?php bloginfo('url'); ?>/find-a-dealer">Find a dealer</a></li>
                    </ul>
        <?php get_sidebar('main'); ?>
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
    <div class="c4 end">
                    <ul class="menu-secondary desktop">
                        <li><a href="<?php bloginfo(url); ?>/bbcfg/">Build your tool</a></li>
                        <li><a href="<?php bloginfo('url'); ?>/find-a-dealer">Find a dealer</a></li>
                    </ul>
        <?php get_sidebar('main'); ?>
    </div>
  </div>
<?php endwhile; else: ?>
  <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
<?php wp_reset_query();?>
<?php } elseif(is_search()){?>
<div class="row clearfix">
  <div class="c8">
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
</div>
<div class="c4 end">
                    <ul class="menu-secondary desktop">
                        <li><a href="<?php bloginfo(url); ?>/bbcfg/">Build your tool</a></li>
                        <li><a href="<?php bloginfo('url'); ?>/find-a-dealer">Find a dealer</a></li>
                    </ul>
        <?php get_sidebar('main'); ?>
    </div>
</div>
<?php wp_reset_query();?>
<?php } ?>