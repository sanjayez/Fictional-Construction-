<?php
  require('../include/db.php');
  if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $tele = mysqli_real_escape_string($conn,$_POST['tele']);
    $project = mysqli_real_escape_string($conn,$_POST['project']);
    $detail = mysqli_real_escape_string($conn,$_POST['detail']);
    
    $query = "INSERT INTO mails (id, name, project, email, tele, detail) VALUES ('','$name','$project','$email','$tele','$detail')";
    if(mysqli_query($conn, $query))
    {
        echo "<script>alert('Success')</script>";
    }
    else{
        echo 'ERROR:'.mysqli_error($conn);
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
          <h3>Contact Us</h3>
          <h4>Contact us project queries</h4>
          
          <fieldset>
            <input name="name" placeholder="Your name" type="text" tabindex="1" required autofocus>
          </fieldset>
          
          <fieldset>
            <input name="email" placeholder="Your Email Address" type="email" tabindex="2" required>
          </fieldset>
          
          <fieldset>
            <input name="tele" placeholder="Your Phone Number " type="tel" tabindex="3" required>
          </fieldset>

          <fieldset>
            <textarea name="project" placeholder="Project Name" tabindex="5" required></textarea>
          </fieldset>

          <fieldset>
            <textarea name="detail" placeholder="Project Details" tabindex="5" required></textarea>
          </fieldset>
          
          <fieldset>
            <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
          </fieldset>
          
        </form>
      </div>
</body>
</html>