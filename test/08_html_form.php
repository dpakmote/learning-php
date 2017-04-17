<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
<html lang="en-US">
 <head>
    <meta content="off" http-equiv="x-dns-prefetch-control" />


</head>
<body>
	<form method="POST"; action="<?php $_PHP_SELF ?>">
		<label>First Name</label>
		<input name="fname"> </input>
		<label>Last Name</label>
		<input name="lname"> </input>
		<label>Marks</label>
		<input name="marks"> </input>
		<button>Submit</button>
	</form>
	<?php 
	if ($_POST["fname"]!=NULL || $_POST["lname"]!=NULL || $POST["marks"]!=NULL)
	{
		echo "Your First Name is" .$_POST["fname"]. 
		"<br />Last name is" .$_POST["lname"]. 
		"<br /> Marks ".$_POST["marks"];
	}
?>
</body>
</html>