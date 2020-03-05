<?php
session_start();
include "Connection.php";
//var_dump($_SESSION['role']);
if(isset($_SESSION['role'])){
    if($_SESSION['role'] == 'admin')
    header("Location: /citrus/admin.php");
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/logo.ico">

    <title>Album example for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/album/">

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="album.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
<header>
    <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-7 py-4">
                    <h4 class="text-white">About</h4>
                    <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
                </div>
                <div class="col-sm-4 offset-md-1 py-4">
                    <h4 class="text-white">Contact</h4>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white">Follow on Twitter</a></li>
                        <li><a href="#" class="text-white">Like on Facebook</a></li>
                        <li><a href="#" class="text-white">Email me</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex justify-content-between">
            <a href="index.php" class="navbar-brand d-flex align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg>
                <strong>Citrus</strong>
            </a>
        </div>
    </div>
</header>

<main role="main">
    <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post"></br>

        <div class="container">
            <label for="name"><b>Email</b></label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email" name="email" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password" name="psw" required>

            </br>
            <button type="submit" class="btn btn-primary" name="btnSubmit">Login</button></br>
            <?php
            if(isset($_REQUEST['btnSubmit'])){

                $email = $_POST['email'];
                $password = $_POST['psw'];
                $sql = "SELECT * FROM users u
                    JOIN roles r ON u.role_id = u.role_id
                    WHERE email = '$email' AND password = sha1($password)";
//                    WHERE email = '$email' AND password = '$password'";
                $result = $conn->query($sql);
                if($result == null){
                    echo "no user";
                }else {
                    $data = mysqli_fetch_array($result);

                    if ($data != null) {
                        $_SESSION['role'] = $data['role'];
                        $_SESSION['username'] = $data['username'];
                        header("Location: /citrus/admin.php");
                    } else {
                        echo '</br><div class="alert alert-danger" role="alert">
                      Invalid username/password!
                    </div>';
                    }
                }
            }
            ?>
        </div>

<!--        <div class="container" style="background-color:#f1f1f1">-->
<!--            <button type="button" class="cancelbtn">Cancel</button>-->
<!--            <span class="psw">Forgot <a href="#">password?</a></span>-->
<!--        </div>-->

    </form>



</main>

<footer class="text-muted">
</footer>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="../../assets/js/vendor/popper.min.js"></script>
<script src="../../dist/js/bootstrap.min.js"></script>
<script src="../../assets/js/vendor/holder.min.js"></script>
</body>
</html>
