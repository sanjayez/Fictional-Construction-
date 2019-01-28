<?php
  require('../include/db.php');
  //ceate query  
  $query = 'SELECT * FROM mails';
  //Get result
  $result = mysqli_query($conn, $query);
  //fetch data
  $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

  //free result
  mysqli_free_result($result);

  mysqli_close($conn);
  
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TASATA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../CSS/style.css">
</head>
<body>

    <header>
        <nav class="container">
                <ul>
                    <li><a href="logout.php">LOGOUT</a></li>
                </ul>
        </nav>
    </header>

    <div class="post">
    <h1 id="title">PROJECTS</h1>
   
        <div class="users">
            <table>
                <tr>
                    <th>NAME</th>
                    <th>PROJECT</th> 
                    <th>DETAILS</th>
                    <th>EMAIL</th>
                    <th>TELEPHONE</th>
                </tr>
                <?php foreach($posts as $post): ?>
                <tr>
                    <td><?php echo $post['name'];?></td>
                    <td><?php echo $post['project'];?></td> 
                    <td><?php echo $post['detail'];?></td> 
                    <td><?php echo $post['email'];?></td>
                    <td><?php echo $post['tele'];?></td>
                </tr>
                <?php endforeach;?>
            </table>
        </div>
    
    </div>

</body>
</html>