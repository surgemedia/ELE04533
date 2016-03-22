<?php 
	$args['title'] = $args[1];
	$args['img'] = $args[2];
	$args['pink_button_text'] = $args[3];
	$args['pink_button_link'] = $args[4];
	$args['clear_button_text'] = $args[5];
	$args['clear_button_link'] = $args[6];

 ?>
<section class="jumbotron" style="background-image:url(<?php echo $args['img']; ?>)">
	<h1 class="text-center col-md-6 col-md-offset-3"><?php echo $args['title']; ?></h1>
	<div class="container">
		<div class="col-sm-12 col-md-10 col-md-offset-1">
			<?php includePart('/components/molecule/icon-list.php'); ?>
			<a href="<?php echo $args['pink_button_link'] ?>" class="btn col-xs-12 col-md-5"><?php echo $args['pink_button_text'] ?></a>
			<a href="<?php echo $args['clear_button_link'] ?>" class="btn ghost col-xs-12 col-md-5"><?php echo $args['clear_button_text'] ?></a>
		</div>
	</div>
</section>