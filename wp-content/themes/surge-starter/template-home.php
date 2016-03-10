<?php
/**
 * Template Name: Home Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
<section class="jumbotron" style="background-image:url('https://unsplash.it/1920/1080?image=881')">
	<h1 class="text-center">A vibrant electrial company <br> serving Greater brisbane</h1>
	<div class="container">
	<ul class="icon-list full-width">
		<li class="col-md-4 text-center"><i class="eletrik-icon-alarm" ></i><p>Right on time</p></li>
		<li class="col-md-4 text-center"><i class="eletrik-icon-crown" ></i><p>High quality service</p></li>
		<li class="col-md-4 text-center"><i class="eletrik-icon-lightning" ></i><p>Fast service</p></li>
	</ul>
	<a href="#" class="btn col-md-5">
		Submit Enquiry
	</a>
	<a href="#" class="btn ghost col-md-5">
		Call Now
	</a>
	</div>
	
</section>

<section id="services" class="container-fluid">
<div class="row">
	<article class="col-md-4 text-center purple-bright-bg">
		<i class="eletrik-icon-house"></i>
		<h2>Residential</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt rerum praesentium similique veritatis 
		</p>
		<a href="" class="btn ghost">Find out More</a>
	</article>
	<article class="col-md-4 text-center pink-bg">
		<i class="eletrik-icon-escalator"></i>
		<h2>Commerical</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt rerum praesentium similique veritatis 
		</p>
		<a href="" class="btn ghost">Find out More</a>
	</article>
	<article class="col-md-4 text-center purple-bg">
		<i class="eletrik-icon-industry"></i>
		<h2>Industrial</h2>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt rerum praesentium similique veritatis 
		</p>
		<a href=
		"" class="btn ghost">Find out More</a>
	</article>
	</div>
</section>
<section class="container text-center">
	<h1>Free Enquiry</h1>
	<p>Lorem ipsum Voluptate dolor aliqua dolor cupidatat Duis.</p>
	<?php displayGravityForm(get_field('form'),false,false); ?>
</section>

<?php endwhile; ?>
