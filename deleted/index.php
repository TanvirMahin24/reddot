<?php 
    include '../sidebar.php';
?>
<section id="main-content">
    <section class="row wrapper main-wrapper">
        <div class="col-md-12">
            <section class="box mb-5 rounded">
                <h2 class="p-3 text-center text-danger">Deleted Donors</h2>
                <?php
                    if(isset($_GET['restore'])){
						if($_GET['restore'] == 'success'){
							echo '<div class="m-4 alert alert-success">Donor restored successfully</div>';
						}
					}
                ?>
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
                        <?php $donor->deletedDonors($conn) ?>
                    </tbody>
                </table>
            </section>
        </div>
    </section>
</section>
<?php
    include '../bottomIncludes.php';
?>