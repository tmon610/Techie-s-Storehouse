<?php
// Start the session
session_start();
?>

<html>

<body bgcolor="cyan">

<form method="post">
<fieldset>
<legend>LOGIN</legend>
NAME:<font color="red">*</font><input type="text" name="name" size="20" maxlength="70"  id="19" align="left" required><br><br>
E-MAIL:<font color="red">*</font><input type="e-mail" id="20" name="emailid" size="50" align="left" maxlength="70" required><br><br>
PASSWORD:<font color="red">*</font><input type="password" name="password" id="5" size="50" align="left" required><br><br>
<input type="submit" value="submit" align="center" name="submit">

</fieldset>
</form>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
 // Check connection
 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 


 if(isset($_POST['submit']))
{
$n = (isset($_POST['name']) ? $_POST['name'] : '');
$p = (isset($_POST['password']) ? $_POST['password'] : '');
$e = (isset($_POST['emailid']) ? $_POST['emailid'] : '');
$sql = "SELECT PASSWORD FROM login where NAME='$n' and EMAILID='$e'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_row($result);
$pass=$row[0];
if($pass == $p)
{
         echo "SUCCESS";
         echo'<script type="text/javascript">location.href = "http://localhost/main.php"</script>';
         $_SESSION["a"]=$n;
}
else {
     echo "INVALID LOGIN";
}
}

$conn->close();
?> 
</body>
</html>
