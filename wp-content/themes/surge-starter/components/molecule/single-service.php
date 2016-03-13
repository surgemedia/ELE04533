<?php 
	$args['icon'] = $args[1];
	$args['color'] = $args[2];
	$args['title'] = $args[3];
	$args['desc'] = $args[4];
	$args['href'] = $args[5];
	$args['btn-text'] = $args[6];
	$args['col'] = $args[7];


	
 ?>

<article class="service  text-center <?php echo $args['color']; ?> <?php echo $args['col']; ?> ">
		<i class="<?php echo $args['icon']; ?>"></i>
		<h2><?php echo $args['title']; ?></h2>
		<p><?php echo $args['desc']; ?>
		</p>
		<?php if(strlen($args['btn-text']) > 0){ 
			  //check if button has text
		?>
		<a href="<?php $args['href']; ?>" class="btn ghost"><?php $args['btn-text'] ?></a>
		<?php } ?>
	</article>