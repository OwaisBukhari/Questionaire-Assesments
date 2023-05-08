<?php
session_start();
$user=$_SESSION['name'];

// $user="ali";
// the $_POST[] array will contain the passed in filename and data
// the directory "data" is writable by the server (chmod 777)
$filename = "data/".$_POST['filename'];
$data = $_POST['filedata'];
// write the file to disk
file_put_contents($filename, $data);


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "activity";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the data from JavaScript
// $data = ($_POST['filedata']);
$csv = $_POST['filedata'];

// Convert the CSV data into an array
$data = array_map('str_getcsv', explode("\n", $csv));
// print_r( $data);

// Iterate through each row of data
foreach ($data as $row) {
    print_r($row);
    echo($row->rt);
    echo($row->trial_type);
    // echo($row[2]);

    // Insert the data into the table
    $sql = "INSERT INTO `experiment_data`(`id`, `username`, `rt`, `recall`, `stimuli`, `accuracy`, `trial_type`, `trial_index`, `time_elapsed`) VALUES (NULL,'$user','$row[0]','$row[1]','$row[2]','$row[3]','$row[4]','$row[5]','$row[6]')";
    // VALUES ('" . $row->data1 . "', '" . $row->data2 . "', '" . $row->data3 . "')";
    if ($conn->query($sql) !== TRUE) {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

echo "Data inserted successfully";
?>