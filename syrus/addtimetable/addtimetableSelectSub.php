<html>
    <body>
    <form action="addtimetableCheckThresh.php" method="post">
        <label>Selected std</label>
        <?php
            $std_id=$_POST["std_id"];
            echo "<input type='text' name='std_id' value=$std_id size='4' readonly>";
        ?>
        <label>Selected Day</label>
        <?php
            $day=$_POST["day"];
            echo "<input type='text' name='day' value=$day size='4' readonly>";
        ?>
        <label> No. of lec </label>
        <?php
            $number=$_POST["number"];
            echo "<input type='text' name='number' value=$number size='4' readonly>";
        ?>
        <h2>Select Subjects</h2><br><br><br>
        <?php
            include 'config.php';
            $sql="SELECT * FROM syllabus WHERE std_id=".$_POST["std_id"];
            $result=$conn->query($sql);
            if($result->num_rows<1){
                echo "NO data is present add data first for std: ".$_POST["std_id"];
            }
            else{
                for($i=1;$i<=(int)$_POST["number"];$i++){
                $lab="lecture no ".$i." ";
                $sub="lec".$i;
                echo "<label>$lab</label>";
                $sql="SELECT * FROM syllabus WHERE std_id=".$_POST["std_id"];
                $result=$conn->query($sql);
                echo "<select name=$sub>";
                while($rows=$result->fetch_assoc()){
                    $sub1=$rows["subname"];
                    echo "<option value=$sub1>$sub1</option>";
                }
                echo "</select><br><br><br>";
            }
        }
        ?>
        <button type="btn btn-primary">Submit</button>
    </form>
    </body>
</html>