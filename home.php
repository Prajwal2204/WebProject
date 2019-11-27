<?php
    session_start();
    require "header.php";
    if(!isset($_SESSION['username'])){
        header("Location:/web_tech/login.html");
        exit();
    }
    
?>
<style>
      .foot{
          padding-top: 4%;
      } 

</style>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container"> 
  <h2><b align = 'auto' ><?php echo "<p  style = 'color:#50394c;font-size:30px;'>WELCOME ".strtoupper($_SESSION['username'])."</p>" ?></b></h2>  
  <div id="myCarousel" class="carousel slide"  data-ride="carousel">

    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>


    <div class="carousel-inner" >
      <div class="item active">
        <img src="img/card.jpeg" alt="card" style="width:100%;height:600px">
      </div>

      <div class="item">
        <img src="img/money.jpeg" alt="money" style="width:100%;height:600px">
      </div>
    
      <div class="item">
        <img src="img/stock.jpeg" alt="stock" style="width:100%;height:600px">
      </div>
    </div>

    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<div align="right" class="foot">
        <h4>In case of any trouble, feel free to contact us:</h4>
        <h4>Call us: +91 987654321</h4>
        <h4>Mail us:<a href ="mailto:pesubank@gmail.com">pesubank@gmail.com</a></h4>
    </div>

</body>
</html>




