<?php
   include_once "database.php";

   session_start();

   if (!isset ($_SESSION['admin_email'])){
    header ("location: nnndex.php");
   } 
   include_once "database.php";
   //requete pour afficher les notre de toutes les utilisateur
   
   $sql = "SELECT COUNT(*) AS nombre_user FROM utilisateur_tab ";

   $resultat = mysqli_query($conn,$sql);
   $row = mysqli_fetch_assoc($resultat);
   $nombre_user = $row ['nombre_user'];


   // requete pour afficher le produit en stock 

   $produit = "SELECT COUNT(*) AS nombre_produit FROM produit_tab";

   $result = mysqli_query($conn,$produit);
   $row = mysqli_fetch_assoc($result);
   $nombre_produit = $row['nombre_produit'];

   //reque pour recuperer le produit en rupture de stock

   $rupture = "SELECT COUNT(*) AS n_rupture FROM produit_tab WHERE quantite <= seuil ";

   $result = mysqli_query($conn,$rupture);
   $row = mysqli_fetch_assoc($result);
   $n_rupture = $row ['n_rupture'];

   ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>General Dashboard &mdash; Stisla</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/modules/fontawesome/css/all.min.css">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="assets/modules/jqvmap/dist/jqvmap.min.css">
  <link rel="stylesheet" href="assets/modules/weather-icon/css/weather-icons.min.css">
  <link rel="stylesheet" href="assets/modules/weather-icon/css/weather-icons-wind.min.css">
  <link rel="stylesheet" href="assets/modules/summernote/summernote-bs4.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="assets/#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="assets/#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
          <div class="search-element">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
            <div class="search-backdrop"></div>
            <div class="search-result">
              <div class="search-header">
                Histories
              </div>
              <div class="search-item">
                <a href="assets/#">How to hack NASA using CSS</a>
                <a href="assets/#" class="search-close"><i class="fas fa-times"></i></a>
              </div>
              <div class="search-item">
                <a href="assets/#">Kodinger.com</a>
                <a href="assets/#" class="search-close"><i class="fas fa-times"></i></a>
              </div>
              <div class="search-item">
                <a href="assets/#">#Stisla</a>
                <a href="assets/#" class="search-close"><i class="fas fa-times"></i></a>
              </div>
              <div class="search-header">
                Result
              </div>
              <div class="search-item">
                <a href="assets/#">
                  <img class="mr-3 rounded" width="30" src="assets/img/products/product-3-50.png" alt="product">
                  oPhone S9 Limited Edition
                </a>
              </div>
              <div class="search-item">
                <a href="assets/#">
                  <img class="mr-3 rounded" width="30" src="assets/img/products/product-2-50.png" alt="product">
                  Drone X2 New Gen-7
                </a>
              </div>
              <div class="search-item">
                <a href="assets/#">
                  <img class="mr-3 rounded" width="30" src="assets/img/products/product-1-50.png" alt="product">
                  Headphone Blitz
                </a>
              </div>
              <div class="search-header">
                Projects
              </div>
              <div class="search-item">
                <a href="assets/#">
                  <div class="search-icon bg-danger text-white mr-3">
                    <i class="fas fa-code"></i>
                  </div>
                  Stisla Admin Template
                </a>
              </div>
              <div class="search-item">
                <a href="assets/#">
                  <div class="search-icon bg-primary text-white mr-3">
                    <i class="fas fa-laptop"></i>
                  </div>
                  Create a new Homepage Design
                </a>
              </div>
            </div>
          </div>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown dropdown-list-toggle"><a href="assets/#" data-toggle="dropdown" class="nav-link nav-link-lg message-toggle beep"><i class="far fa-envelope"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
              <div class="dropdown-header">Messages
                <div class="float-right">
                  <a href="assets/#">Mark All As Read</a>
                </div>
              </div>
              <div class="dropdown-list-content dropdown-list-message">
                <a href="assets/#" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="assets/img/avatar/avatar-1.png" class="rounded-circle">
                    <div class="is-online"></div>
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Kusnaedi</b>
                    <p>Hello, Bro!</p>
                    <div class="time">10 Hours Ago</div>
                  </div>
                </a>
                <a href="assets/#" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="assets/img/avatar/avatar-2.png" class="rounded-circle">
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Dedik Sugiharto</b>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                    <div class="time">12 Hours Ago</div>
                  </div>
                </a>
                <a href="assets/#" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="assets/img/avatar/avatar-3.png" class="rounded-circle">
                    <div class="is-online"></div>
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Agung Ardiansyah</b>
                    <p>Sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <div class="time">12 Hours Ago</div>
                  </div>
                </a>
                <a href="assets/#" class="dropdown-item">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="assets/img/avatar/avatar-4.png" class="rounded-circle">
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Ardian Rahardiansyah</b>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit ess</p>
                    <div class="time">16 Hours Ago</div>
                  </div>
                </a>
                <a href="assets/#" class="dropdown-item">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="assets/img/avatar/avatar-5.png" class="rounded-circle">
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Alfa Zulkarnain</b>
                    <p>Exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                    <div class="time">Yesterday</div>
                  </div>
                </a>
              </div>
              <div class="dropdown-footer text-center">
                <a href="assets/#">View All <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li>
          <li class="dropdown dropdown-list-toggle"><a href="assets/#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep"><i class="far fa-bell"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
              <div class="dropdown-header">Notifications
                <div class="float-right">
                  <a href="assets/#">Mark All As Read</a>
                </div>
              </div>
              <div class="dropdown-list-content dropdown-list-icons">
                <a href="assets/#" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-icon bg-primary text-white">
                    <i class="fas fa-code"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    Template update is available now!
                    <div class="time text-primary">2 Min Ago</div>
                  </div>
                </a>
                <a href="assets/#" class="dropdown-item">
                  <div class="dropdown-item-icon bg-info text-white">
                    <i class="far fa-user"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    <b>You</b> and <b>Dedik Sugiharto</b> are now friends
                    <div class="time">10 Hours Ago</div>
                  </div>
                </a>
                <a href="assets/#" class="dropdown-item">
                  <div class="dropdown-item-icon bg-success text-white">
                    <i class="fas fa-check"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Kusnaedi</b> has moved task <b>Fix bug header</b> to <b>Done</b>
                    <div class="time">12 Hours Ago</div>
                  </div>
                </a>
                <a href="assets/#" class="dropdown-item">
                  <div class="dropdown-item-icon bg-danger text-white">
                    <i class="fas fa-exclamation-triangle"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    Low disk space. Let's clean it!
                    <div class="time">17 Hours Ago</div>
                  </div>
                </a>
                <a href="assets/#" class="dropdown-item">
                  <div class="dropdown-item-icon bg-info text-white">
                    <i class="fas fa-bell"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    Welcome to Stisla template!
                    <div class="time">Yesterday</div>
                  </div>
                </a>
              </div>
              <div class="dropdown-footer text-center">
                <a href="assets/#">View All <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li>
          <li class="dropdown"><a href="assets/#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block"><?php echo $_SESSION['admin_email'] ?> </div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-title">Logged in 5 min ago</div>
              <a href="assets/features-profile.html" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
              </a>
              <a href="assets/features-activities.html" class="dropdown-item has-icon">
                <i class="fas fa-bolt"></i> Activities
              </a>
              <a href="assets/features-settings.html" class="dropdown-item has-icon">
                <i class="fas fa-cog"></i> Settings
              </a>
              <div class="dropdown-divider"></div>
              <a href="assets/#" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="assets/index.html">Stisla</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="assets/index.html">St</a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="dropdown active">
              <a href="assets/#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
              <ul class="dropdown-menu">
                <li class=active><a class="nav-link" href="admin_space.html">General Dashboard</a></li>
               
              </ul>
            </li>
            <li class="menu-header">Starter</li>
            <li class="dropdown">
              <a href="assets/#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Pharmacie</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="assets/pharmacie.php">Produit en stock</a></li>
                <li><a class="nav-link" href="assets/">Produit en rupture </a></li>
               
              </ul>
            </li>
            <li><a class="nav-link" href="utilisateur_add.php"><i class="far fa-square"></i> <span>Utilisateur</span></a></li>
            <li><a class="nav-link" href="analyse.php"><i class="far fa-square"></i> <span>Analyse</span></a></li>
            <li><a class="nav-link" href="assets/configuration_admin.php"><i class="far fa-square"></i> <span>configuration</span></a></li>
            <li class="dropdown">
              <a href="assets/#" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>Bootstrap</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="assets/bootstrap-alert.html">Alert</a></li>
                <li><a class="nav-link" href="assets/bootstrap-badge.html">Badge</a></li>
                <li><a class="nav-link" href="assets/bootstrap-breadcrumb.html">Breadcrumb</a></li>
                <li><a class="nav-link" href="assets/bootstrap-buttons.html">Buttons</a></li>
                <li><a class="nav-link" href="assets/bootstrap-card.html">Card</a></li>
                <li><a class="nav-link" href="assets/bootstrap-carousel.html">Carousel</a></li>
                <li><a class="nav-link" href="assets/bootstrap-collapse.html">Collapse</a></li>
                <li><a class="nav-link" href="assets/bootstrap-dropdown.html">Dropdown</a></li>
                <li><a class="nav-link" href="assets/bootstrap-form.html">Form</a></li>
                <li><a class="nav-link" href="assets/bootstrap-list-group.html">List Group</a></li>
                <li><a class="nav-link" href="assets/bootstrap-media-object.html">Media Object</a></li>
                <li><a class="nav-link" href="assets/bootstrap-modal.html">Modal</a></li>
                <li><a class="nav-link" href="assets/bootstrap-nav.html">Nav</a></li>
                <li><a class="nav-link" href="assets/bootstrap-navbar.html">Navbar</a></li>
                <li><a class="nav-link" href="assets/bootstrap-pagination.html">Pagination</a></li>
                <li><a class="nav-link" href="assets/bootstrap-popover.html">Popover</a></li>
                <li><a class="nav-link" href="assets/bootstrap-progress.html">Progress</a></li>
                <li><a class="nav-link" href="assets/bootstrap-table.html">Table</a></li>
                <li><a class="nav-link" href="assets/bootstrap-tooltip.html">Tooltip</a></li>
                <li><a class="nav-link" href="assets/bootstrap-typography.html">Typography</a></li>
              </ul>
            </li>
            <li class="menu-header">Stisla</li>
            <li class="dropdown">
              <a href="assets/#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i> <span>Components</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="assets/components-article.html">Article</a></li>                <li><a class="nav-link beep beep-sidebar" href="assets/components-avatar.html">Avatar</a></li>                <li><a class="nav-link" href="assets/components-chat-box.html">Chat Box</a></li>                <li><a class="nav-link beep beep-sidebar" href="assets/components-empty-state.html">Empty State</a></li>                <li><a class="nav-link" href="assets/components-gallery.html">Gallery</a></li>
                <li><a class="nav-link beep beep-sidebar" href="assets/components-hero.html">Hero</a></li>                <li><a class="nav-link" href="assets/components-multiple-upload.html">Multiple Upload</a></li>
                <li><a class="nav-link beep beep-sidebar" href="assets/components-pricing.html">Pricing</a></li>                <li><a class="nav-link" href="assets/components-statistic.html">Statistic</a></li>                <li><a class="nav-link" href="assets/components-tab.html">Tab</a></li>
                <li><a class="nav-link" href="assets/components-table.html">Table</a></li>
                <li><a class="nav-link" href="assets/components-user.html">User</a></li>                <li><a class="nav-link beep beep-sidebar" href="assets/components-wizard.html">Wizard</a></li>              </ul>
            </li>
            <li class="dropdown">
              <a href="assets/#" class="nav-link has-dropdown"><i class="far fa-file-alt"></i> <span>Forms</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="assets/forms-advanced-form.html">Advanced Form</a></li>
                <li><a class="nav-link" href="assets/forms-editor.html">Editor</a></li>
                <li><a class="nav-link" href="assets/forms-validation.html">Validation</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="assets/#" class="nav-link has-dropdown"><i class="fas fa-map-marker-alt"></i> <span>Google Maps</span></a>
              <ul class="dropdown-menu">
                <li><a href="assets/gmaps-advanced-route.html">Advanced Route</a></li>
                <li><a href="assets/gmaps-draggable-marker.html">Draggable Marker</a></li>
                <li><a href="assets/gmaps-geocoding.html">Geocoding</a></li>
                <li><a href="assets/gmaps-geolocation.html">Geolocation</a></li>
                <li><a href="assets/gmaps-marker.html">Marker</a></li>
                <li><a href="assets/gmaps-multiple-marker.html">Multiple Marker</a></li>
                <li><a href="assets/gmaps-route.html">Route</a></li>
                <li><a href="assets/gmaps-simple.html">Simple</a></li>
              </ul>
            </li>            <li class="dropdown">
              <a href="assets/#" class="nav-link has-dropdown"><i class="fas fa-plug"></i> <span>Modules</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="assets/modules-calendar.html">Calendar</a></li>
                <li><a class="nav-link" href="assets/modules-chartjs.html">ChartJS</a></li>
                <li><a class="nav-link" href="assets/modules-datatables.html">DataTables</a></li>
                <li><a class="nav-link" href="assets/modules-flag.html">Flag</a></li>
                <li><a class="nav-link" href="assets/modules-font-awesome.html">Font Awesome</a></li>
                <li><a class="nav-link" href="assets/modules-ion-icons.html">Ion Icons</a></li>
                <li><a class="nav-link" href="assets/modules-owl-carousel.html">Owl Carousel</a></li>
                <li><a class="nav-link" href="assets/modules-sparkline.html">Sparkline</a></li>
                <li><a class="nav-link" href="assets/modules-sweet-alert.html">Sweet Alert</a></li>
                <li><a class="nav-link" href="assets/modules-toastr.html">Toastr</a></li>
                <li><a class="nav-link" href="assets/modules-vector-map.html">Vector Map</a></li>
                <li><a class="nav-link" href="assets/modules-weather-icon.html">Weather Icon</a></li>
              </ul>
            </li>
            <li class="menu-header">Pages</li>
            <li class="dropdown">
              <a href="assets/#" class="nav-link has-dropdown"><i class="far fa-user"></i> <span>Auth</span></a>
              <ul class="dropdown-menu">
                <li><a href="assets/auth-forgot-password.html">Forgot Password</a></li> 
                <li><a href="assets/auth-login.html">Login</a></li> 
                <li><a href="assets/auth-register.html">Register</a></li> 
                <li><a href="assets/auth-reset-password.html">Reset Password</a></li> 
              </ul>
            </li>
            <li class="dropdown">
              <a href="assets/#" class="nav-link has-dropdown"><i class="fas fa-exclamation"></i> <span>Errors</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="assets/errors-503.html">503</a></li> 
                <li><a class="nav-link" href="assets/errors-403.html">403</a></li> 
                <li><a class="nav-link" href="assets/errors-404.html">404</a></li> 
                <li><a class="nav-link" href="assets/errors-500.html">500</a></li> 
              </ul>
            </li>
            <li class="dropdown">
              <a href="assets/#" class="nav-link has-dropdown"><i class="fas fa-bicycle"></i> <span>Features</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="assets/features-activities.html">Activities</a></li>
                <li><a class="nav-link" href="assets/features-post-create.html">Post Create</a></li>
                <li><a class="nav-link" href="assets/features-posts.html">Posts</a></li>
                <li><a class="nav-link" href="assets/features-profile.html">Profile</a></li>
                <li><a class="nav-link" href="assets/features-settings.html">Settings</a></li>
                <li><a class="nav-link" href="assets/features-setting-detail.html">Setting Detail</a></li>
                <li><a class="nav-link" href="assets/features-tickets.html">Tickets</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="assets/#" class="nav-link has-dropdown"><i class="fas fa-ellipsis-h"></i> <span>Utilities</span></a>
              <ul class="dropdown-menu">
                <li><a href="assets/utilities-contact.html">Contact</a></li>
                <li><a class="nav-link" href="assets/utilities-invoice.html">Invoice</a></li>
                <li><a href="assets/utilities-subscribe.html">Subscribe</a></li>
              </ul>
            </li>            <li><a class="nav-link" href="assets/credits.html"><i class="fas fa-pencil-ruler"></i> <span>Credits</span></a></li>
          </ul>

          <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="assets/https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
              <i class="fas fa-rocket"></i> Documentation
            </a>
          </div>        </aside>
      </div>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Dashboard</h1>
          </div>
          <div class="row">
            <a href="assets/utilisateur_add.php" style="text-decoration: none;"><div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Utilisateur</h4>
                  </div>
                  <div class="card-body"><?php echo $nombre_user?>
                  </div>
                </div>
              </div></a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                  <i class="far fa-newspaper"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Facture</h4>
                  </div>
                  <div class="card-body">
                    42
                  </div>
                </div>
              </div>
            </div>
       
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                  <i class="fas fa-circle"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>vente</h4>
                  </div>
                  <div class="card-body">
                    47
                  </div>
                </div>
              </div>
            </div>                  
          </div>
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Montant Total</h4>
                  </div>
                  <div class="card-body"><?php echo $nombre_user?>
                  </div>
                </div>
              </div>
            </div>
         
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                  <i class="fas fa-circle"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Montat totlat vente aujourd'hui</h4>
                  </div>
                  <div class="card-body">
                    47
                  </div>
                </div>
              </div>
            </div>                  
          </div>
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>vente aujourd'hui</h4>
                  </div>
                  <div class="card-body"><?php echo $nombre_user?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                  <i class="far fa-newspaper"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Facture ajourd'hui</h4>
                  </div>
                  <div class="card-body">
                    42
                  </div>
                </div>
              </div>
            </div>             
          </div>
          <div class="row">
           <a href="assets/pharmacie.php" style="text-decoration: none;"> <div class="col-lg-6 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>produit en stock</h4>
                  </div>
                  <div class="card-body"><?php echo $nombre_produit?>
                  </div>
                </div>
              </div></a>
            </div>
            <div class="col-lg-36col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                  <i class="far fa-newspaper"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>produit en rupture de stock</h4>
                  </div>
                  <div class="card-body"><?php echo  $n_rupture
                  ?>
                  </div>
                </div>
              </div>
            </div>             
          </div>
          <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
            <?php
            include_once "database.php";

            // requete pour recuperer le données 
            $donnee = "SELECT id,nomProduit,quantite,seuil FROM produit_tab";
            $result = mysqli_query($conn,$donnee);
            //afficher l'alert pour chaque produit
            while($row = mysqli_fetch_assoc($result)){
              $produit_id = $row ['id'];
              $nom = $row ['nomProduit'];
              $quantite = $row ['quantite'];
              $seuil = $row ['seuil'];
              if ($quantite <= $seuil){
                    echo '<div class="alert alert-danger alert-has-icon" role="alert">';
                echo ' <div class="alert-icon"><i class="far fa-lightbulb"></i></div>';
                echo " $nom    $quantite / $seuil ";
                echo '</div>';
                echo '</div>';
              }
            }
            ?>
          </div>
          

        
          

        </section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="assets/https://nauval.in/">Muhamad Nauval Azhar</a>
        </div>
        <div class="footer-right">
          
        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="assets/modules/jquery.min.js"></script>
  <script src="assets/modules/popper.js"></script>
  <script src="assets/modules/tooltip.js"></script>
  <script src="assets/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="assets/modules/moment.min.js"></script>
  <script src="assets/js/stisla.js"></script>
  
  <!-- JS Libraies -->
  <script src="assets/modules/simple-weather/jquery.simpleWeather.min.js"></script>
  <script src="assets/modules/chart.min.js"></script>
  <script src="assets/modules/jqvmap/dist/jquery.vmap.min.js"></script>
  <script src="assets/modules/jqvmap/dist/maps/jquery.vmap.world.js"></script>
  <script src="assets/modules/summernote/summernote-bs4.js"></script>
  <script src="assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>

  <!-- Page Specific JS File -->
  <script src="assets/js/page/index-0.js"></script>
  
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <script src="assets/js/custom.js"></script>
</body>
</html>