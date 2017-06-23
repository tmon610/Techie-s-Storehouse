<?php 
session_start();
?>
<html>
<head>
<style>
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
#abc{
margin-left:450;
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

<form method="post">
<table border="1" style="width:1000px">
<th>CATEGORY</th>
<th>PRODUCT</th>
<th>BRAND</th>
<th>DESCRIPTION</th>
<th>COST</th>
</tr>
<tr>
<td>HOME APPLIANCES</td>
<td>AIR CONDITIONER <img src="AC.png"></td>
<td>WHIRLPOOL</td>
<td> 1.5 Ton MAGICOOL DLX </td>
<td width="40%">MRP Rs.31,000 <br><input type="checkbox" name="ac[]" align="center" value="AirConditioner">ADD TO CART<br>
<input type="checkbox" name="l[]" align="center" value="AirConditioner">LIKE</td>
</tr>
<tr>
<td>ENTERTAINMENT</td>
<td>TELEVISION<img src="tele.png"></td>
<td>SAMSUNG</td>
<td> LG LED 108cm 43UF640T 4K </td>
<td>MRP Rs.40,000 <br><input type="checkbox" name="ac[]" align="center" value="Television">ADD TO CART<br>
<input type="checkbox" name="l[]"  align="center" value="Television">LIKE</td>
</tr>
<tr>
<td>COMPUTING</td>
<td>LAPTOP<img src="laptoppc.png"></td>
<td>LENOVO</td>
<td> G50-80 80E502ULIN 39cm  </td>
<td >MRP Rs.60,000<br><input type="checkbox" name="ac[]" align="center" value="Laptop">ADD TO CART<br>
<input type="checkbox" name="l[]"  align="center" value="Laptop">LIKE</td>
</tr>
<tr>
<td>COMMUNICATION</td>
<td>CELLPHONE<img src="phone.png"></td>
<td>MOTOROLLA</td>
<td>Moto X Force 64GB LTE (Black)  </td>
<td >MRP Rs.19,000<br><input type="checkbox" name="ac[]" align="center" value="Cellphone">ADD TO CART<br>
<input type="checkbox" name="l[]"  align="center" value="Cellphone" >LIKE</td>
</tr>
<tr>
<td>KITCHEN APPLIANCES</td>
<td>MICROWAVE<img src="mw.jpg"></td>
<td>FABER</td>
<td>Microwave and oven(grey and black)</td>
<td >MRP Rs.42,000 <br><input type="checkbox" name="ac[]" align="center" value="Microwave">ADD TO CART<br>
<input type="checkbox" name="l[]"  align="center" value="Microwave">LIKE</td>
</tr>
<tr>
<td>PHOTOGRAPHY</td>
<td>CAMERA<img src="cam.png"></td>
<td>CANON</td>
<td>Canon IXUS 285 HS 20.2 MP </td>
<td>MRP Rs.12,000 <br><input type="checkbox" name="ac[]" align="center" value="Camera">ADD TO CART<br>
<input type="checkbox" name="l[]" align="center" value="Camera">LIKE</td>
</tr>
</table>
<br><br>
<input type="submit" name="submit" value="submit" id="abc">
</form>
<?php  
if(isset($_POST['submit']))  
{  
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
$na=$_SESSION["a"];
$cost=0;
$brand="";
$category=""; 
$checkbox1=$_POST['ac'];  
$chk="";  
foreach($checkbox1 as $chk1)  
  {
if($chk1=="AirConditioner")
{
$category="Home Appliances";
$brand="Whirlpool";
$cost=31000;
}
if($chk1=="Television")
{
$category="Entertainment";
$brand="Samsung";
$cost=40000;
}
if($chk1=="Laptop")
{
$category="Computing";
$brand="Lenovo";
$cost=60000;
}
if
($chk1=="Cellphone")
{
$category="Communication";
$brand="Motorolla";
$cost=19000;
}
if($chk1=="Microwave")
{
$category="KitchenApplines";
$brand="Faber";
$cost=42000;
}
if($chk1=="Camera")
{
$category="Photography";
$brand="Canon";
$cost=12000;
}

$in_ch1=mysqli_query($conn,"insert into addtocart(PRODUCT,CATEGORY,BRAND,COST) values ('$chk1','$category','$brand','$cost')");
$in_ch2=mysqli_query($conn,"insert into log(USERNAME,PRODUCT,CATEGORY,BRAND,COST) values ('$na','$chk1','$category','$brand','$cost')");

}  

$cost1=0;
$brand1="";
$category1=""; 

$checkbox2=$_POST['l'];  

foreach($checkbox2 as $chk2)  
  {
if($chk2=="AirConditioner")
{
$category="Home Appliances";
$brand="Whirlpool";
$cost=31000;
}
if($chk2=="Television")
{
$category="Entertainment";
$brand="Samsung";
$cost=40000;
}
if($chk2=="Laptop")
{
$category="Computing";
$brand="Lenovo";
$cost=60000;
}
if
($chk2=="Cellphone")
{
$category="Communication";
$brand="Motorolla";
$cost=19000;
}
if($chk2=="Microwave")
{
$category="Kitchen Appliances";
$brand="Faber";
$cost=42000;
}
if($chk2=="Camera")
{
$category="Photography";
$brand="Canon";
$cost=12000;
}
$in_ch3=mysqli_query($conn,"insert into ulike(USERNAME,PRODUCT,CATEGORY,BRAND,COST) values ('$na','$chk2','$category','$brand','$cost')");
}  


if($in_ch1==1)  
   {  
      echo'<script>alert("ADDED TO CART SUCCESSFULLY")</script>';
      echo'<script type="text/javascript">location.href = "http://localhost/display.php"</script>';
      
   }  
else  
   {  
      echo'<script>alert("FAILED TO ADD")</script>';  
   }  
}  
?> 
</body>
</html>















