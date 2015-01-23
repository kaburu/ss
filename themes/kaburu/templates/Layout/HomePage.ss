<% require themedCSS('nivo-slider') %>
<% require themedCSS('slider-styles') %>
<div>
	<article>
		<%-- <div>
  			<img src="http://www.silverstripe.org/themes/silverstripe/images/sslogo.png" alt="Homepage image" />
		</div> --%>
		
		<%-- <h1>$Title</h1> --%>

		<!-- I'm going to insert a slideshow here -->
		<!-- slideshow is working, just needs to be fixed first then inserted with it's associated files(js, css, imgs) -->
		<%-- <div class="banner">
		 <div id="wrapper">
				<div class="slider-wrapper theme-default">
					<div id="slider" class="nivoSlider">
						<img src="{$ThemeDir}/images/banner1.jpg"  alt="" />
						<img src="{$ThemeDir}/images/banner2.jpg"  alt="" />
						<img src="{$ThemeDir}/images/banner3.jpg"  alt="" />
						<div class="nivo-caption"></div><div class="nivo-directionNav"><a class="nivo-prevNav">Prev</a><a class="nivo-nextNav">Next</a></div>
					</div>
				</div>
		 </div>
		</div> --%>
		<!-- I'm going to end slideshow here -->
		
		<div>$Content</div>
	</article>

</div>

<script type="text/javascript" src="{$ThemeDir}/javascript/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="{$ThemeDir}/javascript/eric_script.js"></script>
<script type="text/javascript" src="{$ThemeDir}/javascript/jquery.nivo.slider.js"></script>
<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>