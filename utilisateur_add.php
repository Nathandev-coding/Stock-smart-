<?php
   include_once "database.php";
   session_start();

   if (!isset ($_SESSION['admin_email'])){
   
   } 

   if (isset($_POST['submit'])){
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $email = htmlspecialchars($_POST['email']);
    $numero = htmlspecialchars($_POST['numero']);
    $password = md5($_POST['passeword']);
    $role = htmlspecialchars($_POST['role']);


    $sql = "INSERT INTO `utilisateur_tab`(`id`, `nom`, `prenom`, `email`, `numero`, `passeword`, `role`) VALUES (NULL,
    '$nom','$prenom','$email','$numero','$password','$role')";

    $result = mysqli_query($conn,$sql);

    if ($result){
      header ("location: utilisateur_add.php?msg= utilisateur ajouter avec succes");
    }else{
      header("location : utilisateur_add.php?msg= l'ajout a echouer veuillez recommencez");
    }

   }
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
                <li class=active><a class="nav-link" href="admin_space.php">General Dashboard</a></li>
               
              </ul>
            </li>
            <li class="menu-header">Starter</li>
            <li class="dropdown">
              <a href="assets/#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Pharmacie</span></a>
            
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="pharmacie.php">Produit en stock</a></li>
                <li><a class="nav-link" href="a">Produit en rupture </a></li>
               
              </ul>
            </li>
            <li><a class="nav-link" href="utilisateur_add.php"><i class="far fa-square"></i> <span>Utilisateur</span></a></li>
            <li><a class="nav-link" href="analyse.php"><i class="far fa-square"></i> <span>Analyse</span></a></li>
            <li><a class="nav-link" href="analyse.php"><i class="far fa-square"></i> <span>Configuration</span></a></li>
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
            <h1>Utilisateur</h1>
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
          }elseif   (isset($_GET['messge'])){
            $msg = $_GET['messaeg'];
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

          <button class="btn btn-primary mb-3" id="btn-f" onclick="afficherFormulaire()">Ajouter</button>
     <div class="row">
        
        <div class="card col-md-10" id="formulaire">
            <div class="card-header" >
              <h4 class="text-primary">Ajouter un Utilisateur</h4>
            </div>
            <div class="card-body">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <form action="" method="post">
                  <label for="inputEmail4">Nom</label>
                  <input type="text" name="nom" class="form-control" id="inputEmail4" placeholder="ntumba" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4">Prenom</label>
                  <input type="text" name="prenom" class="form-control" id="inputPassword4" placeholder="daniel" required>
                </div>
              </div>
              <div class="form-group">
                <label for="inputAddress">Address mail</label>
                <input type="email" name="email" class="form-control" id="inputAddress" placeholder="1234 Main St" required>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">telephone</label>
                  <input type="number" name="numero" class="form-control" id="inputEmail4" placeholder="Email" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4">Password</label>
                  <input type="password" name="passeword" class="form-control" id="inputPassword4" placeholder="Password" required>
                </div>
              </div>
              <div class="form-group">
                <label for="inputAddress">role</label>
                <select type="text" name="role" class="form-control" id="inputAddress" placeholder="1234 Main St" required>
                    <option value=""selected>---selectionner un role---</option>
                    <option value="admin">administrateur</option>
                    <option value="gestionnaire">gestionnaire</option>
                    <option value="caissier">cassier</option>
                </select>
              </div>
          
            
            </div>
            <div class="card-footer">
             <input type="submit" class="btn btn-primary" name="submit" value="ajouter">
              <a href="assets/utilisateur_add.php" class="btn btn-danger">Annuller</a>
            </div>
          </div>
          </form>
     </div>
     <div class="row">
     <div class="col-12">
                <div class="card" id="table">
                  <div class="card-header">
                    <h4 class="text-primary">utilsateur</h4>
                    <div class="card-header-form">
                      <form>
                        <div class="input-group">
                          <input type="text" class="form-control" placeholder="Search">
                          <div class="input-group-btn">
                            <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="table-responsive">
                      <?php
                       include_once "database.php";

                       $sql = "SELECT * FROM utilisateur_tab";

                       $resultat = mysqli_query($conn,$sql);

                       if ($resultat->num_rows >0 ){

                        echo '<table class="table table-striped">';
                        echo '<table class="table table-striped" id="sortable-table">';
                        echo ' <thead class="text-primary">';
                        echo '<tr>';
                        echo '  <th class="text-center"> <i class="fas fa-th"></i></th>';
                        echo '<th>Nom</th>';
                       echo '<th>Prenom</th>';
                       echo ' <th>Email</th>';
                      echo  ' <th>Numero</th>';
                      echo  '<th>role</th>';
                      echo  '<th>Action</th>';
                      while ($row = $resultat->fetch_array()){
                        echo '<tr>';
                        echo ' <td>
                                <div class="sort-handler">
                                  <i class="fas fa-th"></i>
                                </div>
                              </td>';
                        echo '<td> '.$row ['nom'] .' </td>';
                        echo '<td> '.$row ['prenom'] .' </td>';
                        echo '<td> '.$row ['email'] .' </td>';
                        echo '<td> '.$row ['numero'] .' </td>';
                        echo '<td ><div class="badge badge-success"> '.$row ['role'] .'</div> </td>';
                      
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
    function afficherFormulaire(){
      var formulaire = document.getElementById('formulaire');
      var button = document.getElementById('btn-f');
      if (formulaire.style.display === "none"){
        formulaire.style.display = "block";
        button.style.display = "none"
      }else{
           formulaire.style.display = "none";
        button.style.display = "initial";
      }
    }
  </script>
</body>
</html>