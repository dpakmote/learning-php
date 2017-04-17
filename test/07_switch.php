<?php
	$grade = "ddd";

	switch ($grade) {
		case "A":
			echo "Grade A is marks between 90 &amp; 95";
			break;
		case "A+":
			echo "Grade A+ is when you scre 100";
			break;
		case "B":
			echo "Grade B is when you score between 75 &amp; 90";
			break;
		case "C":
			echo "Grade C is when you score between 50 &amp; 75";
			break;
		case "D":
			echo "Grade D is when you score less than 50";
			break;
		
		default:
			echo "Invalid data";
			break;
	}

?>