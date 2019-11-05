<?php
    if(isset($_POST["btnUpdate"]))
    {
        include('connection.php');
        $name = $_POST["txtName"];
        $mobile = $_POST["txtMobile"];
        $address = $_POST["txtAddress"];
        $conn = openConnection();
        $sql = "update tp set name = '$name', address = '$address' where mobile='$mobile'";
        if(mysqli_query($conn,$sql))
        {
            echo "<script type='text/javascript'>window.alert('Data Updated successfully.');</script>";
        }
        else
        {
            echo "Something Went wrong.";
        }
    }
?>
<html>
    <head>
        <title>Crud Operations</title>
    </head>
    <body>
        <div id="container">
            <a href="index.php" style="margin-left:25px">Insert Page</a>
            <a href="retreive.php" style="margin-left:25px">Retreive Page</a>
            <a href="delete.php" style="margin-left:25px">Delete Page</a>
        </div>
        <br><br><br>
        <div>
            <form action="" method="post">
                <label for="txtName">Name: </label>
                <input type="text" name="txtName" id="txtName" placeholder="Enter Your Name" /><br><br>
                <label for="txtMobile">Mobile: </label>
                <input type="number" name="txtMobile" id="txtMobile" placeholder="Enter Your Mobile Stored in Database" required/><br><br>
                <label for="txtAddress">Address: </label>
                <input type="text" name="txtAddress" id="txtAddress" placeholder="Enter Your Address" /><br><br>
                <input type="submit" name="btnUpdate" value="UPDATE">
            </form>
        </div>
    </body>
</html>