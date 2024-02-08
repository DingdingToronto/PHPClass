<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="display-5 mt-4 mb-4">Student Catalog</h1>
            </div>
        </div>
    </div>

    <?php 
    $connect = mysqli_connect("localhost","root", "root","HTTP5225"); // Changed mysql_connect to mysqli_connect
    $query = 'SELECT id, fname, lname, marks, grade, imageUrl from students';

    $students = mysqli_query($connect, $query);

    if(mysqli_connect_error()){
        die("Connection error: ".mysqli_connect_error()); // Added a semicolon
    }

    echo '<pre>';
    print_r($students); // Removed unnecessary echo
    echo '</pre>';
    ?>  

    <div class="container">
        <div class="row">
            <?php
            foreach($students as $student) {
                if($student['marks'] < 50) {
                    $bgClass = 'bg-danger';
                } else {
                    $bgClass = 'bg-success'; // Added a semicolon
                }
                echo '<div class="col-md-4">
                <div class="card '.$bgClass.'">'; // Added a space before $bgClass
                echo '<img class="card-img-top" src="'.$student['imageUrl'].'" alt="Card image cap">'; // Fixed concatenation
                echo '<div class="card-body">
                    <h5 class="card-title">'.$student['fname'].' '.$student['lname'].'</h5>
                    Marks: '.$student['marks'].'
                    </div>
                </div>
                </div>'; // Added a semicolon
            }
            ?>
        </div>
    </div>

</body>
</html>
