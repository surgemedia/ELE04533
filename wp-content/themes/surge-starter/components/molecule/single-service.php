<?php 
	$args['icon'] = $args[1];
	$args['color'] = $args[2];
	$args['title'] = $args[3];
	$args['desc'] = $args[4];
	$args['link'] = $args[5];
	$args['link_text'] = $args[6];
	$args['col'] = $args[7];
 ?>

<article class="service  text-center <?php echo $args['color']; ?> <?php echo $args['col']; ?> ">
		<i class="<?php echo $args['icon']; ?>"></i>
		<h2><?php echo $args['title']; ?></h2>
		<p><?php echo strip_tags($args['desc']); ?></p>
		<?php if( strlen($args['link']) > 0){ ?>
		<a target="_blank" href="<?php echo $args['link']; ?>" class="btn ghost"><?php echo $args['link_text'] ?></a>
		<?php } ?>
</article>