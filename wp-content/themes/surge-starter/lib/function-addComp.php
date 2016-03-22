<?php 
	//echo file_get_contents('./css/test.css');	
function addComponent($files){
			$styleDir = '';
			$compDir = '';
			$vars = $files['vars'];
			//Set bucket for styles
			$files['concatStyles'];

			for ($i=0; $i < sizeof($files['styles']); $i++) { 
				//add into on string and add to bucket
				$files['concatStyles'] .= " ".file_get_contents($styleDir.$files['styles'][$i].'.css');
			}
			include(locate_template($compDir.$files['template'].'.php'));
			unset($files);
			unset($vars);
			}