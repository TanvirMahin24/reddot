<?php 
    if(isset($_GET['id'])){
        include '../sidebar.php';
        $id = $_GET['id'];
        $res = $donor->singleDonorDetails($conn,$id);
        $name = $res['name'];
        $group = $res['group'];
        $email = $res['email'];
        $address = $res['address'];
        $phone = $res['phone'];
        $count = $res['count'];
    }
    else{
        header("Location: ../all/");
        exit();
    }
?>
<section id="main-content">
    <section class="row wrapper main-wrapper">
        <div class="col-md-10 offset-md-1">
            <section class="box p-5 rounded">

                <h2 class="pb-3"><span class="fas fa-user"></span> Basic Information</h2>
                <h5 class="pt-0">Name: <span class="font-weight-normal"><?php echo $name ?></span></h5>
                <h5 class="pt-0">Email: <span class="font-weight-normal"><?php echo $email ?></span>
                </h5>
                <h5 class="pt-0">Phone: <span class="font-weight-normal"><?php echo $phone ?></span>
                </h5>
                <h5 class="pt-0">
                    Address: <span class="font-weight-normal"><?php echo $address ?></span>
                </h5>


                <div class="h5">
                    Blood Group: <span class="badge badge-danger text-light h4"><?php echo $group ?></span>
                </div>
                <div class="h5 pb-5">
                    Number of Blood Donation: <span class="badge badge-primary text-light"><?php echo $count ?></span>
                </div>
                <?php
                    if(isset($_GET['donated'])){
						if($_GET['donated'] == 'success'){
							echo '<div class="m-4 alert alert-success">Blood Donated Successfully</div>';
						}
					}
                ?>
                <div class="d-flex">
                    <form action="../includes/donated.inc.php" method="POST">
                        <input type="hidden" name="id" value=<?php echo '"'.$id.'"'?>>
                        <input type="hidden" name="count" value=<?php echo '"'.$count.'"'?>>
                        <button type="submit" name="donate-submit" class="btn btn-success"><span class="fas fa-tint mr-2"></span>Donate Now</button>
                        
                    </form>
                    <form action="../includes/deleteDonor.inc.php" method="POST" class="ml-auto">
                        <input type="hidden" name="id" value=<?php echo '"'.$id.'"'?>>
                        <button type="submit" name="delete-submit" class="btn btn-danger"><span class="fas fa-trash mr-2"></span> Delete Donor</button>
                    </form>
                </div>
        </div>
    </section>
</section>
<?php
    include '../bottomIncludes.php';
?>