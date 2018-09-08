<?php

session_start();


$db = mysqli_connect('localhost','root','','mega_power');

// initialize variables
    $date = "";
    $description = "";
    $amount = "";
    $id = 0;
    $update = false;


//Query for Expense.....

//inserting data to the database

if(isset($_POST['Submit_i'])){

    $date = $_POST['date_i'];
    $description = $_POST['description_i'];
    $amount = $_POST['amount_i'];

    $query = "INSERT INTO income(date, description, amount) VALUES ('$date', '$description', '$amount')";

    if(mysqli_query($db , $query)){
        header('location:../../views/financialStatement/index_income.php');
    }
    else{
        echo "Not Submit";
    }
   
}

//retrieving income data
    
    $results = mysqli_query($db, "SELECT * FROM income");



//Updating a record
if (isset($_POST['update_i'])) {
    $id_u = $_POST['id_i'];
    $date_u = $_POST['date_i'];
    $description_u = $_POST['description_i'];
    $amount_u = $_POST['amount_i'];
    
    $query = "UPDATE income SET date='$date_u', description='$description_u', amount='$amount_u' WHERE id='$id_u' ";

    if(mysqli_query($db, $query)){
        header('location:../../views/financialStatement/index_income.php');
    }else{
        echo "Not Update";
    }   
}

//Deleting a record

if (isset($_POST['delete_i'])){
    $id_d = $_POST['deleteI_id'];

    $query = "DELETE FROM income WHERE id = $id_d";
   
    mysqli_query($db , $query);

    header('location:../../views/financialStatement/index_income.php');
}





//Query for Expense.....

//inserting data to the database

if(isset($_POST['Submit_e'])){

    $date = $_POST['date_e'];
    $description = $_POST['description_e'];
    $amount = $_POST['amount_e'];

    $query = "INSERT INTO expense(date, description, amount) VALUES ('$date', '$description', '$amount')";

    mysqli_query($db , $query);

    header('location:../../views/financialStatement/index_expense.php');
}


//retrieving expense data
    
    $result = mysqli_query($db, "SELECT * FROM expense");


//Updating a record
if (isset($_POST['update_e'])) {
    $id_u = $_POST['id_e'];
    $date_u = $_POST['date_e'];
    $description_u = $_POST['description_e'];
    $amount_u = $_POST['amount_e'];
    
    $query = "UPDATE expense SET date='$date_u', description='$description_u', amount='$amount_u' WHERE id='$id_u' ";

    if(mysqli_query($db, $query)){
        header('location:../../views/financialStatement/index_expense.php');
    }else{
        echo "Not Update";
    }   
}


//Deleting a record

if (isset($_POST['delete_e'])){
    $id_d = $_POST['deleteE_id'];

    $query = "DELETE FROM expense WHERE id = $id_d";
  
    mysqli_query($db , $query);

    header('location:../../views/financialStatement/index_expense.php');
}


?>