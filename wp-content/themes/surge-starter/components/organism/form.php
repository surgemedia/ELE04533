<?php 
	$args['title'] = $args[1];
	$args['desc'] = $args[2];
	$args['form'] = $args[3];
 ?>

<section id="enquiry" class="container text-center">
	<h1><?php echo $args['title']; ?></h1>
	<p><?php echo $args['desc']; ?></p>
	<div class="col-md-10 col-md-offset-1">
	<?php displayGravityForm($args['form'],false,false,false,true,0); ?>
	</div>
</section>

