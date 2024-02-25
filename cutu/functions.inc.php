<?php

function createUser($conn, $email, $username, $pwd) {
    $sql = "INSERT INTO users (usersName, usersEmail, usersPwd) VALUES (?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: login page/loginpage.html?error=stmtfailed");
        exit ();
    }
    mysqli_stmt_bind_param($stmt, "sss", $email, $username, $pwd);
    mysqli_stmt_execute($stmt);
    
    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){

        return $row
    }
    else {
        $result = false;
        return $result;
    }

}