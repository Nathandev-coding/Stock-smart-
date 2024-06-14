<?php 
   include_once 'database.php';

   session_start();

   if (!isset ($_SESSION['admin_email'])){
   
   } 

   if (isset($_POST['submit'])){
    $nomProduit = htmlspecialchars($_POST['nomProduit']);
    $codeBarre = htmlspecialchars($_POST['codeBarre']);
    $dataExpiration = $_POST['dataExpiration'];
    $prixAchat = htmlspecialchars($_POST['prixAchat']);
    $quantite = htmlspecialchars($_POST['quantite']);
    $fournisseur = htmlspecialchars($_POST['fournisseur']);
    $seuil = htmlspecialchars($_POST['seuil']);
    $categorie = htmlspecialchars($_POST['categorie']);
    $prixVentDetail = htmlspecialchars($_POST['prixVenteDetail']);
    $prixVentGros = htmlspecialchars($_POST['prixVenteGros']);
    $nombreMinimunGros = htmlspecialchars($_POST['nombreMinimunGros']);
    $dateApprivissionnement = htmlspecialchars($_POST['dateApprovissionnement']);
  
     $sql = "INSERT INTO `produit_tab`(`id`, `nomProduit`, `codeBarre`, `prixAchat`, `quantite`, `dateExpiration`, `fournisseur`, `seuil`, `categorie`, `prixVenteDetail`, `prixVenteGros`, `prixMinimunGros`, `dateApprovissionnement`) VALUES (NULL,
    '$nomProduit','$codeBarre','$prixAchat','$quantite','$dataExpiration','$fournisseur','$seuil',
    '$categorie','$prixVentDetail','$prixVentGros','$nombreMinimunGros','$dateApprivissionnement')";

    $result = mysqli_query($conn,$sql);

    if ($result){
      header("location: pharmacie.php?msg= Produit ajouter avec succés");
    }else{
      echo "Failed: " . mysqli_error($conn);
    }
  


   }


   $query ="SELECT * FROM produit_tab";
   $resultat = mysqli_query($conn,$query);

  
   
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
<script async src="assets/https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA -->
 <style>
    #formulaire{
        display: none;
    }
 </style>
