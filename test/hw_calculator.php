<?php 
	if (isset($_POST["opr"])){
		$val1 = $_POST["value1"];
		$val2 = $_POST["value2"];
		$opr = $_POST["opr"];
		if ($opr=="+"){
				$result=$val1+$val2;
			}
		elseif ($opr=="-") {
			$result=$val1-$val2;
		}
		elseif ($opr=="x") {
			$result=$val1*$val2;
		}
		elseif ($opr=="mod") {
			$result=$val1%$val2;
		}
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
<html lang="en-US">
 <head>
    <meta content="off" http-equiv="x-dns-prefetch-control" />
</head>
<body>
	<form method="POST"; action="">
		<label>Value 1</label>
		<input name="value1" value="<?php echo $val1; ?>"></input><br />
		<label>Value 2</label>
		<input name="value2" value="<?php echo $val2; ?>"></input><br />
		<label>Result</label>
		<input name="result" value="<?php echo $result; ?>"></input><br />
		<button name="opr" type="submit" value="+">Addition</button>
		<button name="opr" type="submit" value="-">Subtraction</button>
		<button name="opr" type="submit" value="x">Multiply</button>
		<button name="opr" type="submit" value="mod">Modulus</button>
	</form>
	
</body>
</html>