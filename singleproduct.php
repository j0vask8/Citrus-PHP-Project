<!doctype html>
<html lang="en">
  <head>
	<?php include("Connection.php") ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/logo.ico">

    <title>Single Product | Citrus</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/album/">

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/comments.css" rel="stylesheet">
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
            <?php
            if(isset($_SESSION['role'])){
                echo '<a href="login.php"><button type="button" class="btn btn-dark">Login</button></a>';
            }else{
                echo '<a href="admin.php"><button type="button" class="btn btn-dark">Admin Panel</button></a>';
                echo '<a href="logout.php"><button type="button" class="btn btn-dark">Logout</button></a>';
            }
            ?>
        </div>
      </div>
    </header>

    <main role="main">


      <div class="album py-5 bg-light">
	  
        <div class="container">

          <div class="row">
		  <?php
		  $product = $_GET["value"];
		  $sqlProducts = "SELECT * FROM products
				  WHERE product_id = $product";
		  $result = $conn->query($sqlProducts);
		  // var_dump($result);
		  while($row = $result->fetch_assoc()) { ?>
<!--              <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">-->
<!--                  <div class="col-md-6 px-0">-->
<!--                      <h1 class="display-4 font-italic">--><?//= $row["product_title"] ?><!--</h1>-->
<!--                      <p class="lead my-3">--><?//= $row['product_description'] ?><!--</p>-->
<!--                      <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>-->
<!--                  </div>-->
<!--              </div>-->

			<div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="images/<?= $row['image'] ?>" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
                <div class="card-body">
				  <h3><?= $row["product_title"] ?></h3>
                  <p class="card-text"><?= $row['product_description'] ?></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <big><?= $row['price'] ?>$</big>
                      <button type="button" class="btn btn-primary">Add to card</button>
                  </div>
                </div>
              </div>
            </div>
			
		  <?php } ?>
            
          </div>
		  <div class="comment-container theme--light">
  <div class="comments" >
      <?php include "comment.php"?>
    <div class="card v-card v-sheet theme--light elevation-2" ><span class="headline" >Leave a comment</span>
      <div class="sign-in-wrapper" >
          <form action="<?=$_SERVER['PHP_SELF']?>?value=1" method="post">
              <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="email" name="tbEmail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
              </div>
              <div class="form-group">
                  <label for="exampleInputPassword1">Name</label>
                  <input type="text" name="tbName" class="form-control" id="exampleInputPassword1" >
              </div>
              <div class="form-group">
                  <label for="exampleFormControlTextarea1">Comment</label>
                  <textarea class="form-control" name="taComment" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
              <input type="submit" name="btnSubmit" class="btn btn-primary" value="Post Comment!"/>
<!--              <button type="submit" name="btnSubmit " class="btn btn-primary">Submit</button>-->
          </form>
        <p class="error-message" ></p>
      </div>
      <!---->
    </div>
	<?php
		  $sql = "SELECT * FROM comments c 
                    JOIN products p ON c.product_id = p.product_id
                    WHERE c.product_id = $product AND approved = 'Y'";
		  $result = $conn->query($sql);
//          var_dump($result);

		  while($row = $result->fetch_assoc()) { ?>
    <div  >
      <div  class="card v-card v-sheet theme--light elevation-2">
        <div  class="header">
          <span  class="displayName title"> <?= $row["name"] ?> </span> <span  class="displayName caption"><?= $row["email"] ?></span></div>
        <!---->
        <div  class="wrapper comment"></br>
          <p> <?= $row["comment_text"] ?> </p>
        </div>
        <div  class="actions">
          <!---->
          <!---->
          <!---->
        </div>
        <div  class="v-dialog__container" style="display: block;"></div>
      </div>
      <!---->
      <div  class="answers">
        <!---->
      </div>
    </div>
	<?php }
    $conn -> close()?>
  </div>
</div>
		  
        </div>
      </div>
	  

    </main>

    <footer class="text-muted navbar navbar-dark bg-dark box-shadow">
      <div class="container">
        <p class="float-right">
          <a href="#">Back to top</a>
        </p>
        
      </div>
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
