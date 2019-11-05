<?php
        include('connection.php');
        $conn = openConnection();
        $sql = "select * from tp";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0)
        {
            
?>
<html>
    <head>
        <title>Crud Operations</title>
    </head>
    <body>
        <div id="container">
            <a href="index.php" style="margin-left:25px">Insert Page</a>
            <a href="update.php" style="margin-left:25px">Update Page</a>
            <a href="delete.php" style="margin-left:25px">Delete Page</a>
        </div>
        <br><br><br>
        <div>
            <table border="1">
                <thead>
                    <tr>
                        <th>Name </th>
                        <th>Mobile</th>
                        <th>Address</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while($row = mysqli_fetch_assoc($result))
                        {
                    ?>
                    <tr>
                            <td><?php echo $row["name"]; ?></td>
                            <td><?php echo $row["mobile"]; ?></td>
                            <td><?php echo $row["address"]; ?></td>
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </body>
</html>
<?php
        }
?> 