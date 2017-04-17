<?php
	$file_name="lorem.txt";
	$file=fopen($file_name, 'r');
	$file_size=filesize($file_name);
	$file_text=fread($file, $file_size);

	if (file_exists($file_name)){
		echo "yes, the file exists";
	}
	else {echo "file does not exist.";
	}
	if ($file==false){
		echo "error when reading file";
		exit();
	}	
	echo $file_size;	
	fclose($file);
	echo $file_text;
?>