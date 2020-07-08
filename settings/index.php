<?php 
    include '../sidebar.php';
?>
<section id="main-content">
    <section class="row wrapper main-wrapper">
        <div class="col-md-10 offset-md-1 col-12">
            <section class="box m-md-5 m-0 mt-4 p-5 rounded">
                <h2 class="p-3 text-center">Change Password</h2>
                <?php
                    if(isset($_GET['error'])){
						if($_GET['error'] == 'emptyfields'){
							echo '<div class=" alert alert-danger">All fields are required</div>';
                        }
						elseif($_GET['error'] == 'wrongpwd'){
							echo '<div class=" alert alert-danger">Wrong password</div>';
                        }
						elseif($_GET['error'] == 'pwdmismatch'){
							echo '<div class="alert alert-danger">New Password mismatch</div>';
                        }
					}
                ?>
                <form action="../includes/passwordChange.inc.php" method="POST" class="text-center">
                    <input type="password" name="oldPass" placeholder="Current Password" class="form-control mb-2">
                    <input type="password" name="pass" placeholder="New Password" class="form-control  mb-2">
                    <input type="password" name="pass2" placeholder="Retype New Password" class="form-control  mb-4">
                    <input type="submit" value="Change Password" name="pass-submit" class="btn btn-primary">
                </form>
            </section>
        </div>
    </section>
</section>
<?php
    include '../bottomIncludes.php';
?>