<?php
session_start();
$dbCon = mysqli_connect("localhost", "lerdgreene", "", "c9") or die(mysqli_error());
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="keywords" content="footer, address, phone, icons" />
  <link rel ="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/icons.less">
  <link rel="stylesheet" href="css/bootstrap-social.css">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <title>Marketing Website</title>
</head>
<body>
<!--Nav-->
  <nav class="navbar navbar-inverse navbar-default navbar-custom">
  <div class="container-fluid">
<!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Stranded</a>
    </div>
<!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a class="nav-a" href="index.php">Home</a></li>
        <li><a class="nav-a" href="about.html">About</a></li>
        <li><a class="nav-a" href="products.php">Products</a></li>
        <li><a class="nav-a" href="contact.html">Contact</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
  </nav>
<!--End Nav-->
<!--Jumbo-->
  <div class="jumbotron">
  </div>
<!--End Jumbo-->
<!--Content-->
    <div class="content">
    <div class="container">
      <h2 id="h2-sponser">Sponsered products you might like</h2>
    <?php
      $query = "SELECT * FROM tbl_product ORDER BY id ASC";
      $result = mysqli_query($dbCon, $query);
      if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
    ?>
      <div class="col-md-3">
        <form method="post" action="shop.php?action=add&id=<?php echo $row["id"]; ?>">
          <div class="hold">
            <img class="img-responsive item" src="<?php echo $row["image"]; ?>">
            <h5 class="text-info"><?php echo $row["name"]; ?></h5>
            <h5 class="text-danger">$<?php echo $row["price"]; ?></h5>
            <input type="text" name="quantity" class="form-control" value="1">
            <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>">
            <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
            <input type="submit" name="add" style="margin-top:5px;" class="btn btn-default" value="Add to Bag">
          </div>
        </form>
      </div>
    <?php
        }
      }
    ?>
    <div style="clear:both" class="hold">
      <h2 id= "h2-sponser">Top Mixtapes</h2>
        <?php
      $query = "SELECT * FROM tbl_product ORDER BY id ASC";
      $result = mysqli_query($dbCon, $query);
      if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
    ?>
        <div class="col-md-3">
            <form method="post" action="shop.php?action=add&id=<?php echo $row["id"]; ?>">
                <div class="hold">
                    <img class="img-responsive item" src="<?php echo $row["image"]; ?>">
                    <h5 class="text-info"><?php echo $row["name"]; ?></h5>
                    <h5 class="text-danger">$<?php echo $row["price"]; ?></h5>
                    <input type="text" name="quantity" class="form-control" value="1">
                    <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>">
                    <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
                    <input type="submit" name="add" style="margin-top:5px;" class="btn btn-default" value="Add to Bag">
                </div>
            </form>
        </div>
        <?php
            }
        }
        ?>
        </div>
    </div>
  </div>
<!--End Content-->
<!--Footer-->
  <footer class="footer-distributed">
		<div class="footer-left">
			<img class="img-responsive item" src="img/stranded-logo.png" alt="Stranded Company">
			<p class="footer-links">
			<a href="index.php">Home</a>
				·
			<a href="about.html">About</a>
				·
			<a href="products.php">Products</a>
				·
			<a href="contact.html">Contact</a>
			</p>
			<p class="footer-brand">Stranded &copy; 2017</p>
		</div>
		<div class="footer-center">
			<div>
				<i class="fa fa-map-marker"></i>
				<p><span>123 Middle Street</span> Nashville, Tennessee</p>
			</div>
		  <div>
				<i class="fa fa-phone"></i>
				<p>+1 615 320-4567</p>
		  </div>
		  <div>
			<i class="fa fa-envelope"></i>
			<p><a href="mailto:support@company.com">support@strandedco.com</a></p>
		  </div>
		</div>
		<div class="footer-right">
			<p class="footer-company-about">
			<span>About the company</span>
			Stranded Company is a mixtape company that sells mashups of songs of all generations. This company and this website are all for educational purposes and actually sells nothing.
		  </p>
		<div class="footer-icons">
			<a href="#"><i class="fa fa-facebook"></i></a>
			<a href="#"><i class="fa fa-twitter"></i></a>
			<a href="#"><i class="fa fa-linkedin"></i></a>
			<a href="#"><i class="fa fa-github"></i></a>
		</div>
		</div>
	</footer>
<!--End Footer-->
<!--JS-->
  <script src="js/bootstrap.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!--End JS-->
</body>
</html>