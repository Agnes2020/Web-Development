<?php

include('connectdataB.php');
include('dataValidate.php');

//Fetch the inputs
$username = $_POST['Username'];
$email = $_POST['Email'];
$password = $_POST['User_password'];

// $msg = "";
// $action_page = "";

// Create a constrauctor
$validate = new Validation();

$usernamenotinuse = $validate->verifyusername($username);

if (!$usernamenotinuse) {
        // Create a connection object
    $mysqli = connectToDb();

    // $hashedpass = password_hash($password);
    $query = "INSERT INTO myusers (Username,Email,User_password)  
                VALUES ('$username', '$email', '$password')";


    //Execute the query
    $result = $mysqli->query($query);

    //Check if the query executed successfully
    if ($result){
        //Redirect the user to the login page
        header("Location: ../login.php");
        // $action_page = "../login.php";
    } else {
        //Redirect them to the register page and display an error message
        // $msg = "Unable to create account. Please try again.";
        header("Location: ../register.php");
        // $action_page = "../register.php";
    }
}
 else {
    // $msg = "Username already exists";
    // $action_page = "../register.php";
    header("Location: ../register.php?error=userexist");
}

//Redirect the user as per the action page
// echo '<form name="user_redirect" id="user_redirect" method="POST"'
//  . 'action="' . $action_page . '">'
//  . '<input type="text" name="msg" value="' . $msg . '" />'
//  . '</form>';

//create a javascript to execute the form
// echo '<script language="Javascript" type="text/javascript">'
//  . 'window.onload=function(){ '
//  . 'window.document.user_redirect.submit(); }'
//  . '</script>';


