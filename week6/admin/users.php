<?php 
    include('../includes/connect.php');
    include('../includes/functions.php');

    if(isset($_POST['addUser'])){
        $query = 'INSERT INTO users (name, email, password)
        VALUES (
            "'  . mysqli_real_escape_string($connect,$_POST['Name']) .'",
            "'  . mysqli_real_escape_string($connect,$_POST['Email']) .'",
            "'  . md5($_POST['Password']) .'"
        )';

        mysqli_query($connect,$query);
        set_message('User has been created');
        header('Location: admin/index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Week 6</title>
</head>
<body>
<?php include '../reusables/nav.php';?>

<div class="container">
  <div class="row">
    <div class="col">
      <h1 class="display-3 mt-4 mb-4">
        Manage Users
      </h1>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <form action="" method="post">
        <div class="mb-3">
          <label for="Name" class="form-label">Name</label>
          <input type="text" class="form-control" id="Name" name="Name" aria-describedby="Name">
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="Email" aria-describedby="Email">
        </div>
        <div class="mb-3">
          <label for="Password" class="form-label">Password</label>
          <input type="password" class="form-control" id="Password" name="Password" aria-describedby="Password">
        </div>

        <button type="submit" name="addUser" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>
</body>
</html>
