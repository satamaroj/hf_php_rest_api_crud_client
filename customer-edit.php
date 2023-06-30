<?php
session_start();
require 'dbcon.php';
?>

<?php include('includes/header.php'); ?>

  <div class="container mt-5">

        <?php include('message.php'); ?>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Edit Customer
                        <a href="index.php" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">

                    <?php
                    if(isset($_GET['id']))
                    {
                        $customer_id = mysqli_real_escape_string($con, $_GET['id']);
                        $query = "SELECT * FROM customers__hf WHERE id='$customer_id' ";
                        $query_run = mysqli_query($con, $query);

                        if(mysqli_num_rows($query_run) > 0)
                        {
                            $customer = mysqli_fetch_array($query_run);
                            ?>
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="customer_id" value="<?= $customer['id']; ?>">

                                <div class="mb-3">
                                <label>Name</label>
                                <input type="text" name="name" value="<?=$customer['name'];?>" class="form-control">
                                </div>
                                <div class="mb-3">
                                <label>Email</label>
                                <input type="email" name="email"  value="<?=$customer['email'];?>"class="form-control">
                                </div>
                                <div class="mb-3">
                                <label>Phone</label>
                                <input type="text" name="phone"  value="<?=$customer['phone'];?>"class="form-control">
                                </div>
                                <div class="mb-3">
                                    <button type="submit" name="update_customer" class="btn btn-primary">Update Customer</button>
                                </div>

                                </form>
                            <?php
                        }
                        else
                        {
                            echo "<h4>No Such Id Found</h4>";
                        }
                    }
                    ?>

                    
                </div>
            </div>
        </div>
    </div>
  </div>

  <?php include('includes/footer.php'); ?>