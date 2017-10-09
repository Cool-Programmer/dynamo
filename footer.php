	<footer>
		<p>
			<?php echo __('Copyright ', 'dy') ?>&copy; <?php bloginfo('name'); ?>
		</p>
	</footer>

	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

	<script>
		$(document).ready(function($){
			$('.my-slider').unslider({
				arrows: {
					prev: '<a class="unslider-arrow prev"><i class="fa fa-arrow-circle-left fa-3x"</a>',
					next: '<a class="unslider-arrow next"><i class="fa fa-arrow-circle-right fa-3x"</a>'
				}
			});
		})
	</script>

	<script>
		$(function(){
			$('#tabs').tabs();
		});
	</script>
	<?php wp_footer(); ?>
</body>
</html>