</head>

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
            <div class="d-sm-none d-lg-inline-block"><?php echo $_SESSION['admin_email'] ?></div></a>
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
                <li class=active><a class="nav-link" href="assets/admin_space.php">General Dashboard</a></li>
               
              </ul>
            </li>
            <li class="menu-header">Starter</li>
            <li class="dropdown">
              <a href="assets/#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Pharmacie</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="pharmacie.php">Produit en stock</a></li>
                <li><a class="nav-link" href="">Produit en rupture </a></li>
               
              </ul>
            </li>
            <li><a class="nav-link" href="utilisateur_add.php"><i class="far fa-square"></i> <span>Utilisateur</span></a></li>
            <li><a class="nav-link" href="analyse.php"><i class="far fa-square"></i> <span>Analyse</span></a></li>
            <li><a class="nav-link" href="configuration_admin.php"><i class="far fa-square"></i> <span>configuration</span></a></li>
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
            <h1>Produit</h1>
          </div>

          <?php
          if (isset($_GET['msg'])){
            $msg = $_GET['msg'];
            echo '<div class="alert alert-success alert-dismissible show fade">
                      <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                          <span>&times;</span>
                        </button>
                        '.$msg.'
                      </div>
                    </div>';
          }
          ?>
              <button class="btn btn-primary ms-3 float-end mb-3" id="btn" onclick="afficherFormulaire()" >Ajouter</button>
          <div class="row">
            <div class="col-lg-10 col-md-6 col-sm-6 col-12">
            <div class="card" id="formulaire">
                  <div class="card-header">
                    <h4 class="text-primary">Ajouter un produit</h4>
                    
                  </div>
                  <div class="card-body">
                   
                    <form class="" action=""  method="post">
                <div class="row">
                    <div class="col">
                     <label for="inlineFormInputName2">Nom du produit <span class="text-danger">*</span> </label>
                      <input type="text" name="nomProduit" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Paracetamol">
                     </div>  
                    <div class="col">
                       <label  for="inlineFormInputGroupUsername2">Code-barre <span class="text-danger">*</span></label>
                       <input type="text" name="codeBarre" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Username">

                       </div>
                       </div>
                       <div class="row">
                    <div class="col">
                     <label class="" for="inlineFormInputName2">Prix d'achat <span class="text-danger">*</span></label>
                      <input type="number" name="prixAchat" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Jane Doe">
                     </div>  
                    <div class="col">
                       <label class="" for="inlineFormInputGroupUsername2">Quantité<span class="text-danger">*</span></label>
                       <input type="numer" name="quantite" class="form-control" id="inlineFormInputGroupUsername2" placeholder="500">

                       </div>
                       </div>
                       <div class="row">
                    <div class="col">
                     <label class="" for="inlineFormInputName2">Date d'expiration<span class="text-danger">*</span></label>
                      <input type="date" name="dateExpiration" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Jane Doe">
                     </div>  
                    <div class="col">
                       <label class="" for="inlineFormInputGroupUsername2">Fournisseur<span class="text-danger">*</span></label>
                       <input type="text" name="fournisseur" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Username">

                       </div>
                       </div>
                       <div class="row">
                    <div class="col">
                     <label class="" for="inlineFormInputName2">Seuil<span class="text-danger">*</span></label>
                      <input type="number" name="seuil" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Jane Doe">
                     </div>  
                    <div class="col">
                       <label class="" for="inlineFormInputGroupUsername2">Categorie<span class="text-danger">*</span></label>
                       <select type="text" name="categorie" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Username">
                        <option value="" selected>--- selection un categorie---</option>
                        <option value="savon">savon</option>
                        <option value="tube">tube</option>
                        <option value="anti-biotique">anti-biotique</option>
                        <option value="sirop">sirop</option>
                       </select>

                       </div>
                       </div>
                       <div class="row">
                    <div class="col">
                     <label class="" for="inlineFormInputName2">Prix vente detail<span class="text-danger">*</span></label>
                      <input type="number" name="prixVenteDetail"  class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Jane Doe">
                     </div>  
                    <div class="col">
                       <label class="" for="inlineFormInputGroupUsername2">Prix vente gros <span class="text-danger">*</span></label>
                       <input type="number" name="prixVenteGros" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Username">

                       </div>
                       </div>
                       <div class="row">
                    <div class="col">
                     <label class="" for="inlineFormInputName2">nombre minimun gros<span class="text-danger">*</span></label>
                      <input type="number" name="nombreMinimunGros" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Jane Doe">
                     </div>  
                    <div class="col">
                       <label class="" for="inlineFormInputGroupUsername2">DAte approvissionnement <span class="text-danger">*</span></label>
                       <input type="date" name="dateApprovissionnement" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Username">

                       </div>
                       </div>
                     
                     

                       <div class="d-grid">
                        <button type="submit" name="submit" class="btn btn-primary"> Ajouter</button>
                        <a href= "pharmacie.php" class="btn btn-danger">Annuler</a>
                       </div>
                     
                     
                     
                    </form>
                  </div>
                </div>
            </div>
               
          </div>
          <div class="row">
            <div class="col-12">
              <div class="card" id="tab">
                <div class="card-header">
                  <h4 class="text-primary">Detail de Produit</h4>
                  <div class="card-header-action">
                    <form>
                        
                      <div class="input-group">
                       
                        <input type="text" class="form-control me-3" placeholder="Search">
                        <div class="input-group-btn">
                          <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                          
                        </div>
                     
                      </div>
                    </form>
                  </div>
                </div>
                <div class="card-body p-0" >
                  <div class="table-responsive">

                  <?php
                  if ($resultat->num_rows >0 ){
                    echo '<table class="table table-striped" id="sortable-table">';
                    echo ' <thead class="text-primary">';
                    echo '<tr>';
                    echo '  <th class="text-center"> <i class="fas fa-th"></i></th>';
                    echo '<th>Nom</th>';
                   echo '<th>code-barre</th>';
                   echo ' <th>date d\'expriation</th>';
                  echo  ' <th>Prix d\'achat</th>';
                  echo  '<th>quantité</th>';

                  echo  '<th>fournisseur</th>';
                  echo ' <th>seuil</th>';
                 echo  ' <th>Categorie</th>';
                 echo  ' <th>Prix  detail</th>';
                  echo '  <th>prix gros</th>';
                  echo ' <th>nombre gros</th>';
                  echo ' <th>approvissionnement</th>';
                  echo ' <th>Action</th>';
                  echo '</thead>';
                  echo '</tr>';
                  echo ' <tbody>';
                  while ($row = $resultat->fetch_assoc()){

                    echo '<tr>';
                    echo ' <td>
                            <div class="sort-handler">
                              <i class="fas fa-th"></i>
                            </div>
                          </td>';
                    echo '<td> '.$row ['nomProduit'] .' </td>';
                    echo '<td> '.$row ['codeBarre'] .' </td>';
                    echo '<td> '.$row ['prixAchat'] .' </td>';
                    echo '<td> '.$row ['quantite'] .' </td>';
                    echo '<td> '.$row ['dateExpiration'] .' </td>';
                    echo '<td> '.$row ['fournisseur'] .' </td>';
                    echo '<td> '.$row ['seuil'] .' </td>';
                    echo '<td> '.$row ['categorie'] .' </td>';
                    echo '<td> '.$row ['prixVenteGros'] .' </td>';
                    echo '<td> '.$row ['prixVenteDetail'] .' </td>';
                    echo '<td> '.$row ['nombreMinimunGros'] .' </td>';
                    echo '<td> '.$row ['dateApprovissionnement'] .' </td>';
                    echo '<td> 
                    <a class="btn btn-primary" href="assets/modifier.php?id='. $row["id"]. ' "><i class="bi bi-pencil-square"></i></a>
                 <a class="btn btn-danger" href="assets/supprime.php?id='. $row["id"]. ' "><i class="bi bi-trash3"></i></a> 
                       </td>';

                  }
                  echo '</tbody>';
                  echo '</table>';
                  }
                  ?>
                  
                  </div>
                </div>
              </div>
            </div>
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

  <script>
    function afficherFormulaire (){
        var formulaire = document.getElementById('formulaire');
        var button = document.getElementById('btn');
        var tab = document.getElementById('tab');
        if(formulaire.style.display === "none"){
            formulaire.style.display = "block";
            button.style.display = "none";
            tab.style.display = "none";
        }else{
            formulaire.style.display = "none";
            button.style.display = "initial";
            tab.style.display = "initial";
        }
    }
  </script>
</body>
</html>