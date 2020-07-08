<?php

if(isset($_POST['donate-submit'])){
    require 'db.inc.php';
    $id = $_POST['id'];
    $count = $_POST['count'];
    ++$count;
    
    $sql = "UPDATE `blood_donors` SET `count` =? WHERE `blood_donors`.`id` = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../profile/?error=sqlerror");
        exit();
    }else{
        mysqli_stmt_bind_param($stmt, "ii",$count, $id);
        mysqli_stmt_execute($stmt);
        header('Location: ../profile/?profile-submit=View+Profile&donated=success&id='.$id);
        exit(); 
    }
    
}
else{
    header("Location: ../profile/?error=submit");
        exit();
}