<?php 
	function add($val1,$val2,$val3,$val4,$val5){
		$result=$val1+$val2+$val3+$val4+$val5;
		return $result;
	}
	function average($entities){
		$the_average= add(2,3,4,4,5)/$entities;
		return $the_average;
	}

	$new_result= average(5);
	echo $new_result;
	
?>