
<link rel="icon" href="https://dyari.cf/img/dyari.jpeg">
	<title>dyariKurd</title>
  <meta name="description" content="kurd store">

<meta name="keywords" content=", kurd , kurdstore , snapchat ++, apps manger, unc0ver">
  <style>
    h2
    {
      color: black;
      font-size: 3.2em;
      font-weight: bold;
      font-family: 'arial';
    }
body {
  font-family: 'arial';
  background: black;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  flex-direction: column;
}

*{
  font-family: sans-serif;
  box-sizing: border-box;
}

form {
  width: 850px;
  border: 2px solid #ccc;
  padding: 150px;
  background: #fff;
  box-shadow: 15px 15px #898989;
  border-radius: 15px;

}

h2 {
  text-align: center;
  margin-bottom: 40px;
}

input {
  display: block;
  border: 2px solid #ccc;
  width: 95%;
  font-size: 3em;
  padding: 10px;
  margin: 10px auto;
  border-radius: 5px;
}
label {
  color: black;
  font-family: 'arial';
  font-size: 2.5em;;
  padding: 10px;
}

button {
 font-family: 'arial';
  background: #555;
  padding: 10px 15px;
  cursor: pointer;
  font-size: 2.9em;
  color: #fff;
  border-radius: 10px;
  margin-right: 10px;
  border: none;
  transition: 0.4s;
}
button:hover{
  opacity: .7;
  font-size: 3em;
  border-radius: 0px;
}
.error {
   background: #F2DEDE;
   color: #A94442;
   padding: 10px;
   width: 95%;
   font-size: 3em;
   border-radius: 5px;
   margin: 20px auto;
}



h1 {
  text-align: center;
  color: #fff;
}

.ca {
  font-size: 14px;
  display: inline-block;
  padding: 10px;
  text-decoration: none;
  color: #444;
}
.ca:hover {
  text-decoration: underline;
} 
a
{
  color: black;
  font-size: 2.7em;
  text-align: center;
  transition: 0.4s;
  text-decoration: none;
}
a:hover
{
  font-size: 2.9em;
  color: #1c1c1c1c;
}
.hama
{
     
    
     align-items: center;
     justify-content: space-between;
}
          </style>
</head>
<body>

     <form action="login.php" method="post">
      <div class="form">
     	<h2>چوونەژوورەوە</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>یوزەر نەیم</label>
     	<input type="text" name="uname" placeholder="یوزەر نەیم"><br>

     	<label>پاسوۆرد</label>
     	<input type="password" name="password" placeholder="پاسوۆرد"><br>
      <br>
<div class="hama">
  <center>
     	<button type="submit">چوونەژوورەوە</button>
     </div>
   </center>
<br>
<br>

<center>
          <a href="signup.php">دروستکردنی ئەکاونت</a>
     </center>
     </form>
</div>
</body>
</html>