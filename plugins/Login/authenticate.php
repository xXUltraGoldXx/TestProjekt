<?php
$mysqli = new mysqli($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
  if ( isset($_POST['username'], $_POST['password']) ) 
  {
    if ($stmt = $mysqli->prepare('SELECT id, password FROM accounts WHERE username = ?'))
    {
      $stmt->bind_param('s', $_POST['username']);
      $stmt->execute();
      $stmt->store_result();
      if ($stmt->num_rows > 0)
      {
         $stmt->bind_result($id, $password);
         $stmt->fetch();

         if (password_verify($_POST['password'], $password))
         {
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['name'] = $_POST['username'];
            $_SESSION['id'] = $id;
         }
         else
         {
           echo '<script>alert("Incorrect username and/or password!")</script>';
        }
       }
       else
       {
         echo '<script>alert("Incorrect username and/or password!")</script>';
        }
        $stmt->close();
    }
  }





?>
