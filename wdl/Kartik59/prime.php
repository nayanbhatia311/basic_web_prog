<!DOCTYPE html>
<html>
<head>
	<title>PHP1</title>
</head>
<body>
	<form action="" method="POST">
		<label for="fn">First Number</label><br>
		<input type="Number" name="fn" id="fn" placeholder="Enter first Number"><br>
		<label for="ln">Last Number</label><br>
		<input type="Number" name="ln" id="ln" placeholder="Enter last Number"><br>
		<input type="submit" name="btnSubmit" value="Check the Number">
	</form>
</body>
</html>
<?php
	if(isset($_POST["btnSubmit"]))
	{
		$fn = $_POST["fn"];
		$ln = $_POST["ln"];
		echo "Prime Number from " . $fn . " to " . $ln . " are: <br>";
		while($fn < $ln)
		{
			$flag = 0;
			for($i=2;$i<=$fn/2;++$i)
			{
				if($fn%$i == 0)
				{
					$flag = 1;
					break;
				}
			}
			if($flag == 0)
			{
				echo $fn . "<br>";
			}
			++$fn;
		}
	}
?>