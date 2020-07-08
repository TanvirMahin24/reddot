<?php 
    include '../sidebar.php';
?>
<section id="main-content">
    <section class="row wrapper main-wrapper">
        <div class="col-md-12">
            <section class="box mb-5 rounded">
                <h2 class="p-3 text-center">All Donors</h2>
                <?php
                    if(isset($_GET['deleted'])){
						if($_GET['deleted'] == 'success'){
							echo '<div class="mx-4 my-2 alert alert-success">Donor Deleted successfully</div>';
                        }
                    }
                ?>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Group</th>
                            <th scope="col">Count</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $donor->allDonors($conn) ?>
                    </tbody>
                </table>
            </section>
        </div>
    </section>
</section>
<?php
    include '../bottomIncludes.php';
?>