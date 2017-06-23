<?php
// Start the session
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
$sql = "SELECT * from addtocart";
$result = mysqli_query($conn,$sql);
echo "<b><u><font size='14'>BILLING DETAILS</font></u></b><br>";
echo "<b><u><font size='6'>USERNAME</u>:".$_SESSION["a"]."<BR></font></b>";
$name=$_SESSION["a"];
$msql="select ADDRESS from login where NAME='$name'";
$mresult = mysqli_query($conn,$msql);
$row = mysqli_fetch_row($mresult);
$add=$row[0];
echo "<b><u><font size='6'>ADDRESS</u>:".$add."<br></font></b>";
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
$result = mysqli_query($conn,'SELECT SUM(COST) AS value_sum FROM addtocart'); 
$row = mysqli_fetch_assoc($result); 
$sum = $row['value_sum'];
echo "<tr>";
echo "<td colspan='3' align = 'center'> <b>    TOTAL    </b></td>";
echo "<td>".$sum."</td>";
echo "</tr>";
echo "</table>";
$inch=mysqli_query($conn,"truncate table addtocart");
mysqli_close($conn);
echo "<br><br><br>";
echo '<a href="http://localhost/final.php">TRACK ORDER DETAILS</a>';

?>
</body></html>