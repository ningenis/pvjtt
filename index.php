<!DOCTYPE HTML>

<html ng-app = "myApp">    
<head> 
    
    <meta charset="UTF-8">
    
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>  
    <script type="text/javascript" src="js/angular.min.js"></script>
    <script type="text/javascript" src="js/angular-route.js"></script>
    <script type="text/javascript" src="js/ui-bootstrap-tpls-0.14.3.min.js"></script>
    
    <script type="text/javascript" src="js/app.js"></script>
    <script type="text/javascript" src="js/tourPackage.js"></script>
    <script type="text/javascript" src="js/tabManager.js"></script>
    <script type="text/javascript" src="js/PackageDetail.js"></script>
    <script type="text/javascript" src="js/dashboard.js"></script>    
    <!--<link href="css/navbar-fixed-top.css" rel="stylesheet">-->
    
    <link rel="stylesheet" href="css/bootstrap.min.css" />    
    <link rel="stylesheet" href="css/custom.css"/>

    
    

    
    
    
	<title>Paris van Java Tour &amp; Travel</title>
</head>

<body ng-controller="PackageController"> 
    
    <div class="top-image">
        <img src="" alt="top image">
        
    </div>
    
    <nav class="navbar">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="#/">Home<span class="sr-only">(current)</span></a></li>
        <li><a href="#/AboutUs">About Us</a></li>
        <li class="dropdown">
          <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Inbound Packages <span class="caret"></span></a>
          <ul class="dropdown-menu">
              <div class="dropdown-item" ng-repeat='product in products | limitTo:3'>
              <li><a href="#/Package/{{product.id}}">{{product.name}}</a></li> 
              </div>
                         
          </ul>
        </li>
        <li class="dropdown">
          <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Outbound Packages <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#/Package">Other package</a></li>
            <li><a href="#/Package">Other package</a></li>
          </ul>
        </li>
        <li><a href="#">News &amp; Media</a></li>        
        <li><a href="#">FAQ</a></li>
        <li><a href="#/ContactUs">Contact Us</a></li>
      </ul>
        
    
      
        
    
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#/Dashboard">Dashboard</a></li>
        <li><a href="#/Login">Sign In</a></li>
        <li class="dropdown">
          <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">English<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="">Indonesian</a></li>
            <li><a href="">English</a></li>
          </ul>
        </li>
      </ul>
        
    <form class="navbar-form navbar-right" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Search</button>
      </form>    
        
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
    
        <div ng-view></div>
  
    
    
        <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 contact">
                    <p>Paris van Java Tour &amp; Travel</p>
                    <p>Jalan Setrasari Kulon No. 32</p>
                    <p>Sukasari bandung 40152</p>
                    <p>West Java - Indonesia</p>
                    
                      
    
                </div>
                <div class="col-md-1">
                    Site Map                    
                </div>
                <div class="col-md-2">
                    <ul>
                        <li><a href='#/CompanyProfile'></a>About Us</li>
                        <li><a href='#/Package'></a>Packages</li>
                        <li><a href='#'></a>Reservation</li>
                        <li><a href='#'></a>Contact</li>
                        <li><a href='#'></a>FAQ</li>
                    </ul>
                   
                </div>
          </div>
        
      </div>
    </footer>
    
    <p class="copyright">Copyright Paris van Java Tour &amp; Travel 2015.</p>
    
    
    
    
    
	
    

</body>
</html>