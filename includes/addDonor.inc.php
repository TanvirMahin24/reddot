<?php

if(isset($_POST['addDonor-submit'])){
    require 'db.inc.php';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $group = $_POST['group'];
    if(isset($_POST['count'])){
        $count = $_POST['count'];
    }else{
        $count = 0;
    }


    if(empty($name) || empty($email) || empty($address) || empty($phone) || empty($group)){
        header("Location: ../add/?error=emptyfields");
        exit();
    }
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header("Location: ../add/?error=invalidmail");
        exit();
    }
    else{
        $sql = "INSERT INTO `blood_donors` (`id`, `name`, `group`, `email`, `phone`, `address`, `count`, `del`) VALUES (NULL, ?, ?, ?, ?, ?, ?, '0');";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../add/?error=sqlerror");
            exit();
        }else{
            mysqli_stmt_bind_param($stmt, "sssssi", $name,$group,$email,$phone,$address,$count);
            mysqli_stmt_execute($stmt);
            header('Location: ../add/?added=success');
            exit(); 
        }
    }
    
    
    
}
else{
    header("Location: ../add/?error=submit");
        exit();
}