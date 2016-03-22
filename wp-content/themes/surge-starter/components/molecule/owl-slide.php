<?php 
  $args['title'] = $args[1];
  $args['img'] = $args[2];
  $args['content'] = $args[3];
  $args['role'] = $args[4];
 ?>
     <img  style='background-image:url(<?php echo $args['img'];?>)' alt="" >
        	<div class="small-block text-center">
        		<h2><?php echo $args['title']; ?></h2>
						<small><?php echo $args['role']; ?></small>
        		<div class="">
						<a class="info-more" href>READ MORE</a>
						<div class="custom-nav row">
              <div class="col-xs-6">
                <div class="customPrevBtn">PREVIOUS</div>
              </div>
              <div class="col-xs-6">
                <div class="customNextBtn">NEXT</div>
              </div>
            </div>
            </div>
						<div class="content">
            <p>
            <?php  echo $args['content']; ?>
            </p>
            </div>

						<a class="info-close" href=""><i class="eletrik-icon-delete"></i></a>
        	</div>