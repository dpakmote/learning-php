<?php
	$submit=$_POST["opr"];
	$file_name=$_POST["file"];
	$file=fopen($file_name, 'r');
	$file_size=filesize($file_name);
	$file_text=fread($file, $file_size);

	if(isset($_POST["opr"])) {
		if ($file==false){
		echo "error when reading file";
		exit();}
	}
	
	fclose($file); 

	if ($submit=="get"){
		echo $file_text;
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
<html lang="en-US">
 <head>
    <meta content="off" http-equiv="x-dns-prefetch-control" />


</head>
<body>
	<form method="POST"; action="<?php $_PHP_SELF ?>">
		<label>File name</label><br />
		<input name="file" value="<?php echo $file_name; ?>"></input><br />
		<button name="opr" type="submit" value="get">Submit</button>
	</form>
</body>
</html>


