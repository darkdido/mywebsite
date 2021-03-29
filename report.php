<!DOCTYPE html>
<html>

<head>
	<title>Report an issue</title>
</head>
<style>
body
{
	background: black;


}
.box
{
	background: white;
	border-radius: 15px;
	padding: 100px;
	width: 700px;
	box-shadow: 15px 15px #898989;
	outline: none;

}
.aligment
{
	justify-content: center;
	

}
.hd
{
	cursor: pointer;
	position: absolute;
	top: 40px;
	left: 20px;
	font-weight: bold;
	color: #009ED1;
	text-decoration: none;
	font-size: 3em;
}

header
{
	top: 0;
background-color: black;
width: 79%;
padding: 65px; 
}
.src1
{
	color: white;
	background: #212121;
	font-size: 3.1em;
	padding: 30px;
width: 650px;
font-weight: bold;
}
.src2
{
color: white;
background: #212121;
font-size: 3.1em;
padding: 90px;
width: 550px;
text-align: left;
}

.submit
{
	color: white;
	cursor: pointer;
	font-size: 2.9em;
	padding: 20px;
	width: auto;

	background: black;
	border-color: black;
	border-radius: 5px;
	text-decoration: none;
font-weight: bold;
transition: 0.4s;
}
.submit:hover
{
	color: black;
	font-size: 3em;
	background: white;

}
h1
{
	color: black;
	font-size: 3.8em;
	font-weight: bold;
	text-align: center;
}
input
{
	text-decoration: none;
	border:none;
}

</style>

<header>
	<a href="home.php" class="hd">داخستن</a>
</header>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<center>
	<div class="aligment">
<div class="box">
	<h1>Report</h1>
<form action="connect.php" method="post"> 
<input style="text-align: right" id="issue" type="text" name="issue" class="src1" placeholder="کێشە">
<br>
<br>
<input style="text-align: right" id="issuedec" type="text" name="issuedec" class="src2" placeholder="وەسفی کێشە">
<br>
<br>
<br>
<center>
<input type="submit" name="btn" class="submit" value="ناردن">	
</center>
</a>
</body>
</html>