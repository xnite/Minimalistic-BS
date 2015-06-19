<div class="sidebar">
				<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Right Sidebar')) : ?><?php endif; ?>
			</div>
		</div>
		<div class="footer">
			<p class="text-center">Copyright<sup>&copy;</sup><?php echo date("Y"); ?>; <?php bloginfo('name'); ?>. | Designed by <a href="https://xnite.me/">Robert Whitney</a> &lt;<a href="mailto:xnite@xnite.me">xnite@xnite.me</a>&gt;</p>
		</div>
		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
			<!-- Latest compiled and minified JavaScript -->
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

			<script src="<?php echo get_template_directory_uri(); ?>/js/konami.js"></script>
			<script type="text/javascript">
				var easter_egg = new Konami();
				attempts = 0;
				easter_egg.code = function() {
					attempts = attempts+1;
					if(attempts == 1)
					{
						alert("There are no easter eggs on this site");
					}
					if(attempts == 2)
					{
						alert("Go away! there are no easter eggs for you!");
					}
					if(attempts == 3)
					{
						var audio = new Audio();
						audio.src = '<?php echo get_template_directory_uri(); ?>/rickroll.mp3';
						audio.play();
				
						var image = document.getElementById('bio-avatar');
						image.src = "http://t-eska.cdn.smcloud.net/common/4/0/s/408961pUl.jpg/ru-0-ra-200,200-n-408961pUl_rick_astley.jpg";
					}
					if(attempts >= 4)
					{
						alert("THE GAME\nYou just lost it.\n\nHappy now?");
					}
					
				}
				easter_egg.load();
			</script>
			<?php wp_footer(); ?>
	</body>
</html>