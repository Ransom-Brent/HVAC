<footer id="footer">
	<div class="row">
		<!-- Pinterest or Instagram Feed Footer -->
		<div class="large-4 medium-4 small-12 columns">
			<h2>Pinterest Before & After Feed</h2>
			<?php echo do_shortcode('[prw username="bkmacdaddy" boardname="design-inspiration" maxfeeds="10" divname="myList" printtext="0" target="newwindow" useenclosures="yes" thumbwidth="50" thumbheight="50" showfollow=""]
'); ?>
		</div>
		<!-- Contact Info Footer  -->
		<div class="large-4 medium-4 small-12 columns">
			<?php echo get_field('contact_info', 'option'); ?>
		</div>
		<!-- Our Promise Footer -->
		<div class="large-4 medium-4 small-12 columns">
			<?php echo get_field('promise_text', 'option'); ?>
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
