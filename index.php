<html >
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Welcome to The Together</title>

  <!-- Bootstrap core CSS -->
  <link href="assets/css/bootstrap.css" rel="stylesheet">

  <!-- Custom styles for this template -->
 <link href="assets/css/together.css" rel="stylesheet"></head> -->

<body>
  <div class="navbar navbar-fixed-top ">
    <div class="container">
      <div class="form-inline">

        <!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
        <button type="button"  class="navbar-toggle " data-toggle="collapse" data-target=".navbar-responsive-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>

        </button>

        <!-- Be sure to leave the brand out there if you want it shown -->
        <a class="navbar-brand" href="#">Together</a>

        <!-- Place everything within .navbar-collapse to hide it until above 768px -->
        <div class="nav-collapse collapse navbar-responsive-collapse">
          <form  action="login.php" method="post" class="navbar-form  pull-right">

            <input type="text" name="email" value="@ust.hk" class="form-control" placeholder="@mail.com"/>
            <input type="password" name="password" value=""  class="form-control" placeholder="Password"/>

           <!--  <input type="text" placeholder="ITSC Address"name="email" class="form-control"value="<?php echo $submitted_username; ?>
            "/> -->
            <!-- <input type="password" name="password" placeholder="Password" class="form-control" value="" />
 -->
            <input class="btn btn-default" type="submit" value="Log In"/>

          </form>

        </div>
      </div>
    </div>
    <!-- /.nav-collapse --> </div>
  <!-- /.container -->
  <!-- /.navbar -->

  <!--<div class="navbar navbar-fixed-top">
  <a class="navbar-brand" href="#">The Together</a>

  <button type="button" class="btn btn-default navbar-btn">Sign in</button>
</div>

<!--==============================content================================-->

<div class="container ">
  <div id="myCarousel" class="carousel slide hidden-sm">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner " >
      <div class="item active ">
        <img  class="img-responsive" src="images/hkust2.jpg"  alt="">
        <div class="container">
          <div class="carousel-caption">
            <h1>Together Us.</h1>
            <p>The First network in HKUST.</p>
            <p>
              <a class="btn btn-large btn-primary" href="register.php">Sign up today</a>
            </p>
          </div>
        </div>
      </div>
      <div class="item">
        <img class="img-responsive"  data-src="holder.js/1500x500/auto/#777:#7a7a7a/text:Second slide" src="images/hkust2.jpg" alt="">
        <div class="container">
          <div class="carousel-caption">
            <h1>Another example headline.</h1>
            <p>
              Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
            </p>
            <p>
              <a class="btn btn-large btn-primary" href="register.php">Sign up today</a>
            </p>
          </div>
        </div>
      </div>
      <div class="item">
        <img class="img-responsive"   src="images/hkust2.jpg" alt="">
        <div class="container">
          <div class="carousel-caption">
            <h1>One more for good measure.</h1>
            <p>
              Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
            </p>
            <p>
              <a class="btn btn-large btn-primary" href="register.php">Sign up today</a>
            </p>
          </div>
        </div>
      </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
  </div>
</div>

<!-- function list -->
<div class="container">
<?php 
 // Connects to  Database 
    $host="localhost";
    $username="root";
    $password="";
    $dbname="together_main";
 // Connects to  Database 
 mysql_connect("$host", "$username", "$password") or die(mysql_error()) ; 
 mysql_select_db("$dbname") or die(mysql_error()) ; 
 
 //Retrieves data from MySQL 
 $data = mysql_query("SELECT * FROM together_group_records") or die(mysql_error()); 
 //Puts it into an array 
 while($info = mysql_fetch_array( $data )) 
 { 
 
 //Outputs the image and other data

 
 
 Echo "<div class='col-lg-3 col-sm-3'>
";
 Echo "
<div class='thumbnail'>
  ";

 Echo "
  <img class='img-responsive'  src=http://placehold.it/225x250 >
  ";
 
 Echo "<br> ";

echo "<a "."href='".$info[group_name]."'>".$info[group_name]."</a>";
echo "<br>";
echo $info[group_admin];
echo "<span></span>";
echo "<br>"; 
echo "Groupmem   ";
echo $info[group_member];
Echo"</div>";

   Echo "</div>";
 }


 ?>


</div>


<!-- /.carousel --==============================footer=================================-->

<!-- <div class="navbar navbar-fixed-bottom">
  
  <footer>
    <p>Together.com &copy; Company 2013</p>
  </footer>
</div> -->

<script src="assets/js/jquery.js"></script>

<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
