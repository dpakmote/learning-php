<?php
	
	/* while ($i <= 100) {
		echo $i=$i+3 .'<br />';
	}

	for ($i=0; $i < 100 ; $i=$i+3) { 
		echo $i . '<br />';
	} */

	$string = 5;

	for ($i=$string; $i < 100 ; $i++) { 
		if ($i%2==0) {
			continue;
		}
	}
	echo "$i";

?>