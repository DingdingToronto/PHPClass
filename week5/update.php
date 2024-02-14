
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Week 5</title>
</head>
<body>
<?php include 'reusables/nav.php';?>
<?php 
include 'includes/connect.php';
// query to get student data by id
$id = $_GET['id'];
// check if id is null
if ($id == null) {
  die('Invalid request');
}
$query = "SELECT * FROM `students` WHERE `id` = $id";
$students = mysqli_query($connect, $query);
// get the first student
$student = mysqli_fetch_assoc($students);

?>
<div class="container">
  <div class="row">
    <div class="col">
      <h1 class="display-3 mt-4 mb-4">
        Edit Student Profile
      </h1>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <form action="includes/updateStudent.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        
        <div class="mb-3">
          <label for="fname" class="form-label">First Name</label>
          <input type="text" class="form-control" id="fname" name="fname" value="<?php echo $student['fname']; ?>">
        </div>
        <div class="mb-3">
          <label for="lname" class="form-label">Last Name</label>
          <input type="text" class="form-control" id="lname" name="lname" value="<?php echo $student['lname']; ?>">
        </div>
        <div class="mb-3">
          <label for="marks" class="form-label">Marks</label>
          <input type="number" class="form-control" id="marks" name="marks" value="<?php echo $student['marks']; ?>">
        </div>
        <div class="mb-3">
          <label for="imageURL" class="form-label">Image URL</label>
          <input type="text" class="form-control" id="imageURL" name="imageURL" value="<?php echo $student['imageURL']; ?>">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
  </body>
</html>