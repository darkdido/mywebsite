<style>
	
h2
{
	color: white;
	font-weight: bold;
font-size: 3.3em;
top: 0;
position: absolute;right: 40px;


}
h1
{
	color: white;
	font-weight: bold;
	font-size: 3.7em;
	
}
.coin
{
	justify-content: space-between;

}
.h9
{
	color: white;
cursor: pointer;
font-weight: bold;

	font-size: 30px;
}
</style>

<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<style>
body {
	background: #141414;
	
	align-items: center;

}

*{
	font-family: sans-serif;
	box-sizing: border-box;
}



h2 {
	text-align: center;
	margin-bottom: 40px;
}

input {
	display: block;
	border: 2px solid #ccc;
	width: 95%;
	padding: 10px;
	margin: 10px auto;
	border-radius: 5px;
}
label {
	color: #888;
	font-size: 18px;
	padding: 10px;
}


.error {
   background: #F2DEDE;
   color: #A94442;
   padding: 10px;
   width: 95%;
   border-radius: 5px;
   margin: 20px auto;
}

.success {
   background: #D4EDDA;
   color: #40754C;
   padding: 10px;
   width: 95%;
   border-radius: 5px;
   margin: 20px auto;
}





.h9
{
	color: white;
	background: none;
border: none;
	cursor: pointer;
	font-weight: bold;
	font-size: 30px;
	margin-top: 0;
	position: absolute;right: 120px;
}
.h10
{
	display: flex;
	text-align: center;
	margin-top: 14;

}
.h11
{
	content: url(https://cdn2.iconfinder.com/data/icons/contact-icon-set/512/BLACK_CONTACT-16-512.png); height: 200; align-content: left;
	
	border-radius: 3px;
	cursor: pointer;
background: no-repeat;
top: 15px;
border: 2px solid black;

}
footer
{
	color: white;
	position: fixed;
	width: 100%;
	left: 0;
	bottom: 0;
	padding: 40px;
	align-content: center;
	background: black;
}
.h13
{

padding: 12px;
}
.h14
{
	justify-content: space-between;
}
.h15
{
		content: url(https://cdn2.iconfinder.com/data/icons/contact-icon-set/512/BLACK_CONTACT-16-512.png); height: 200;
	
	border-radius: 3px;
	cursor: pointer;
background: no-repeat;

border: 2px solid black;

}

.box1
{
	border-radius: 15px;
	background-color: white;
	color: black;
	display: grid;
	box-shadow: 15px 15px #898989;
	display: flex;

	transition: 0.3s;
	padding: 80px;
	width: 950px;
}
.box1:hover
{
	background: #474343;
color: white;
box-shadow: 15px 15px #fff;
}
.box2
{
		border-radius: 15px;
	background-color: white;
	color: black;
	display: grid;
	display: flex;

	
	padding: 80px;
	width: 950px;
}
.box2:hover
{
	content: url(https://youtube.com);
}
h3

{

text-align: left;
	color: black;
	font-weight: bold;
	font-size: 3.3em;
}
.h00,
.h00
{
color: white;
background: black;
margin-top: 0;
text-align: center;
padding: 20px;
width: 180px;
border-color: black;
font-weight: bold;
cursor: pointer;

border: 2px solid white;
}
.h00:hover
{
	color:black;
	background-color: white;
	 
}

.modal-btn
{
	content: url(https://cdn4.iconfinder.com/data/icons/gradient-circle-blue/36/1014-512.png); height: 80; background: no-repeat;
	width: auto;
	position: absolute;right: 15px;
	outline: 0;

cursor: pointer;

}
.modal-bg
{
	position: fixed;
	top: 0;
	width: 100%;
	left: 0;
	height: 100vh;
	background-color: rgba(0,0,0,0.5);
	display: flex;
	justify-content: left;
	align-items: left;
outline: 0;
	opacity: 0;
	visibility: hidden;
	transition: visibility 0s, opacity 0.5s;
}
.bg-active{
	visibility: visible;
	opacity: 1;
}
.modal
{
	position: relative;
	font-family: 'Montserrat', sans-serif;
	background-color: black;
	width: 55%;
	height: 100%;
	left: 0;
	display: flex;
	outline: none;
	align-items: left;
	flex-direction: column;
}

.modal button{
	padding: 10px 30px;
	background-color: #2980b9;
	color: white;
	border: none;
	font-family: 'Montserrat' sans-serif;
	cursor: pointer;
	font-size: 2.8em;
}
.modal-close
{
	cursor: pointer;
	position: absolute;
	top: 10px;
	right: 10px;
	font-weight: bold;
	color: #009ED1;
	font-size: 3em;
	transition: 0.2s;
}
.modal-close:hover
{
color: white;
font-size: 3.1em;
}
p
{
	color: white;
	font-weight: bold;
	font-size: 3em;
}
.h000
{
	text-decoration: none;
border: 5px solid white;
	color: white;
	border-radius: 10px;
	background: black;
	padding: 15px;
	font-weight: bold;
font-size: 2.7em;
bottom: 0;
}
.h012
{
	text-decoration: none;
border-color: black;
	color: white;
	border-radius: 10px;
	background: black;
	padding: 15px;
	font-weight: bold;
	transition: 0.5s;
font-size: 2.7em;
bottom: 0;
}
.h012:hover
{
	background-color: #A4A3A3;
	border: 5px solid white;
	border-radius: 15px; 
}
.h09
{
	top: 30px;
	left: 0;

	text-align: center;
text-shadow: 4px 4px red;
	color: #fff;
	
	
}
.header
{
	padding: 60px;
	background: white;
	text-align: left;
	top: 0;
	left: 0;
	color: black;
}
.boxedd
{
 color: white;
 padding: 40px;
 width: 900px;
 border: 1px solid #8C8B8B;
 background: #1E1E1E;
 border-left: 8;

}
h5
{
	color: white;
	font-weight: bold;
	font-family: 'arial';
	font-size: 3.3em;
	text-align: center;
}
label
{
	color: white;
	font-weight: bold;
	font-size: 2.4em;
	font-family: 'arial';
}
hr
{
	background: white;
	color: white;
	width: 70%;
	padding: 2px;
}
.version
{
	color: white;
	font-family: 'arial';
	font-size: 2em;
	font-weight: bold;

}
.h091
{
	text-align: center;

	color: #fff;
}
.btn6,
.btn6
{
	color: black;
	background: white;
	text-decoration: none;
	font-family: 'arial';
	font-size: 5em;
	cursor: pointer;


	padding: 25px;
	width: 0;
	border-color: white;


}
.btn6:hover
{
	border: 5px solid black;
}
.btn43,
.btn43
{
	color: white;
	text-decoration: none;
	background: black;
	border-color: black;
	cursor: pointer;
	padding: 25px;
	width: 0;

	
	font-family: 'arial';
	font-size: 5em;
}
.btn43:hover
{
	color: black;
	background-color: white;
	border: 5px solid black;
}
.forrm
{
top: 15px;
	margin-top: 15px;


}
.headerr
{
background: #1c1c1c;
width: 100%;
position: fixed;
top: 0;
padding: 25px;
box-shadow: 0px 8px #837F7F;
}
.dyari
{
left: 0;
text-shadow: 6px 6px skyblue;

}

.realod
{
	position: absolute;right: 50px;
	top: 18px;
	cursor: pointer;
	margin-top: 34px;
}


	</style>



</head>
<link rel="icon" href="https://dyari.cf/img/dyari.jpeg">
<body>
	<br>
	<br>

<div class="headerr">
<h1 class="dyari">Kurd Store</h1>
	<img class="modal-btn" style=" position: absolute;right: 15px; top: 18px; margin-top: 34px;" src="https://image.flaticon.com/icons/png/512/61/61205.png" height="80">
	<div class="realod">
		<a onClick="location.reload()">
		<img src="https://upload.wikimedia.org/wikipedia/commons/d/dd/Reload_Icon_Red.svg" style="height: 80px; position: absolute;right: 74px;">
		</a>
</div>
</div>
 </header>
 <div class="modal-bg">
 	<div class="modal">
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
 	
 
 	<h5>&#1586;&#1575;&#1606;&#1740;&#1575;&#1585;&#1740; &#1574;&#1749;&#1705;&#1575;&#1608;&#1606;&#1578; :</h5>
 			 <h1 class="h091" style="margin-top: 0; top: 0;"> &#1740;&#1608;&#1586;&#1749;&#1585; &#1606;&#1749;&#1740;&#1605; : <?php echo $_SESSION['user_name']; ?></h1>
 			  <h1 class="h091" style="margin-top: 0; top: 0;">&#1606;&#1575;&#1608; : <?php echo $_SESSION['name']; ?></h1>
 			   <br>
 			   <br>
				<center>
				<a href="change-password.php" class="h000">گۆڕینی پاسوۆرد</a>
 			  </center>
			   <br>
 			  <br>
 			  <hr>
 			  <h5>لەگەڵمان بن</h5>
 			  <center>
 			  <a href="report.php" class="h000">کێشەم ھەیە</a>
 			</center>
 			  <br>
 			  <br>
 			  <br>
 			  <br>
 			  <br>
 			  <br>
 			
 		
 			<center>

			 <hr>
			 <br>
 			  <br>
 			<a href="logout.php" class="h012">چوونەدەرەوە</a>
<br>
<br>
<p class="version">v.1.0</p>
</center>

 		
 		<span class="modal-close">&#1583;&#1575;&#1582;&#1587;&#1578;&#1606;</span>
</div>
</div>
 </div>
 <script src="https://dyari.cf/apps.js"></script>
</form>
</a>

</a>


	<center>
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
 			<br>
 		<br>
 	
</center>

     <h1 class="h09">&#1576;&#1749;&#1582;&#1742;&#1585;&#1576;&#1742;&#1740;, <?php echo $_SESSION['name']; ?></h1>
</center>
</div>
     <left>
     </left>
     	
     	<br>
     	<br>
     	<br>
     	<br>
     	<br>

     	<br>

</left>
<label>What's New ?</label>
<br>
<br>
<a href="itms-services://?action=download-manifest&amp;url=https://www.dyarikurd.cf/download/unc0ver.xml" class="external item-link item-content">
<div class="box1">
	

<img src="https://pbs.twimg.com/profile_images/1171122350177153025/OknpE-Oo_400x400.jpg" height="80">
	<p  class="gg" style="position: absolute;right: 590px; font-size: 2.6em; margin-top: 14px; color: black; font-weight: normal;">unc0ver</p>

</div>
</a>
</a>
<br>
<br>
<label>VIP APPLE ID</label>
<BR>
<BR>

<a href="hacks/appleid.php">
<div class="box1">

<img src="https://i.pinimg.com/originals/60/0b/b7/600bb75fc415bddd8a31fd0377302129.jpg" height="80">

	<p class="gg" style="position: absolute;right: 610px; font-size: 2.6em; margin-top: 14px; color: black; font-weight: normal;">Apple ID</p>



</div>
</a>
<br>
<br>
<label>Cracked Apps</label>
<BR>
<BR>
<a href="hacks/apps.php">
<div class="box1">
	
<img src="https://icon-library.com/images/download-apps-icon/download-apps-icon-2.jpg" height="80">
<p class="gg" style="position: absolute;right: 630px; font-size: 2.6em; margin-top: 14px; color: black; font-weight: normal;">APPS</p>



</div>
</a>
<br>
<br>
<label>Cracked Games</label>
<br>
<br>
<a href="hacks/crackedgames.php">
<div class="box1">
	
<img src="https://icons.iconarchive.com/icons/dtafalonso/android-lollipop/512/Play-Games-icon.png" height="80">
	<p class="gg" style="position: absolute;right: 590px; font-size: 2.6em; margin-top: 14px; color: black; font-weight: normal;">GAMES</p>


</div>
</a>
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
<br>
<br>
</body>
</html>

<?php 

}else{
     header("Location: index.php");
     exit();
}
 ?>
