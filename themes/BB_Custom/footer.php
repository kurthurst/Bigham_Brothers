		<div class="row clearfix footer">
			<div class="c12">
				<?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container_class' => 'menu-footer') ); ?>
			</div>
		</div>
		<div class="row clearfix bottom">
			<div class="c12 copy">
				<p>Copyright &copy; <?php echo date("Y"); ?> Bigham Brothers, INC. All rights reserved.</p>
			</div>
		</div>

        <script src="<?php bloginfo(template_url); ?>/js/plugins.js"></script>
        <script src="<?php bloginfo(template_url); ?>/js/main-ck.js"></script>
        <?php wp_footer(); ?>
        
    </div><!-- close main wrapper -->
    </body>
</html>