<?php
    $servername="localhost";
    $username="root";
    $passwd="";
    $dbname="syrus";
    $conn=new mysqli($servername,$username,$passwd,$dbname);
    if($conn->connect_error){
        echo "Error in connection <br>";
    }
?>