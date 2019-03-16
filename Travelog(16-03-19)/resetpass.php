<?php
if(isset($_GET['code'])) $acode = $_GET['code'];
else die("No code!");

include "dbconnect.php";
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
} else {
    $acode = mysqli_real_escape_string($con, $acode);
    $query = mysqli_query($con,"select * from tbl_login where activation_code='$acode'")
    or die(mysqli_error($con)); 
    if(mysqli_num_rows($query) == 0) {
        echo "Wrong code";
        die();
    } elseif (mysqli_num_rows ($query)==1 && isset($_POST['pass'])) {
        $pass = mysqli_real_escape_string($con, $_POST['pass']);
        $query3 = mysqli_query($con,"update tbl_login set pwd='$pass' where activation_code='$acode'")
        or die(mysqli_error($con)); 

        echo 'Password Changed';
    }
}

?>

    <form action="resetpass.php?code=<?php echo $_GET['code'];?>" method="POST">
    <p>New Password:</p><input type="password" name="pass" />
    <input type="submit"  name="submit" value="Signup!" />
    </form>