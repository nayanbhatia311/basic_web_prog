<?php
    class Models
    {
        function openConnection()
        {
            $conn = mysqli_connect("localhost","root","","tp");
            return $conn;
        }
        function insertData($conn,$name,$mobile,$address)
        {
            $sql = "insert into tp values('$name',$mobile,$address)";
            $response = array();
            if(mysqli_query($conn,$sql))
            {
                $response = array(
                    "status"=>"OK"
                );
            }
            else
            {
                $response = array(
                    "status"=>"EXIST"
                );
            }
            return $response;
        }
    }
?>