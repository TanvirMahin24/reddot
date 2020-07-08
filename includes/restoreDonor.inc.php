<?php

if(isset($_POST['restore-submit'])){
    require 'db.inc.php';
    $id = $_POST['id'];
    $sql = "UPDATE `blood_donors` SET `del` = '0' WHERE `blood_donors`.`id` = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../deleted/?error=sqlerror");
        exit();
    }else{
        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);
        
        header("Location: ../deleted/?restore=success");
        exit(); 
    }
    
}
else{
    header("Location: ../deleted/?error=submit");
        exit();
}