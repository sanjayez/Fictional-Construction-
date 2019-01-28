<?php
    require('../include/db.php');
    $error="";
    if(isset($_POST['submit'])){
      if(empty($_POST['user'] || empty($_POST['pwd']))){
          $error="Username or password is invalid";
      }
      else{
        $username = $_POST['user'];
        $pass = $_POST['pwd'];
        
        
        $query =  mysqli_query($conn, "SELECT * FROM users WHERE password='$pass' AND user='$username'");
  
        $rows = mysqli_num_rows($query);
        if($rows == 1)
        {
          $_SESSION['login'] = True;
          $_SESSION['user'] = $_POST['username'];
          header("Location: welcome.php");
        }
        else{
          header("Location:admin.php");
        }
        mysqli_close($conn);
      }
      
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ZohVar Constructions</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../CSS/contact.css">
</head>
<body>
    <div class="container">  
        <form id="contact" action="" method="post">
          <h3>ADMIN LOGIN</h3>
          
          <fieldset>
            <input name="user" placeholder="Username" type="text" tabindex="1" required autofocus>
          </fieldset>
          
          <fieldset>
            <input name="pwd" placeholder="password" type="password" tabindex="1" required autofocus>
          </fieldset>
          
          
          <fieldset>
            <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
          </fieldset>
          
        </form>
      </div>
</body>
</html>