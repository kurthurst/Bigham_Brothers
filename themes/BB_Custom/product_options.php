<?php if (is_page(array('terratill', 'paratill'))){ ?>
	<div id="options-accordion">
                <h3>Coulters</h3>
                <div>
                  <?php the_field('tt_coulters'); ?>
                </div>
                <h3>Bedding Tools</h3>
                <div>
                  <?php the_field('tt_bedding_tools'); ?>
                </div>
                <h3>Finishing Tools</h3>
                <div>
                  <?php the_field('tt_finishing_tools'); ?>
                </div>
                <h3>Gauge Wheels</h3>
                <div>
                  <?php the_field('tt_gauge_wheels'); ?>
                </div>
                <h3>Other Options</h3>
                <div>
                  <?php the_field('tt_other_options'); ?>
                </div>
               </div>

<?php } elseif (is_page('strip-till')) { ?>
				<div id="options-accordion">
                <h3>Tool Bar</h3>
                <div>
                  <?php the_field('st_tool_bar'); ?>
                </div>
                <h3>Row Spacing</h3>
                <div>
                  <?php the_field('st_row_spacing'); ?>
                </div>
                <h3>Gang Type</h3>
                <div>
                  <?php the_field('st_gang_type'); ?>
                </div>
                <h3>Height Adjust</h3>
                <div>
                  <?php the_field('st_group_one'); ?>
                </div>
                <h3>Row Cleaner</h3>
                <div>
                  <?php the_field('st_group_two'); ?>
                </div>
                <h3>Tillage Shank</h3>
                <div>
                  <?php the_field('st_group_three'); ?>
                </div>
                <h3>Covering Disc</h3>
                <div>
                  <?php the_field('st_group_four'); ?>
                </div>
                <h3>Rear Conditioning Tool</h3>
                <div>
                  <?php the_field('st_group_five'); ?>
                </div>
                <h3>Other Options</h3>
                <div>
                  <?php the_field('st_other_options'); ?>
                </div>
               </div>
<?php } elseif (is_page('mega-till')) { ?>
				<div id="options-accordion">
                <h3>Tool Bar</h3>
                <div>
                  <?php the_field('mt_tool_bars'); ?>
                </div>
                <h3>Other Options</h3>
                <div>
                  <?php the_field('mt_other_options'); ?>
                </div>
               </div>
<?php } elseif (is_page('chisel-plow')){ ?>
				<div id="options-accordion">
                <h3>Tool Bar</h3>
                <div>
                  <?php the_field('cp_tool_bar'); ?>
                </div>
                <h3>Chisel Clamps</h3>
                <div>
                  <?php the_field('cp_chisel_clamps'); ?>
                </div>
                <h3>Accessories</h3>
                <div>
                  <?php the_field('cp_accessories'); ?>
                </div>
               </div>
<?php } else {
	the_field('options'); 
} ?>