<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
<html lang="en-US">
 <head>
    <meta content="off" http-equiv="x-dns-prefetch-control" />


</head>
<body>
	<form method="GET"; action="<?php $_PHP_SELF ?>">
		<label>First Name</label>
		<input name="fname"> </input>
		<label>Last Name</label>
		<input name="lname"> </input>
		<label>Marks</label>
		<input name="marks"> </input>
		<button>Submit</button>
	</form>
	<?php 
	if ($_GET["fname"]!=NULL || $_GET["lname"]!=NULL || $GET["marks"]!=NULL)
	{
		echo "Your First Name is" .$_GET["fname"]. 
		"<br />Last name is" .$_GET["lname"]. 
		"<br /> Marks ".$_GET["marks"];
	}
?>
</body>
</html>