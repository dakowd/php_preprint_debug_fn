<?php 
if(!function_exists('preprint')){
	function preprint($term, $halt = false) {
		echo "<pre>";
		if (is_bool($term) || empty($term)){
			var_dump($term);
		}else{
			print_r($term);
		}
		echo "</pre>";
		if($halt){
			die();
		}
	}
}
?>