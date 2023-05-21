<?php
session_start();
if (isset($_SESSION['email']) && isset($_SESSION['status'])) {
    header('Location: ../pages/dashboard.php');
}
?>
<?php $title = "Login Page";
include('../components/header.php'); ?>
<div class="dt-login-canvas d-flex justify-content-center align-items-center">

    <div class="card w-100">
        <div class="card-body">
            <?php
            if (isset($_GET['error']) && $_GET['error'] == 1) {
                ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Please ensure that you have entered the correct email and password.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php
            }
            ?>
            <form action="../logics/login.php" method="post">
                <div class="form-floating mb-3">
                    <input name="email" type="email" class="form-control" id="floatingEmail"
                        placeholder="name@example.com">
                    <label for="floatingEmail">Email address</label>
                </div>
                <div class="form-floating mb-3">
                    <input name="password" type="password" class="form-control" id="floatingPassword"
                        placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>
                <input name="login" type="submit" class="btn btn-primary w-100" value="Login">
            </form>
        </div>
    </div>

</div>
<?php include('../components/footer.php'); ?>