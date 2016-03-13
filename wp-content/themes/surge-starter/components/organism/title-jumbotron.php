<?php 
	$args['image'] = $args[1];
	$args['title'] = $args[2];
 ?>
<section class="jumbotron title" style="background-image:url('<?php echo $args['image']; ?>')">
<?php if(strlen($args['title']) > 0){ ?>
	<h1 class="text-center col-md-12"><?php echo $args['title']; ?></h1>
	<?php } ?>
</section>