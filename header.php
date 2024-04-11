<body>
  <header id="header">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <!-- <h1><a href="index.html"><span>.</span>Solution<span>.</span>Planets</a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <h1><a href="index.html"><img src="assets/img/sp-logo.png" alt="" class="img-fluid"> Solution Planets</a></h1>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link <?php if($page=='home'){echo 'active';}?>" href="index">Home</a></li>
          <li><a class="nav-link <?php if($page=='about'){echo 'active';}?>" href="about">About</a></li>
          <li><a class="nav-link <?php if($page=='services'){echo 'active';}?>" href="services">Services</a></li>
          <li><a class="nav-link <?php if($page=='products'){echo 'active';}?>" href="products">Products</a></li>          
          <li><a class="nav-link <?php if($page=='portfolio'){echo 'active';}?>" href="portfolio">Portfolio</a></li>
          <li><a class="nav-link <?php if($page=='ecom'){echo 'active';}?>" href="ecom">eCommerce</a></li>       
          <li><a class="nav-link <?php if($page=='blog'){echo 'active';}?>" href="blog">Blog</a></li>
          <!-- <li><a class="nav-link scrollto" href="#team">Career</a></li> -->
          <!-- <li><a class="nav-link scrollto" href="#">Portfolio</a></li> -->
          
          <li><a class="getstarted" href="#footer">Contact US</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>