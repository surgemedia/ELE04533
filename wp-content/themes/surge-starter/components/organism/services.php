<?php 
	$args['repeater'] = $args[1];

 ?>
<section id="services" class="container-fluid">
<div class="row">
<?php 
$repeater = $args['repeater'];
// debug($repeater);
for ($i=0; $i < sizeof($repeater); $i++) {
	includePart('components/molecule/single-service.php',
		$repeater[$i]['icon'],
		$repeater[$i]['color'],
		$repeater[$i]['title'],
		$repeater[$i]['description'],
		$repeater[$i]['link'],
		$repeater[$i]['link_text'],
		'col-md-4'
		);
 }
unset($repeater);

  ?>
	</div>
</section>