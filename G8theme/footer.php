</div>
<footer class="footer-area">
    <div class="footer-socials">
        <div class="container">
		<?php 
			if ( is_home() && wpjam_theme_get_setting('foot_link') ) {
				echo '<ul class="link-body clearfix">';
				echo wp_list_bookmarks('title_li=&categorize=0');
				echo '</ul>';
			}
		?>
        </div>
    </div>
    <div class="container">
        <div class="xintheme-footer clearfix">
				<?php 
					echo 'Build by Group 8';
					
				?>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>