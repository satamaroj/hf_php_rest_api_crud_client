<?php
session_start();
require 'dbcon.php';
?>

<?php include('includes/header.php'); ?>

  <div class="container" mt-4>

    <?php include('message.php'); ?>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Customer Details
                        <a href="customer-create.php" class="btn btn-primary float-end">Add Customer</a>
                    </h4>
                </div>
                <div class="card-body">

                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $query = "SELECT * FROM customers__hf";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                foreach($query_run as $customer)
                                {
                                    
                                    ?>
                                        <tr>
                                            <td><?= $customer['id']; ?></td>
                                            <td><?= $customer['name']; ?></td>
                                            <td><?= $customer['email']; ?></td>
                                            <td><?= $customer['phone']; ?></td>
                                            <td>
                                                <a href="customer-view.php?id=<?= $customer['id']; ?>" class="btn btn-info btn-sm">View</a>
                                                <a href="customer-edit.php?id=<?= $customer['id']; ?>" class="btn btn-success btn-sm">Edit</a>                                                
                                                <form action="code.php" method="POST" class="d-inline">
                                                <button type="submit" name="delete_customer" value="<?= $customer['id']; ?>" class="btn btn-danger btn-sm">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php
                                }
                            }
                            else
                            {
                                echo "<h5> No Record Found </h5>";
                            }
                        ?>
                      
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
  </div>

  <?php include('includes/footer.php'); ?>
  