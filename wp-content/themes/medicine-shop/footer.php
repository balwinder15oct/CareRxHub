</div>
<?php
	$medicine_shop_footer_bg_color = get_theme_mod('medicine_shop_footer_bg_color');
	$medicine_shop_footer_bg_image = get_theme_mod('medicine_shop_footer_bg_image');
?>
<footer class="footer-area" style="background-color: <?php echo esc_attr($medicine_shop_footer_bg_color); ?>; <?php echo ($medicine_shop_footer_bg_image) ? 'background-image: url(' . esc_url($medicine_shop_footer_bg_image) . ');' : ''; ?>">  
	<div class="container"> 
		<?php 
		$medicine_shop_footer_widgets_setting = get_theme_mod('medicine_shop_footer_widgets_setting', '1');

		do_action('medicine_shop_footer_above'); 
		
		if ($medicine_shop_footer_widgets_setting != '') { 
			if (is_active_sidebar('medicine-shop-footer-widget-area')) { ?>
				<div class="row footer-row"> 
					<?php dynamic_sidebar('medicine-shop-footer-widget-area'); ?>
				</div>  
			<?php 
			} else { ?>
				<div class="row footer-row">
					<div class="footer-widget col-lg-3 col-sm-6 wow fadeIn" data-wow-delay="0.2s">
						<aside id="search-3" class="widget widget_search default_footer_search">
							<h2 class="widget-title w-title"><?php esc_html_e('Search', 'medicine-shop'); ?></h2>
							<form method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
								<label>
									<span class="screen-reader-text">Search for:</span>
									<input type="search" class="search-field" placeholder="Search..." value="" name="s">
								</label>
								<button type="submit" class="search-submit" value="Search">
									<i class="fa fa-search"></i>
								</button>
							</form>
						</aside>
					</div>
					<div class="footer-widget col-lg-3 col-sm-6 wow fadeIn" data-wow-delay="0.2s">
						<aside id="archives-2" class="widget widget_archive">
							<h2 class="widget-title w-title"><?php esc_html_e('Recent Posts', 'medicine-shop'); ?></h2>
							<ul>
								<?php
								wp_get_archives(array(
									'type' => 'postbypost',
									'format' => 'html',
								));
								?>
							</ul>
						</aside>
					</div>
					<div class="footer-widget col-lg-3 col-sm-6 wow fadeIn" data-wow-delay="0.2s">
						<aside id="pages-2" class="widget widget_pages">
							<h2 class="widget-title w-title"><?php esc_html_e('Pages', 'medicine-shop'); ?></h2>
							<ul>
								<?php
								wp_list_pages(array(
									'title_li' => '',
								));
								?>
							</ul>
						</aside>
					</div>
					<div class="footer-widget col-lg-3 col-sm-6 wow fadeIn" data-wow-delay="0.2s">
						<aside id="categories-2" class="widget widget_categories">
							<h2 class="widget-title w-title"><?php esc_html_e('Categories', 'medicine-shop'); ?></h2>
							<ul>
								<?php
								wp_list_categories(array(
									'title_li' => '',
								));
								?>
							</ul>
						</aside>
					</div>
				</div>
			<?php } 
		} ?>
	</div>
	
	<?php 
		$medicine_shop_footer_copyright = get_theme_mod('medicine_shop_footer_copyright','');
	?>
	<?php $medicine_shop_footer_copyright_setting = get_theme_mod('medicine_shop_footer_copyright_setting','1');
	 if( $medicine_shop_footer_copyright_setting != ''){?> 
	<div class="copy-right"> 
		<div class="container">
			<p class="copyright-text">
				<?php
					echo esc_html( apply_filters('medicine_shop_footer_copyright',($medicine_shop_footer_copyright)));
			    ?>
				<?php if($medicine_shop_footer_copyright == "") { ?>
						
						<?php
						    echo esc_html(__('Copyright &copy; 2024,', 'medicine-shop'));
						?>
						<a href="https://www.seothemesexpert.com/products/free-medicine-wordpress-theme" target="blank">
							<?php
							    echo esc_html(__('Medicine Shop', 'medicine-shop'));
							?>
						</a>
						<span> | </span>
						<a href="https://wordpress.org/">
						    <?php
						        echo esc_html(__('WordPress Theme', 'medicine-shop'));
						    ?>
						</a>

				<?php } ?>
			</p>
		</div>
	</div>
	<?php }?>
	<?php $medicine_shop_scroll_top = get_theme_mod('medicine_shop_scroll_top_setting','1');
      if($medicine_shop_scroll_top == '1') { ?>
		<a id="scrolltop"><span><?php esc_html_e('TOP','medicine-shop'); ?><span></a>
	<?php } ?>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>