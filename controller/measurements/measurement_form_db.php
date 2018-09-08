<?php
session_start();

$description = "";
$edit_state = false;

$db = mysqli_connect('localhost','root','','mega_power');

//inserting data to the database

if(isset($_POST['submit'])){

    $description = $_POST['description'];

    $query = "INSERT INTO measurement(description) VALUES ('$description')";

    mysqli_query($db , $query);

    header('location:../../views/dashboard/setting.php');

}
//Updating a record

if (isset($_POST['edit'])){
    $description = mysqli_real_escape_string($_POST['description']);

    mysqli_query($db , "UPDATE measurement set description = '$description' WHERE id = $id");

    header('location:../../views/dashboard/setting.php');
}

//retrieving the data

    $result_measurements = mysqli_query($db , "select * from measurement");

//Deleting a record

if (isset($_GET['delete'])){
    $id = $_GET['delete'];

    mysqli_query($db , "DELETE FROM measurement WHERE id = $id");

    header("location:../../views/dashboard/setting.php");
}

?>