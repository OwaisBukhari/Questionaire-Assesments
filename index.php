<?php
error_reporting(0);

session_start();




// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "questions";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$name = $_POST['name'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$email = $_POST['email'];

//Session variables iniatiales

$_SESSION['name'] =$name;

if(isset($name)){
    
    // Insert data into the database
    $sql = "INSERT INTO `submissions`(`id`, `name`, `gender`, `dob`, `email`) VALUES (NULL,'$name','$gender','$dob','$email')";
    
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "Data inserted successfully";  
        //rediect to location
        header("Location: d.php");
    
    }
    else{
        echo "Data not inserted";
       echo   mysqli_error($conn);
    }
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Login</title>
</head>

<style>
.container {

    padding-top: 100px;
}
</style>

<body>

    <div class="container">



        <form action="" method="POST">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
            </div>
            <div class="form-group">
                <label for="gender">Gender</label>
                <select class="form-control" id="gender" name="gender">
                    <option>Male</option>
                    <option>Female</option>
                    <option>Other</option>
                </select>
            </div>
            <div class="form-group">
                <label for="dob">Date of Birth</label>
                <input type="date" class="form-control" id="dob" name="dob">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>


</body>

</html>