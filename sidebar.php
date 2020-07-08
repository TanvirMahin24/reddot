<?php
    session_start();
    if(!isset($_SESSION['userId'])) {
        header("Location: ./index.php");
        exit();
    }
    else{
        include 'includes/donorClass.inc.php';
        $uri = explode('/',$_SERVER['REQUEST_URI']);
        $number = count($uri);
        $active = $uri[$number - 2];
        if($active == 'dashboard'){
            $dashboard = "active";
        }
        else{
            $dashboard = "";
        }
        if($active == 'search'){
            $search = "active";
        }
        else{
            $search = "";
        }
        if($active == 'add'){
            $add = "active";
        }
        else{
            $add = "";
        }
        if($active == 'settings'){
            $settings = "active";
        }
        else{
            $settings = "";
        }
        if($active == 'search'){
            $search = "active";
        }
        else{
            $search = "";
        }
        if($active == 'deleted'){
            $deleted = "active";
        }
        else{
            $deleted = "";
        }
        if($active == 'all'){
            $all = "active";
        }
        else{
            $all = "";
        }
        
    }

?>
<!--<form action="includes/logout.inc.php">
        <input type="submit" value="Logout" class="btn btn-outline-primary">
    </form>-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css"
        integrity="sha384-xxzQGERXS00kBmZW/6qxqJPyxW3UR0BPsL4c8ILaIWXva5kFi7TxkIIaMiKtqV1Q" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>REDrop</title>
</head>

<body>
    <div class="page-sidebar expandit">
        <div class="sidebar-inner" id="main-menu-wrapper">
            <ul class="float-right info-menu user-notify m-3">
                <button id="menu_icon"><i class="fas fa-bars" aria-hidden="true"></i></button>
            </ul>
            <div class="profile-info row ">
                <div class="profile-image ">
                    <a href="../dashboard/">
                        <img alt="" src="../img/REDrop Logo.png" class="img-fluid">
                    </a>
                </div>
                <div class="profile-details">
                    <h3>
                        <?php echo $_SESSION['name'] ?>
                    </h3>
                    <p class="profile-title">Admin</p>

                </div>
            </div>

            <ul class="wraplist">
                <li><a href="../dashboard/" class=<?php echo $dashboard; ?>><span class="sidebar-icon"><i class="fas fa-home"></i></span> <span
                            class="menu-title">Dashboard</span></a></li>
                <li><a href="../add/" class=<?php echo $add; ?>><span class="sidebar-icon"><i class="fas fa-user-plus"></i></span> <span
                            class="menu-title">Add Donor</span></a></li>
                <li><a href="../all/" class=<?php echo $all; ?>><span class="sidebar-icon"><i class="fas fa-users"></i></span> <span
                            class="menu-title">View all Donor</span></a></li>
                <li><a href="../search/" class=<?php echo $search; ?>><span class="sidebar-icon"><i class="fas fa-search"></i></span> <span
                            class="menu-title">Search</span></a></li>
                <li><a href="../deleted/" class=<?php echo $deleted; ?>><span class="sidebar-icon"><i class="fas fa-users-slash"></i></span>
                        <span class="menu-title">Deleted Donors</span></a></li>
                <li><a href="../settings/"  class=<?php echo $settings; ?>><span class="sidebar-icon"><i class="fas fa-cog"></i></span> <span
                            class="menu-title">Settings</span></a></li>
                <li><a href="../includes/logout.inc.php"><span class="sidebar-icon"><i
                                class="fas fa-sign-out-alt"></i></span> <span class="menu-title">Logout</span></a></li>
            </ul>

        </div>
        <footer class="footer">
            <h4 class="lead pl-4 pb-4">
                &copy;2020 by <span class="font-weight-bold">Tanvir Mahin</span>
            </h4>
        </footer>
    </div>