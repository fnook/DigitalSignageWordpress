<?php
/**
 * Footer
 *
 * Displays content shown in the footer section
 *
 * @package WordPress
 * @subpackage Foundation, for WordPress
 * @since Foundation, for WordPress 1.0
 */
?>

            </div> <!-- end .page-wrap -->


	<div class="row footer">
        <?php wp_footer(); ?>
		<?php dynamic_sidebar('footer_left'); ?>
		<?php dynamic_sidebar('footer-right'); ?>
	</div>

	<script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js' type='text/javascript' charset='utf-8'></script>
    <script src="<?php bloginfo('template_url'); ?>/javascripts/foundation/foundation.js"></script>

    <script src="<?php bloginfo('template_url'); ?>/javascripts/foundation/foundation.reveal.js"></script>
	
  
  <script>
$(function() {
    $(document).foundation();
    	$('.gallery').last().addClass('end');
		$('.scroll').on('click', function(e) {
		    e.preventDefault();
		    Foundation.lib_methods.scrollTo($(window), $($(e.currentTarget).attr('href')).offset().top, 200);
		});
	    $('#hamburger').on('click', function(e) {
	    	e.preventDefault();
			$('#dropit').toggleClass('show');
    	});
	    $('#dropit>li>a').on('click', function(e) {
			$('#dropit').toggleClass('show');
		});
});

  </script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-4715805-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>  
</body>
</html>