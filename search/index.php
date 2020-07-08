<?php 
    include '../sidebar.php';
    
?>
<section id="main-content">
    <section class="row wrapper main-wrapper">
        <div class="col-md-12">
            <section class="box minH50 mb-5 rounded">
                <h2 class="p-3 text-center">Search Donors</h2>
                <?php
                    print_r($active);
                ?>
                <form action="" class="container mb-5" method="POST">
                    <div class="d-flex justify-content-center">
                        <div class="pl-4">
                            <select class="form-control" name="group">
                                <option selected disabled>Blood Group</option>
                                <option value="A+">A+</option>
                                <option value="A-">A-</option>
                                <option value="B+">B+</option>                                                                
                                <option value="B-">B-</option>                                                                
                                <option value="AB+">AB+</option>                                                                
                                <option value="AB-">AB-</option>                                                                
                                <option value="O+">O+</option>                                                                
                                <option value="O-">O-</option>                                                                
                            </select>
                        </div>
                        <div class="pl-4">  
                            <button type="submit" name="search" class="btn btn-primary ml-auto">
                                <span class="fas fa-search mr-2"></span>Search
                            </button>
                        </div>
                    </div>
                </form>

                
                <?php 
                    if(isset($_POST['search'])){
                        if($_POST['group']){
                            if($donor->searchGroupDonors($conn, $_POST['group'],'') == 1){
                                echo '
                                 <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Blood Group</th>
                                            <th scope="col">Donation</th>
                                            <th scope="col">Action</th>
                
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ';
                                    $donor->searchGroupDonors($conn, $_POST['group'],'show');
                                    echo '
                                            </tbody>
                                        </table>';
                            }
                            else{
                                $donor->searchGroupDonors($conn, $_POST['group'],'show');
                            }
                        }
                        
                    }
                    else{
                        echo '<h3 class="lead text-center">Please give the blood group to search. You can search with donor name too. Please give single Keyword to search.</h3>';
                    }
                
                ?>
                
            </section>
        </div>
    </section>
</section>

<?php
    include '../bottomIncludes.php';
?>