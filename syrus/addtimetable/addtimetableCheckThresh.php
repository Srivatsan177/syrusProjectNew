<?php
    include 'config.php';
    $subarr=array();
    $totalwt=0;
    for($i=1;$i<=(int)$_POST["number"];$i++){
        $sql="SELECT subwt FROM syllabus WHERE std_id=".$_POST["std_id"]." and subname='".$_POST["lec".$i]."'";
        $result=$conn->query($sql);
        if($result->num_rows>0){
            while($rows=$result->fetch_assoc()){
                if(in_array($_POST["lec".$i],$subarr)===TRUE){
                    continue;
                }
                $subarr[$i]=$_POST["lec".$i];
                $totalwt+=(float)$rows["subwt"];
            }
        }
    }
    $sql="SELECT threshwt FROM std_thresh WHERE std_id=".$_POST["std_id"];
    $result=$conn->query($sql);
    if($result->num_rows>0){
        while($rows=$result->fetch_assoc()){
            if((float)$totalwt>(float)$rows["threshwt"]){
                echo "Cannot be added";
                header("Location: addtimetableSelectStd.php");
                break;
            }
            else{
                echo "Can be added";
            }
        }
    }
?>