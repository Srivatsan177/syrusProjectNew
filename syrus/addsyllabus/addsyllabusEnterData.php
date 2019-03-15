<html>
    <body>
        <form action="addsyllabusInsertData.php" method="post">
            <label>Selected std </label>
            <?php
                $std_id=$_POST["std_id"];
                $number=$_POST["number"];
                echo "<input type='text' name='std_id' value=$std_id size='4' readonly><br><br>";
                echo "<label>NO of sub </label><input type='text' name='number' value=$number size='4' readonly><br><br>";
                for($i=1;$i<=$_POST["number"];$i++){
                    $name="subname".$i;
                    $wtname="subwt".$i;
                    echo "<label>Subject Name </label>
                    <input type='text' name=$name>
                    <label>  Subject Weight </label>
                    <input type='text' name=$wtname>
                    <br><br><br>";
                }
            ?>
            <label>Enter the threshold weight </label><input type="text" name="threshwt">
            <br><br>
            <button type="btn btn-primary">Submit</button>
        </form>
    </body>
</html>