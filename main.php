<?php
// Start the session
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
#1{
margin-top:-100;
}
marquee{
background-color:blue;
font-size:20;
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
if(isset($_SESSION["a"]))
{ 
echo "logged in as ".$_SESSION["a"]."<br>";
}

?>




<h1><u>ABOUT</u></h1>
<p>
Ultimate Electronics, the largest Electronics Megastore in India stands by its tagline <b>"WE HELP YOU BUY</b> by providing its customers with a wide variety of consumer electronics and durables to choose from. Ultimate Electronics strives to provide better service with a nation-wide network of several Ultimate Electronics and Ultimate Electronics Zip stores, along with its latest online vertical - ultimateelectronics.com.</p><br>
<p>
With numerous products across varied categories including Phones, Cameras, Computers, LCD/LEDs, Home Appliances and more, we help in selecting electronic devices from multiple brands as per the personalized requirements of a consumer. Our own label Ultimate Electronics Life Accessories, comprising of a diverse range of merchandise from various categories like tablets, android phones, air-conditioners, kitchen appliances and much more, presents the consumers with an option to buy products featuring the latest technologies at reasonable prices.
</p><br>
<p>
Shopping at ultimateelectronics.com will be a fulfilling experience giving you access to a wide range of products with exciting deals. All this comes with a great after sale service provided by an authorized 24 x 7 customer care centre.
</p><br>
<h1><u>NEWS</u><h1>
<marquee>SPECIAL:20% DISCOUNT ON ALL HOME APPLIANCES!</marquee>
<h2>CONTACT</h2>
PHONE NO: 9821004900<br>
EMAIL:<br>
1.urvipaithankar@gmail.com<br>
2.tmon@gmail.com<br>
3.ishapandya@gmail.com<br>
LOCATION:<br>
<a href="maps.html">MAP</a>
</body>
</html>

