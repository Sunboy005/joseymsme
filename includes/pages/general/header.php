<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

    <h1 class="logo me-auto"><a href="index.php">MSME</a><span class="logo-span">by Josey</span></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      <nav id="navbar" class="navbar">
        <ul>
                       
          <li><a class="nav-link" href="index.php">Home</a></li>
          <li><a class="nav-link" href="about.php">About Us</a></li>
          <?php if(isset($_SESSION['user'])){?>
                <li class="dropdown"><a class="nav-link" href="#"><span>Resources</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <?php 
                        $query ="SELECT * FROM category";
                        $stmt2 = $conn->prepare($query);
                        $stmt2->execute();
                        $res=$stmt2->get_result();
                        while($rowd=$res->fetch_object())
                        {
                        ?>
                    <li><a class="nav-link" href="category.php?id=<?php echo $rowd->category_id;?>"><?php echo $rowd->name;?></a></li>
                    <?php } ?>
                    </ul>
                </li> 
                <?php if ($mydesignation=='admin'){?>
                <li class="dropdown"><a class="nav-link" href="#"><span>Admin Actions</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a class="nav-link" href="addresources.php">Manage Resources</a></li>
                        <li><a class="nav-link" href="addtemplates.php">Manage Templates</a></li>
                    </ul>
                </li>  
                <?php } else{?>
                <li class="dropdown"><a class="nav-link" href="#"><span>Tools</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a class="nav-link" href="taxcalculator.php">Tax Calculator</a></li>
                        <li><a class="nav-link" href="tools.php">Templates</a></li>
                    </ul>
                </li>                
            <?php }?>
          <li><a class="nav-link" href="researches.php">Researches</a></li>          
          <li><a class="nav-link" href="contact.php">Contact Us</a></li>
         <?php 
          if(isset($_SESSION['user'])){?>               
            <li><a  href="includes/pages/general/logout.php"  class="getstarted btn-danger" >Logout</a></li>
            <?php }else{ ?>
                <li><button class="getstarted" style="background:#37517e;"  data-toggle="modal" data-target="#loginModal">Login</button></li>
            <?php }
            }?>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
