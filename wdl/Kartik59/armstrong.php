<!DOCTYPE html>
<html>
<head>
	<title>PHP1</title>
</head>
<body>
	<form action="" method="POST">
		<label for="num1">Number 1</label><br>
		<input type="Number" name="num1" id="num1" placeholder="Enter a Number"><br>
		<input type="submit" name="btnSubmit" value="Check the Number">
	</form>
</body>
</html>
<?php
	if(isset($_POST["btnSubmit"]))
	{
		$sum = 0;
		$origNum = $_POST["num1"];
		$num = $_POST["num1"];
		while($num > 0)
		{
			$rem = $num % 10;
			$sum = $sum + ($rem * $rem * $rem);
			$num = $num / 10;
		}
		if($sum == $origNum)
		{
			echo "<h1>Number " . $origNum . " is Armstrong.</h1>";
		}
		else
		{
			echo "<h1>Number " . $origNum . " is not Armstrong.</h1>";
		}
	}
?>