<footer id="footer">
	<div class="row">
		<!-- Pinterest or Instagram Feed Footer -->
		<div class="large-4 medium-4 small-12 columns">
			
		</div>
		<!-- Contact Info Footer  -->
		<div class="large-4 medium-4 small-12 columns">
			<?php echo get_field('contact_info'); ?>
		</div>
		<!-- Our Promise Footer -->
		<div class="large-4 medium-4 small-12 columns">
			<?php echo get_field('promise_text'); ?>
		</div>
	</div>	
</footer>


	<?php wp_footer(); ?>
	
	<!-- Mobile Menu -->
	<script>
		jQuery(document).ready(function () {
			jQuery('header nav').meanmenu();
		});
	</script>	
	
	<script>
    	$(document).foundation();
	</script>
	
</body>

</html>
