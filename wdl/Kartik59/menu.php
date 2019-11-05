<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="" method="POST">
		<label for="num1">Enter Number 1</label><br>
		<input type="Number" name="num1" id="num1" placeholder="Enter number 1"><br>
		<label for="num2">Enter Number 2</label><br>
		<input type="Number" name="num2" id="num2" placeholder="Enter number 2"><br>
		<input type="submit" name="btnAdd" value="Addition">
		<input type="submit" name="btnSub" value="Subtraction">
		<input type="submit" name="btnMul" value="Multiplication">
		<input type="submit" name="btnDiv" value="Division">
	</form>
</body>
</html>
<?php
	if(isset($_POST["btnAdd"]))
	{
		echo '<h1>Addition of numbers are ' . ($_POST["num1"] + $_POST["num2"]) . '</h1>';
	}
	if(isset($_POST["btnSub"]))
	{
		echo '<h1>Subtraction of numbers are ' . ($_POST["num1"] - $_POST["num2"]) . '</h1>';
	}
	if(isset($_POST["btnMul"]))
	{
		echo '<h1>Multiplication of numbers are ' . ($_POST["num1"] * $_POST["num2"]) . '</h1>';
	}
	if(isset($_POST["btnDiv"]))
	{
		echo '<h1>Division of numbers are ' . ($_POST["num1"] / $_POST["num2"]) . '</h1>';
	}
?>