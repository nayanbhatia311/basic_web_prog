<?php
    function openConnection()
    {
        $conn = mysqli_connect("localhost","root","","practices");
        return $conn;
    }
?>