<?php
function headers(){
echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DPanel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" />
    <link rel="stylesheet" href="assets/vendor/bootstrap.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
    
    <link rel="stylesheet" href="assets/css/-variables.css">
    <link rel="stylesheet" href="assets/css/-global.css">
    <link rel="stylesheet" href="assets/css/dpanel.css">
    <link rel="stylesheet" href="assets/css/main.css">
        
</head>
<body>
            <div class="conatainer">
              <div class="Main-navigation w-100  m-0 p-0 " style="z-index: 1000; ">
                <div class="w-100 m-0 p-0 ">
                  <header id="header" class="header dpanel-header d-flex align-items-center">
                    <div class="container d-flex align-items-center justify-content-between">
                
                      <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
                        <!-- Uncomment the line below if you also wish to use an image logo -->
                        <!-- <img src="assets/img/logo.png" alt=""> -->
                        <h1>Dpanel<span style="color: var(--first-color-lighter) !important;">.</span></h1>
                      </a>
                
                      <nav id="navbar" class="navbar">
                        <button class="btn txt-clr me-1" id="menu-toggle"> <i class="fas fa-arrow-left"></i></button>
                        <ul>
                          <li><a href="index.html">Home</a></li>
                          <li><a href="#about">About</a></li>
                          <li><a href="#menu">Menu</a></li>
                          <li><a href="DPanel-main/index.html">Admin Panel</a></li>
                          <li><a href="#chefs">Chefs</a></li>
                          <li><a href="#gallery">Gallery</a></li>
                          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                            <ul>
                              <li><a href="#">Drop Down 1</a></li>
                              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
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
                          <li><a href="#contact">Contact</a></li>
                        </ul>
                      </nav><!-- .navbar -->
                
                      
                      <i class="mobile-nav-toggle mobile-nav-show fas fa-list-alt"></i>
                      <i class="mobile-nav-toggle mobile-nav-hide me-5 mt-3 d-none fas fa-list"></i>
                
                    </div>
                     <!-- left navbar -->
                   <nav>
                    <ul class=" d-flex-center dpanel-nav-right">
                      <li class="nav-item search-btn">  <a href="" class="nav-link"><i class="fas fa-search"></i></a></li>
                      <li class="dropdown" data-dropdown="#color-gallery">
                      <a type="button" class="position-relative nav-link">
                              <i class="fas fa-tint"></i>
                      <span class="position-absolute top-1  start-100 translate-middle p-1 bg-danger border border-light rounded-circle"></span>
                          </a>
                          <div class="dropdown-menu" id="color-gallery">
                              <a class="dropdown-item color-item dark"  data-color-sts = "dark" data-color="340 100% 53%"; data-hsl="340" style="--clr:hsl(340 100% 50%);" href="#"></a>
                              
                              <a class="dropdown-item color-item" data-color="230"
                              style="--clr:hsl(230 69% 61%);" href="#"></a>
                              
                              <a class="dropdown-item color-item " data-color-sts = "light" data-color="142"; style="--clr:hsl(142 69% 61%);" href="#"></a>
                              
                          </div>
                      </li>
                      <li class="nav-item"><button type="button" class="btn btn-sm txt-clr position-relative">
                          <i class="fas fa-envelope"></i>
                          <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            99+
                            
                          </span>
                        </button>
                      </li>
                      <li class="nav-item"><a href="" class="nav-link active text-capitalize">admin</a></li>
                      <li class="nav-item">
                          <a href="" class="nav-link active d-flex">
                          
                              <img src="../assets/img/user1-128x128.jpg" width="30px" height="30px" style="border-radius: 50%;" alt="">
                          </a>
                          </li>
                      <li class="nav-item"><a href="" class="nav-link  active"><i class="fas fa-sign-out-alt"></i></a></li>
                              
                  </ul>
                  </nav> 
                 
                  </header><!-- End Header -->
                
                 
                  <form action="" id="search-form" method="post">
                      <div class="form-group d-flex">
                          <input type="search" name="" placeholder="search" class="form-control" id="">
                          <button type="submit" class="btn dpanel-btn-alt">submit</button>
                      </div>
                      
                      <button type="button" class="btn btn-close"> X</button>
                  </form>
                </div>
              
                  <aside class="dpanel-sidebar">
                  
                    
                    <ul class=nav mt-4 ">
                        
    
                        <li class="sidebar-item active">
                            <a href="" class=""><img src="../assets/img/user1-128x128.jpg" width="30px" height="30px" style="border-radius: 50%;" alt=""></a>
                            
                            <span class="">ahmer</span>     
                            <span class="btn ms-auto  "> <b class ="fas fa-sign-out-alt"></b></span>
                        </li>
                        <li class="sidebar-item ">
                            
                            <a href="" class=""><i class="fas fa-map-marked"></i></a>
                            <span class="">dashboard</span>     
                        </li>
                        <li class="dropdown sidebar-item  w-100">
                          
                          <a href="" class=""><i class="fas fa-map-marked"></i></a>
                          <span class="">Layout</span>     
                          <ul class="w-100 " style="left: 0 !important;">
                            <li></li>
                            <li><a href="charts.html" class="bg-danger">Charts</a></li>
                            <li class="dropdown"><a href="Tabel.html"><span>Tables</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                              <ul class="float-end" >

                                <li><a href="cards.html">cards</a></li>
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
                        
                    </ul>
                </aside>
              </div>
                  <main class="dpanel-content  ">
                              <div class="content-header">
                                  <div class="container-fluid">
                                    <div class="row ">
                                      <div class="col-sm-6 d-flex-center ">
                                          <div class="dpanel-headings me-auto ms-3">
                  
                                              <h1 class=" dpanel-title">Dashboard</h1>
                                              <h6 class="dpanel-subtitle">ALl found</h6>
                                          </div>
                                      </div><!-- /.col -->
                                      <div class="col-sm-4 me-auto  offset-2 d-flex-center">
                                        <ol class="breadcrumb ">
                                          <li class="breadcrumb-item"><a href="#">Admin</a></li>
                                          <li class="breadcrumb-item active">Dashboard</li>
                                        </ol>
                                      </div><!-- /.col -->
                                    </div><!-- /.row -->
                                  </div><!-- /.container-fluid -->
                          </div>
                                  <section class="dpanel-body">
                                   ';
}

function footers(){
    echo '
                                   
    </section>
    <div href="#" class="scroll-top d-flex align-items-center  justify-content-center">
      <i class="fas fa-arrow-up"></i></div>         
</main>


</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.3.0/chart.min.js" ></script>
<script src="../assets/js/dpanel.js"></script>
<script src="../assets/js/main.js"></script>
</body>
</html>';
}