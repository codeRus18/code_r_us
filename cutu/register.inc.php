<?php
if(isset($_POST["submit"])) {
    
    $email = $_POST["email"];
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';
    createUser($conn, $email, $username, $pwd);


}

    else {
    header("location: ") ;
    }