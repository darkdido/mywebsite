<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Change Password</title>
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

form {
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
  font-size: 44px;
 position: absolute; right: 230px;
  padding: 10px;
  font-weight: bold;
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
</head>

<body>
    <form action="change-p.php" method="post">
     	<h2>گۆڕینی پاسوۆرد</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

     	<?php if (isset($_GET['success'])) { ?>
            <p class="success"><?php echo $_GET['success']; ?></p>
        <?php } ?>

     	<label>پاسوۆردی کۆن</label>
     	<input type="password" 
     	       name="op" 
     	       placeholder="پاسوۆردی کۆن">
     	       <br>

     	<label>پاسوۆردی نوێ</label>
     	<input type="password" 
     	       name="np" 
     	       placeholder="پاسوۆردی نوێ">
     	       <br>

     	<label>ھەمان پاسوۆردی نوێ</label>
     	<input type="password" 
     	       name="c_np" 
     	       placeholder="ھەمان پاسوۆردی نوێ">
     	       <br>

     	<button type="submit">گۆڕین</button>
          <a href="home.php" class="ca">گەڕانەوە</a>
     </form>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>