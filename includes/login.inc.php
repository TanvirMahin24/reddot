<?php

if(isset($_POST['login-submit'])){
    require 'db.inc.php';

    $mailuid = $_POST['emailOrUser'];
    $password = $_POST['password'];

    if(empty($mailuid) || empty($password)){
        header("Location: ../index.php?error=emptyfields");
        exit();
    } 
    else{
        $sql = "SELECT * FROM users where username=? OR email=?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../index.php?error=sqlerror");
            exit();
        }
        else{
            mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if($row = mysqli_fetch_assoc($result)){
                $pwdCheck = password_verify($password, $row['password']);
                if($pwdCheck == false){
                    header("Location: ../index.php?error=wrongpwd");
                    exit();
                }
                elseif($pwdCheck == true){
                    session_start();
                    $_SESSION['userId'] = $row['id'];
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['name'] = $row['name'];
                    header("Location: ../dashboard/");
                    exit();
                }
                else{
                    header("Location: ../index.php?error=wrongpwd");
                    exit();
                }
            }
            else{
                header("Location: ../index.php?error=nouser");
                exit();
            }
        }

    }

}
else{
    header("Location: ../index.php");
    exit();
}