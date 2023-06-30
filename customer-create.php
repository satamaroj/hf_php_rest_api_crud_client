<?php
session_start();
?>

<?php include('includes/header.php'); ?>

  <div class="container mt-5">

        <?php include('message.php'); ?>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Add Customer
                        <a href="index.php" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="code.php" method="POST">

                        <div class="mb-3">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control">
                        </div>
                        <div class="mb-3">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control">
                        </div>
                        <div class="mb-3">
                        <label>Phone</label>
                        <input type="text" name="phone" class="form-control">
                        </div>
                        <div class="mb-3">
                            <button type="submit" name="save_customer" class="btn btn-primary">Save Customer</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
  </div>

  <?php include('includes/footer.php'); ?>