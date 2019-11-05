<?php
    if(isset($_POST["btnDelete"]))
    {
        include('connection.php');
        $mobile = $_POST["txtMobile"];
        $conn = openConnection();
        $sql = "delete from tp where mobile = '$mobile'";
        if(mysqli_query($conn,$sql))
        {
            echo "<script type='text/javascript'>window.alert('Data Deleted successfully.');</script>";
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
            <a href="update.php" style="margin-left:25px">Update Page</a>
        </div>
        <br><br><br>
        <div>
            <form action="" method="post">
                <label for="txtMobile">Mobile: </label>
                <input type="number" name="txtMobile" id="txtMobile" placeholder="Enter Your Mobile Stored in Database" required/><br><br>
                <input type="submit" name="btnDelete" value="DELETE">
            </form>
        </div>
    </body>
</html>