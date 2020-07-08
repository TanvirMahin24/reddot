<?php 
    include '../sidebar.php';
?>
<section id="main-content">
    <section class="row wrapper main-wrapper">
        <div class="col-md-10 offset-md-1 col-12">
            <section class="box m-md-5 m-0 mt-4 p-5 rounded">
                <h2 class="p-3 text-center">Add Donor</h2>
                <?php
                    if(isset($_GET['error'])){
						if($_GET['error'] == 'emptyfields'){
							echo '<div class=" alert alert-danger">All fields are required</div>';
                        }
						elseif($_GET['error'] == 'invalidmail'){
							echo '<div class=" alert alert-danger">Invalid Email</div>';
                        }
                    }
                    elseif(isset($_GET['added'])){
						if($_GET['added'] == 'success'){
							echo '<div class=" alert alert-success">Donor Added Successfully</div>';
                        }
					}
                ?>
                <form action="../includes/addDonor.inc.php" method="POST" class="text-center">
                    <input type="text" name="name" placeholder="Name" class="form-control mb-2">
                    <input type="email" name="email" placeholder="Email" class="form-control  mb-2">
                    <input type="number" name="phone" placeholder="Phone Number" class="form-control mb-2">
                    <input type="text" name="address" placeholder="Address" class="form-control mb-2">
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
                    <input type="number" name="count" placeholder="Blood Donated" class="form-control my-2">
                    
                    <button type="submit" name="addDonor-submit" class="btn btn-primary mt-4">
                        <span class="fas fa-user-plus mr-2"></span>Add Donor
                    </button>
                </form>
            </section>
        </div>
    </section>
</section>
<?php
    include '../bottomIncludes.php';
?>