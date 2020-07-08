<?php
require 'db.inc.php';
class Donor {
    function totalDonorCount($conn){
        $sql = "SELECT * FROM `blood_donors`";
        $result = mysqli_query($conn, $sql);
        echo mysqli_num_rows($result);
    }
    function activeDonorCount($conn){
        $sql = "SELECT * FROM `blood_donors` WHERE del=0";
        $result = mysqli_query($conn, $sql);
        echo mysqli_num_rows($result);
    }
    function deletedDonorCount($conn){
        $sql = "SELECT * FROM `blood_donors` WHERE del=1";
        $result = mysqli_query($conn, $sql);
        echo mysqli_num_rows($result);
    }
    function singleDonorDetails($conn,$id){
        $sql = "SELECT * FROM `blood_donors` WHERE id = ".$id;
        $result = mysqli_query($conn, $sql);
        $rowcount=mysqli_num_rows($result);
        return mysqli_fetch_assoc($result);
    }
    function allDonors($conn){
        $sql = "SELECT * FROM `blood_donors` WHERE del=0";
        $result = mysqli_query($conn, $sql);
        $rowcount=mysqli_num_rows($result);
        $rows = mysqli_fetch_all($result);
        for ($i = 0; $i<$rowcount; $i++) {
            echo '  <tr>
                        <th scope="row">'.($i+1).'</th>
                        <td>'.$rows[$i][1].'</td>
                        <td>'.$rows[$i][2].'</td>
                        <td>'.$rows[$i][6].'</td>
                        <td>
                            <form action="../profile/" method="GET">
                            <input type="hidden" value="'.$rows[$i][0].'" name="id"/>
                            <input type="submit" value="View" class="btn btn-sm btn-outline-primary"/>
                            </form>
                        </td>
                    </tr>';
        }
    }
    function deletedDonors($conn){
        $sql = "SELECT * FROM `blood_donors` WHERE del=1";
        $result = mysqli_query($conn, $sql);
        $rowcount=mysqli_num_rows($result);
        $rows = mysqli_fetch_all($result);
        for ($i = 0; $i<$rowcount; $i++) {
            echo '  <tr>
                        <th scope="row">'.($i+1).'</th>
                        <td>'.$rows[$i][1].'</td>
                        <td>'.$rows[$i][2].'</td>
                        <td>'.$rows[$i][6].'</td>
                        <td>
                            <form action="../includes/restoreDonor.inc.php" method="POST">
                            <input type="hidden" value="'.$rows[$i][0].'" name="id"/>
                            <input type="submit" value="Restore" name="restore-submit" class="btn btn-outline-success"/>
                            </form>
                        </td>
                    </tr>';
        }
    }
    function searchGroupDonors($conn, $group, $show){
        $sql = 'SELECT * FROM `blood_donors` WHERE `group`="'.$group.'";';
        $result = mysqli_query($conn, $sql);
        $rowcount=mysqli_num_rows($result);
        $rows = mysqli_fetch_all($result);
        if($rowcount == 0){
            if($show == 'show'){
                echo '  
                    <h4 class="text-center">
                        No Donor Found
                    </h4>
                ';
            }
            
            return 0;
        }
        else if($show == 'show'){
            for ($i = 0; $i<$rowcount; $i++) {
                echo '  <tr>
                            <th scope="row">'.($i+1).'</th>
                            <td>'.$rows[$i][1].'</td>
                            <td>'.$rows[$i][2].'</td>
                            <td>'.$rows[$i][6].'</td>
                            <td>
                            <form action="../profile/" method="GET">
                            <input type="hidden" value="'.$rows[$i][0].'" name="id"/>
                            <input type="submit" value="View" class="btn btn-sm btn-outline-primary"/>
                            </form>
                        </td>
                        </tr>';
            }
            
        }
        return 1;
    }
    function topFiveDonors($conn){
        $sql = "SELECT * FROM `blood_donors` WHERE del=0 ORDER BY count DESC LIMIT 5";
        $result = mysqli_query($conn, $sql);
        $rowcount=mysqli_num_rows($result);
        $rows = mysqli_fetch_all($result);
        for ($i = 0; $i<$rowcount; $i++) {
            echo '  <tr>
                        <th scope="row">'.($i+1).'</th>
                        <td>'.$rows[$i][1].'</td>
                        <td>'.$rows[$i][2].'</td>
                        <td>'.$rows[$i][6].'</td>
                    </tr>';
        }
    }
};

$donor = new Donor();