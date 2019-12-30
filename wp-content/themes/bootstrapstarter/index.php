<?php get_header(); ?>
<div class="col-sm-8 blog-main">
 
 <?php 
 if ( have_posts() ) { 
 while ( have_posts() ) : the_post();
 ?>
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" style="width: 100%;
    height: 100vh;
    position: absolute;">
    <source src="wp-content/uploads/2019/11/20 SEK 1920x1080.mp4" type="video/mp4">
  </video>
 <div class="krevete">

		<div class="krevetes-svieziausios" style="display:none;">
			<img id="krevetes-svieziausios-foto" src="/localocean/wp-content/uploads/2019/10/svieziausios.png">
			<div style="text-align:center;">
				<a href="#"><img class="krevetes-svieziausios-social-icon" src="/localocean/wp-content/uploads/2019/10/index-ig.png"></a>
				<a href="#"><img class="krevetes-svieziausios-social-icon" src="/localocean/wp-content/uploads/2019/10/index-fb.png"></a>
				<a href="#"><img class="krevetes-svieziausios-social-icon" src="/localocean/wp-content/uploads/2019/10/index-tw.png"></a>
			</div>
		</div>
		<div class="krevetes-lietuviskai" style="display:none;">
			<div class="krevetes-lietuviskai-1" style="font-family:PlutoSans; font-weight: 700; font-size: 40px; color: rgb(0,46,78); text-transform: uppercase;">Jei mūsų krevetės kalbėtų, jos kalbėtų lietuviškai!</div>
			<div class="krevetes-lietuviskai-2" style="font-family:PlutoSans; font-weight: 400; font-size: 24px; color: rgb(63,147,188);">Pagal unikalią Lietuvoje sukurtą vandenyno vandens ir kitų sąlygų kopijavimo technologiją dirbantis krevečių ūkis prie Rumšiškių patenkins šalies gurmanų poreikius</div>
		</div>
	</div>
 <div class="blog-post puslapio-content">

 <?php the_content(); ?>
 </div><!-- /.blog-post -->
 <?php
 endwhile;
 } 
 ?>


</div><!-- /.blog-main -->
<?php get_footer(); ?>