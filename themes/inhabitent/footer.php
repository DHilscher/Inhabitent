<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div>

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="footer-container">
					<div class="contact-info">
						<p class="orange-text">Contact Info</p>
						<p><i class="fa fa-envelope"></i><a href="mailto:info@inhabitent.com">info@inhabitent.com</a></p>
						<p><i class="fa fa-phone"></i><a href="tel:5555555555555">778-456-7891</a></p>
						<i class="fa fa-facebook-square"></i>
						<i class="fa fa-twitter-square"></i>
						<i class="fa fa-google-plus-square"></i>
					</div>

					<div class="business-hours">
						<p class="orange-text">Business Hours</p>

						<p><span class="day-of-week">Monday-Friday:</span> 9am to 5pm</p>

						<p><span class="day-of-week">Saturday:</span> 10am to 2pm</p>

						<p><span class="day-of-week">Sunday:</span> Closed</p>
					</div>

					<div class="footer-logo">
					<a href='<?php echo get_home_url(); ?>' rel="home"><img src="<?php echo get_template_directory_uri(); ?>/images/inhabitent-logo-text.svg"></a>
					</div>
				</div>
				<div class="copyright">Copyright © 2017 Inhabitent</div>
			</footer>
		</div>

		<?php wp_footer(); ?>

	</body>
</html>
