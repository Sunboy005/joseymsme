<body>
    <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

    <h1 class="logo me-auto"><a href="index.html">MSME</a><span class="logo-span">by Josey</span></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link" href="index.php">Home</a></li>
          <li class="dropdown"><a href="#"><span>Resources</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          
            <?php 
                if(isset($_SESSION['id'])){?>               
                <li><a class="nav-link" href="notification.php">My Requests</a></li>
            <?php }else{ ?>
                <li><a class="nav-link" href="about.php">About Us</a></li>

            <?php }?>
            <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
            <?php if(isset($_SESSION['id'])){?>               
            <li><a  href="includes/pages/general/logout.php"  class="getstarted btn-danger" >Logout</a></li>
            <?php }else{ ?>
                <li><button class="getstarted" style="background:#37517e"  data-toggle="modal" data-target="#loginModal">Login</button></li>
            <?php }?>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  
