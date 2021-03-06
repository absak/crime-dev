<?php
include("connection.php");
	//Start session
	session_start();
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
	unset($_SESSION['SESS_LAST_NAME']);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Crime report</title>
<style>
body{
margin:0;
padding:0;
background-image:url('image/crime.jpg');
background-size:cover;
font-family:sans-serif;
}
.nav{
width:100%;
background:#000033;
height:55px;
margin-top:15px;
margin-bottom: 15px;
opacity:0.6;}
ul{
list-style:none;
padding:0;
margin:0;
position:absolute;
}
li{
float:left;
margin-top:10px;
}
a{
width:150px;
color:white;
display:block;
text-decoration:none;
font-size:15px;
text-align:center;
padding:10px;
border-radius:10px;
font-family:Century Gothic;
font-weight:bold;
}
a:hover{
background:#669900;
transition:0.6s;
}
ul li ul{
background:#000033;
}
ul li ul li{
float:none;
}
ul li ul{
display:none;
}
ul li:hover ul{
display:block;
}

.mission{
position:absolute;
top:65%;
left:400px;
transform:translate(-50%,-50%);
width:600px;
box-sizing:border-box;
height:350px;
background:rgba(0,0,0,.5);
background-attachment:fixed;
font-size:16px;
border-radius:15px 50px;
}

.right{
width:100px;
height:100px;
border-radius:50%;
overflow:hidden;
position:absolute;
top:calc(-100px/2);
left:calc(50% + 100px);
}

h2{
margin:0;
padding:0 0 10px;
color:#efed40;
text-align:center;
}

h3{
color:white;
margin:0;
padding:0;
text-align:center;
}

#p{
background-attachment:fixed;
margin:10px;
padding:10px;
font-weight:bold;
color:#ecf0f1;
font-size:12px;
text-align:center;
}

.wanted{
width:300px;
height:400px;
box-sizing:border-box;
margin:140px 10px 0px 900px;
font-weight:bold;
color:white;
}

#want{
	margin:40px;
	height:330px;
	align:center;
	color:#000033;
	font-size:16px;
}

h1{
margin:0;
padding:0 0 10px;
color:red;
}
.search-form{
	margin-top:15px;
	float:right;
	margin-right:100px;
}
input[type=text]{
	padding:7px;
	border:none;
	font-size:12px;

}

#submit{
	float:right;
	background:orange;
	color:white;
	border-radius:0 5px 5px 0;
	cursor:pointer;
	position:relative;
	padding:7px;
	border:none;
	font-size:12px;
}
</style>
</head>
<body>
<div class="nav">
<ul>
  <li> <a href="index.php">Home</a></li>
  <li> <a href="">Sign In</a>
  <ul>
    <li> <a href="adminlogin.php">Admin</a></li>
    <li> <a href="plogin.php">Policeman</a></li>
    <li> <a href="login.php">User</a></li>
  </ul>
  <li> <a href="newsdisplay.php">News</a></li>
  <li> <a href="safety.php">Safety Tips</a></li>
  <li> <a href="map.html">Help</a></li>
</ul>
<form class="search-form" method="post" action="w_search.php">
<input type="text" name="name" placeholder="Search Wanted...">
<input type="submit" value="Search" name="Go" id="submit">
</form>
</div>
