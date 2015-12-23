<!DOCTYPE html>

<html>

<head>
	
	<link rel="stylesheet" type="text/css" href="http://localhost/pvj/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/pvj/css/pvj.css">
	<script src="http://localhost/pvj/js/jquery-2.1.4.min.js"></script>
	<script src="http://localhost/pvj/js/bootstrap.min.js"></script>

</head>

<body>

<nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/pvj">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="about">About Us <span class="sr-only">(current)</span></a></li>        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Inbound Tour<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="package">Package A</a></li>
          </ul>
        </li>
        <li><a href="#">Custom Reservation</a></li>
        <li><a href="contact">Contact Us</a></li>
      </ul>      
      <ul class="nav navbar-nav navbar-right">
      	<li><a href="dashboard">Dashboard</a></li>
        <li><a href="#">Sign In</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">EN<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">EN</a></li>
            <li><a href="#">ID</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-right" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Go</button>
      </form>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>