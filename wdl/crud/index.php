<?php
    if(isset($_POST["btnInsert"]))
    {
        include('connection.php');
        $name = $_POST["txtName"];
        $mobile = $_POST["txtMobile"];
        $address = $_POST["txtAddress"];
        $conn = openConnection();
        $sql = "insert into tp values('$name','$mobile','$address')";
        if(mysqli_query($conn,$sql))
        {
            echo "<script type='text/javascript'>window.alert('Data inserted successfully.');</script>";
        }
        else
        {
            echo "Something went wrong";
        }
    }
?>
<html>
    <head>
        <title>Crud Operations</title>
    </head>
    <body>
        <div id="container">
            <a href="update.php" style="margin-left:25px">Update Page</a>
            <a href="retreive.php" style="margin-left:25px">Retreive Page</a>
            <a href="delete.php" style="margin-left:25px">Delete Page</a>
        </div>
        <br><br><br>
        <div>
            <form action="" method="post">
                <label for="txtName">Name: </label>
                <input type="text" name="txtName" id="txtName" placeholder="Enter Your Name" required/><br><br>
                <label for="txtMobile">Mobile: </label>
                <input type="number" name="txtMobile" id="txtMobile" placeholder="Enter Your Mobile" required/><br><br>
                <label for="txtAddress">Address: </label>
                <input type="text" name="txtAddress" id="txtAddress" placeholder="Enter Your Address" required/><br><br>
                <input type="submit" name="btnInsert" value="INSERT">
            </form>
        </div>
    </body>
</html>