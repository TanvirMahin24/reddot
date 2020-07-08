<?php

if(isset($_POST['pass-submit'])){
    require 'db.inc.php';
    session_start();

    $oldPass = $_POST['oldPass'];
    $password = $_POST['pass'];
    $password2 = $_POST['pass2'];

    $email = $_SESSION['email'];

    if(empty($oldPass) || empty($password) || empty($password2)){
        header("Location: ../settings/?error=emptyfields");
        exit();
    }
    else{
        
        $sql = "SELECT * FROM users where email=?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../settings/?error=sqlerror");
            exit();
        }
        else{
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if($row = mysqli_fetch_assoc($result)){
                $pwdCheck = password_verify($oldPass, $row['password']);
                if($pwdCheck == false){
                    header("Location: ../settings/?error=wrongpwd");
                    exit();
                }
                elseif($pwdCheck == true){
                    if($password == $password2){
                        $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
                        $sql = "UPDATE `users` SET `password` = ? WHERE `users`.`email` = ?;";
                        $stmt = mysqli_stmt_init($conn);
                        if (!mysqli_stmt_prepare($stmt, $sql)) {
                            header("Location: ../settings/?error=sqlerror");
                            exit();
                        }
                        mysqli_stmt_bind_param($stmt, "ss", $hashedPwd, $email);
                        mysqli_stmt_execute($stmt);
                        session_start();
                        session_unset();
                        session_destroy();
                        header("Location: ../");
                    }
                    else{
                        header("Location: ../settings/?error=pwdmismatch");
                        exit();
                    }
                }
                else{
                    header("Location: ../settings/?error=wrongpwd");
                    exit();
                }
            }
            else{
                header("Location: ../settings/?error=nouser");
                exit();
            }
        }
    }
}