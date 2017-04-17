<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
<html lang="en-US">
 <head>
    <meta content="off" http-equiv="x-dns-prefetch-control" />


</head>
<body>
	<form method="POST"; action="<?php $_PHP_SELF ?>">
		<label>First Name</label>
		<input name="val1"> </input>
		<label>Last Name</label>
		<input name="val2"> </input>
		<label>Marks</label>
		<input name="marks"> </input>
		<button>Submit</button>
	</form>
	<?php 
	$val1=$_POST["val1"];
	$val2=$_POST["val2"];

	if ($_POST["val1"]!=NULL || $_POST["val2"]!=NULL)
	{
		echo $result=$val1+$val2;
	}
?>
</body>
</html>