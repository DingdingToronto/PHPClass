<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Week 5</title>
</head>
<body>
<?php include 'reusables/nav.php'; ?>
  
  <div class="container">
    <div class="row">
      <div class="col">
        <h1 class="display-3 mt-4 mb-4">
          Login
        </h1>
      </div>
    </div>
    <?php 
      include('includes/connect.php');
      include('includes/functions.php');
      if(isset($_POST['login'])){
        $query = 'SELECT * 
                FROM users
                WHERE email = "' . $_POST['email'] .'"
                AND password = "' . $_POST['password'] .'"
                LIMIT 1
                ';

      $result = mysqli_query($connect, $query);
      if(mysqli_num_rows($result)){
        $record = mysqli_fetch_assoc($result);
        $_SESSION['id'] = $record['id'];
        header('Location:admin/index.php');
        die();
      } else {
        set_message('Incorrect username/password');
        header('Location:index.php');
        die();
      }
      }
      
     
    ?>
  </div>
</body>
</html>