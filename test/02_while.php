<?php 
	$star = "*";
	$val=1;
	while ($val<6) {
		echo "$star <br />"; 
		$val=$val+1;

		while ($val==1) {
			echo "$val";
			$val=$val-1;
		}
	}
?>