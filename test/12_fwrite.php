<?php
	$file_location="lorem.txt";
	$file = fopen($file_location, "w");
	$content = "Test content.";

	fwrite($file, $content);
	fclose($file);
?>