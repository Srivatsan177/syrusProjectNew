<html>
<form action="addtimetableSelectSub.php" method="post">
    <h1>CREATE TIME TABLE</h1>
    <label>Select Standard </label>
    <select name="std_id">
        <option value="1">1<sup>st</sup></option>
        <option value="2">2<sup>nd</sup></option>
        <option value="3">3<sup>rd</sup></option>
        <option value="4">4<sup>th</sup></option>
        <option value="5">5<sup>th</sup></option>
        <option value="6">6<sup>th</sup></option>
        <option value="7">7<sup>th</sup></option>
        <option value="8">8<sup>th</sup></option>
        <option value="9">9<sup>th</sup></option>
        <option value="10">10<sup>th</sup></option>
    </select>
    <br><br>
    <label>Enter the Day</label>
    <select name="day">
        <option value="mon">Moday</option>
        <option value="tue">Tuesday</option>
        <option value="wed">Wednesday</option>
        <option value="thu">Thursday</option>
        <option value="fri">Friday</option>
        <option value="sat">Saturday</option>
    </select>
    <br><br><br>
    <label>Enter the number of subjects</label>
    <input type="text" name="number"><br><br><br>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</html>