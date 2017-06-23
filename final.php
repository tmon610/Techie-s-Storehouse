<?php
session_start();
?>
<html>
<head>
<style>
table{
margin-left:400;
background-color:cyan;
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
<body bgcolor="pink">
<img id="1" src="logo1.gif" width="100"  />
<ul>
<li><a href="http://localhost/main.php">HOME</a></li>
<li><a href="http://localhost/products.php">PRODUCTS</a></li>
<li style="float:right"><a href="http://localhost/logout.php">LOGOUT</a></li>
<li style="float:right"><a href="http://localhost/ulike.php"><img  id="2" src="like.png" width="25" height="20"></a></li>
<li style="float:right"><a href="http://localhost/log.php"><img id="3" src="log.jpg" width="25" height="20"></a></li>

</ul>



<?php
echo "<font size='8'><b>THANKYOU  </b></font>"."<font size='8'><b>".$_SESSION["a"]."</b></font>"."<font size='8'><b>  FOR SHOPPING WITH US !!!</b></font><br><br>";
echo "<font size='6'><b>DATE ORDER PLACED:</b></font>           "."<font size='6' color='red'><b>".date("Y/m/d")."</b></font><br><br>";
$d=mktime(11, 14, 54, 4, 26, 2016);
echo "<font size='6'><b>ORDER WILL BE DELIVERED BY :</b></font>"."<font size='6' color='red'><b>".date("Y/m/d h:i:sa", $d)."</b></font><br><br>";
$now = new DateTime();
$future_date = new DateTime('2016-04-26 11:14:54');

$interval = $future_date->diff($now);

echo "<font size='6' color='red'><b>Remaining days and time : ".$interval->format("%a days, %h hours, %i minutes, %s seconds")."</b></font>";
?>
<br><br>
LOCATION:<br>
<a href="rmaps.html">MAP</a>
<br><br>
<table border="1" color="cyan" width="500" height="150" cellpadding="20">
<tr><th>DELIVERY PERSON NAME</TH>
<TH>CONATCT</TH></TR></TR>
<TR><TD>Harsh Shah</td><td>99236701</td></tr>
</table>
</body>
</html>