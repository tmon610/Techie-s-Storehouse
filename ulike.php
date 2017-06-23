<?php
session_start();
?>
<html>
<head>
<style>
table{
margin-top:150;
margin-left:400;
}

ul{
list-style-type:none;
margin-left:101;
margin-top:-55;
padding:0;
overflow:hidden;
background-color:black ;
}
li
{
float:left;
border-right:1px solid white;
}
li a{
display:block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:{
    background-color:red ;
}
li:last-child {
    border-right:1px solid white;
}
</style>
</head>
<body bgcolor="cyan">
<img id="1" src="logo1.gif" width="100"  />
<ul>
<li><a href="http://localhost/main.php">HOME</a></li>
<li><a href="http://localhost/products.php">PRODUCTS</a></li>
<li style="float:right"><a href="http://localhost/logout.php">LOGOUT</a></li>
<li style="float:right"><a href="http://localhost/ulike.php"><img  id="2" src="like.png" width="25" height="20"></a></li>
<li style="float:right"><a href="http://localhost/log.php"><img id="3" src="log.jpg" width="25" height="20"></a></li>

</ul>


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

$name=$_SESSION["a"];
$sql = "SELECT PRODUCT,CATEGORY,BRAND,COST from ulike where USERNAME='$name'";
$result = mysqli_query($conn,$sql);
echo "<b><u><font size='16'>LIKES</font></u></b><br>";
echo "<b><u>USERNAME</u>:</b>".$_SESSION["a"]."<BR>";

$msql="select ADDRESS from login where NAME='$name'";
$mresult = mysqli_query($conn,$msql);
$row = mysqli_fetch_row($mresult);
$add=$row[0];
echo "<b><u>ADDRESS</u>:</b>".$add."<br>";
echo'<table border="1" height="200" width="200"><tr><th>PRODUCT</th><th>CATEGORY</th><th>BRAND</th><th>COST</th></tr>';
if ($result->num_rows > 0)
{

while ($row = $result->fetch_assoc())
{
    echo "<tr>";

    foreach($row as $value)
    {
        echo "<td>".$value."</td>";
    }

    echo "</tr>";

}

}
echo "</table>";
mysqli_close($conn);

?>
</body></html>