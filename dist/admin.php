<?php
session_start();
include "../Connection.php";
if(!isset($_SESSION['role'])){
       return header("Location: ../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Admin Panel</title>
        <link rel="icon" href="../images/logo.ico">
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="admin.php">Start Bootstrap</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button
            ><!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="../logout.php">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="admin.php"
                                ><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Comment Approvals</a
                            >
                            <a class="nav-link" href="../index.php"
                                ><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Back to site</a
                            >
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        <?= $_SESSION['username'] ?>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">All Comments</h1></br>
                        <div class="card mb-4">
                            <?php

                                if(isset($_REQUEST['btnApprove'])){
                                    $comment = $_POST['comment'];
//                                    var_dump($comment);
                                    $sqlUpdate = " UPDATE comments 
                                                    SET approved='Y' 
                                                    WHERE comment_id = $comment";
                                    $conn->query($sqlUpdate);

                                    echo '<div class="alert alert-success" role="alert">
                                        You have approved the comment!
                                    </div>';
                                }

                                if(isset($_REQUEST['btnDelete'])){
                                    $comment1 = $_POST['comment'];
//                                    var_dump($comment);
                                    $sqlDelete = "DELETE FROM comments 
                                                    WHERE comment_id = $comment1";
                                    $result = $conn->query($sqlDelete);
                                    if($result != false){
                                        echo '<div class="alert alert-success" role="alert">
                                            You have Deleted the comment!
                                        </div>';
                                    }
                                }
                            ?>
                            <div class="card-body">
                                <?php
                                if (isset($_GET['pageno'])) {
                                    $pageno = $_GET['pageno'];
                                } else {
                                    $pageno = 1;
                                }

                                $no_of_records_per_page = 6;
                                $offset = ($pageno-1) * $no_of_records_per_page;

                                $total_pages_sql = "SELECT COUNT(*) FROM comments WHERE approved='N'";
                                $result = mysqli_query($conn,$total_pages_sql);
                                $total_rows = mysqli_fetch_array($result)[0];
                                $total_pages = ceil($total_rows / $no_of_records_per_page);

                                $sql = "SELECT * FROM comments c JOIN products p ON c.product_id = p.product_id WHERE approved='N' ORDER BY c.created_at DESC LIMIT  $offset, $no_of_records_per_page";
                                //                                    var_dump($page);
                                $res_data = mysqli_query($conn,$sql);
                                while($row = mysqli_fetch_array($res_data)){ ?>
<!--                                            <div class="panel-heading">-->
<!--                                                <span class="glyphicon glyphicon-comment"></span>-->
<!--                                                <h3 class="panel-title">Recent Comments</h3>-->
<!--                                                <span class="label label-info">78</span>-->
<!--                                            </div>-->
                                <div class="panel panel-default widget">
                                            <div class="panel-body">
                                                <ul class="list-group">
                                                    <li class="list-group-item">
                                                        <div class="row">

                                                            <div class="col-xs-10 col-md-11">
                                                                <div>
                                                                    <div class="mic-info"> <big> <?=$row['product_title'] . " /  " . $row['name'] ?> /</big>  <?=$row['created_at'] ?> </div>
                                                                </div>
                                                                <div class="comment-text">
                                                                     <?= $row['comment_text'] ?>
                                                               </div>
                                                                <div class="action">
                                                                    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                                                                        <input type="submit" name="btnApprove" class="btn btn-success btn-xs" title="Approve Comment" value="Approve Comment!">
                                                                        <input type="submit" name="btnDelete" class="btn btn-danger btn-xs" title="Delete Comment" value="Delete Comment!">
                                                                        <input type="hidden" name="comment" value="<?= $row['comment_id'] ?>"/>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                </div>

                               <?php } ?>

                                <ul class="pagination">
                                    <li><a href="?pageno=1"> First</a></li>
                                    <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
                                        <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>"> Prev </a>
                                    </li>
                                    <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
                                        <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>"> Next </a>
                                    </li>
                                    <li><a href="?pageno=<?php echo $total_pages; ?>">Last</a></li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>
</html>
