<?php 
    include '../sidebar.php';
?>
<section id="main-content">
    <section class="row wrapper main-wrapper">
        <div class="col-md-6">
            <section class="box text-left rounded">
                <img src="../img/REDrop Logo.png" alt="" class="img-fluid rounded">

            </section>
        </div>
        <div class="col-md-6">
            <section class="box text-left mt-4 p-4 h-auto rounded">
                <h3 class=" pt-0">Admin Information</h3>
                <h5 class="pt-0">Name: <span class="font-weight-normal"><?php echo $_SESSION['name'] ?></span></h5>
                <h5 class="pt-0">Username: <span class="font-weight-normal"><?php echo $_SESSION['username'] ?></span>
                </h5>
                <h5 class="pt-0">
                    Email: <span class="font-weight-normal"><?php echo $_SESSION['email'] ?></span>
                </h5>
            </section>
            <section class="box text-left p-4 mt-3 h-auto rounded">
                <h3 class=" pt-0">Overview</h3>
                <h5 class="pt-0">Total Donor: <span
                        class="font-weight-normal"><?php $donor->totalDonorCount($conn) ?></span>
                </h5>
                <h5 class="pt-0">Active Donors: <span
                        class="font-weight-normal"><?php $donor->activeDonorCount($conn) ?></span></h5>
                <h5 class="pt-0">
                    Deleted Donors: <span class="font-weight-normal"><?php $donor->deletedDonorCount($conn) ?></span>
                </h5>
            </section>
            <section class="box text-left p-4 mt-3 d-flex justify-content-center rounded">
                <a href="../add/" class="btn btn-primary "><span class="fas fa-user-plus pr-2"></span>Add Donor</a>
                <a href="../all/" class="btn btn-primary mx-2"><span class="fas fa-user-plus pr-2"></span>All Donor</a>
                <a href="../search/" class="btn btn-primary"><span class="fas fa-search pr-2"></span>Search Donor</a>
            </section>
        </div>
        <div class="clearfix"></div>
        <div class="col-md-12">
            <section class="box mb-5 rounded">
                <h2 class="p-3 text-center">Top Donors</h2>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Blood Group</th>
                            <th scope="col">Donation</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $donor->topFiveDonors($conn) ?>
                    </tbody>
                </table>
            </section>
        </div>
    </section>
</section>
<?php
    include '../bottomIncludes.php';
?>