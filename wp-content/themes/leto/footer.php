<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Leto
 */

?>

			</div>
		</div>
	</div><!-- #content -->

	<?php do_action( 'leto_before_footer' ); ?>

	<footer id="colophon" class="site-footer">
		<div class="box-content">
			<div class="address">
				<p>Địa chỉ cửa hàng: 53 Võ Văn Ngân, Thủ Đức, TP.HCM</p>
				<p>Phone: 0123123123</p>
				<p>Email: shopsix@gmail.com</p>
			</div>
			<div class="right-address">
				<p>Facebook: facebook/shopsix</p>
				<p>Instagram: instagram/shopsix</p>
			</div>
		</div>
		<a href="/">Shopsix - Nhóm 6</a>
		<?php //do_action( 'leto_footer' ); ?>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php do_action( 'leto_after_page' ); ?>

<?php wp_footer(); ?>

</body>
</html>
