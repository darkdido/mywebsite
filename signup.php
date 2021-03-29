
<!DOCTYPE html>
<html>
<head>
    <style>
    h2
    {
      color: black;
      font-size: 3.2em;
      font-weight: bold;
      font-family: 'arial';
    }
body {
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

.form {
  width: 800px;
  border: 2px solid #ccc;
  padding: 150px;
   box-shadow: 15px 15px #898989;
  background: #fff;
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
  font-family: 'arial';
  padding: 10px;
  margin: 10px auto;
  border-radius: 5px;
}
label {
  font-family: 'arial';
  color: black;
  font-size: 2.5em;;
  padding: 10px;
}

button {
 
  background: #555;
  padding: 10px 15px;
  cursor: pointer;
  font-size: 2.9em;
  color: #fff;
  border-radius: 10px;
  margin-right: 10px;
  border: none;
}
button:hover{
  opacity: .7;
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

.success {
   background: #D4EDDA;
   color: #40754C;
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
  font-family: 'arial';
  color: black;
  font-size: 2.7em;
  text-align: center;
  text-decoration: none;
}
.hama
{
     
    
     align-items: center;
     justify-content: space-between;
}
          </style>
	<title>SIGN UP</title>

</head>
<body>
     <form action="signup-check.php" method="post">
      <div class="form">
     	<h2>دروستکردنی ئەکاونت</h2>

     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>ناو</label>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 

                      placeholder="ناو"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      placeholder="ناو"><br>
          <?php }?>

          <label>یوزەر نەیم</label>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      data-mask="999 999 999"
                      placeholder="یوزەر نەیم"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
              
                      name="uname" 
                      placeholder="یوزەر نەیم"><br>
          <?php }?>


     	<label>پاسوۆرد</label>
     	<input type="password" 
                 name="password" 
                 placeholder="پاسوۆرد"><br>

          <label>ھەمان پاسوۆرد</label>
          <input type="password" 
                 name="re_password" 
                 placeholder="ھەمان پاسوۆرد"><br>

<br>

<center>
     	<button type="submit">دروستکردنی ئەکاونت</button>
          <br>
          <br>
          <a href="index.php">ئەکاونتت ھەیە؟</a>
     </center>
     </form>
</body>
</html>