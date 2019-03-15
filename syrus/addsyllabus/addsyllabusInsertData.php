<?php
    include 'config.php';
    $sql="SELECT * FROM syllabus WHERE std_id=".$_POST["std_id"];
    $result=$conn->query($sql);
    if($result->num_rows>1){
        echo "DATA IS ALREADY PRESENT<br><br>";
    }
    else{
        $flag=true;
        for($i=1;$i<=(int)$_POST["number"];$i++){
            $sql="INSERT INTO syllabus(subname,subwt,std_id) VALUES('".$_POST["subname".$i]."',".$_POST["subwt".$i].",".$_POST["std_id"].")";
            if($conn->query($sql)===TRUE){
                
            }
            else{
                $flag=false;
            }
        }
        if ($flag==true){
            echo "DATA ADDED";
        }
        $sql="INSERT INTO std_thresh(threshwt,std_id) VALUES(".$_POST["threshwt"].",".$_POST["std_id"].")";
        $conn->query($sql);
    }

?>