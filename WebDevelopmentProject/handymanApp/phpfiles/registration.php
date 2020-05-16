<?php

include('connectdataB.php');
include('dataValidate.php');

//Fetch the inputs
$username = $_POST['Username'];
$email = $_POST['Email'];
$password = $_POST['User_password'];


// Create a constrauctor
$validate = new Validation();

$usernamenotinuse = $validate->verifyusername($username);

if (!$usernamenotinuse) {
        // Create a connection object
    $mysqli = connectToDb();

    $hashedpass = password_hash($password, PASSWORD_DEFAULT);
    var_dump($hashedpass);
    $query = "INSERT INTO myusers (Username,Email,User_password)  
                VALUES ('$username', '$email', '$hashedpass')";


    //Execute the query
    $result = $mysqli->query($query);

    //Check if the query executed successfully
    if ($result){
        //Redirect the user to the login page
        header("Location: ../login.php");
    } else {
        //Redirect them to the register page and display an error message
        header("Location: ../register.php");
    }
}
 else {
    // $msg = "Username already exists";
    // $action_page = "../register.php";
    header("Location: ../register.php?error=userexist");
}



