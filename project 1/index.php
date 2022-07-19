<form mothed = "post">
    calculate<input type="number" name="n">
    <button type="submit" name="submit">submit</button>

</form>
<?php
if(isset($_post['submit'])){
    echo "your age in days :".$_post['n']*365 . "days";
}
?>

