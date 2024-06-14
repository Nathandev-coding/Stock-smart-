<?php
@include "config.php";

//session_start();

//if (!isset ($_SESSION['caissier_email'])){
  //  header("location: nnndex.php");
//}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/admin.css">
    <link rel="stylesheet" href="assets/https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>user dashboard</title>
</head>


<body>
<!-----------------navbar lateralle------------------->
    <nav class="sidebar navbar navbar-dark bg-primary" >

    <div class="container logo ">
        <img src="assets/css/logoaap.png" alt="" width="200" class="img-fluid">
       </div>



                <ul class="nav flex-column text-white w-100 position-relative mt-1  left-0 ">
                    <li class="nav-item">
                        <a class="nav-link  " href="assets/user_acceuil.php">
                            <i class='bx bxs-dashboard fs-2 h-1'></i> 
                            <span>Dashboard</span> 
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="assets/vente.php"><i class='bx bxs-capsule fs-2'></i><span>vente</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="assets/utilisateur.php"><i class="bi bi-person-workspace fs-2"></i><span>analyse</span></a>
                    </li>
            
                    <li class="nav-item">
                        <a class="nav-link " href="assets/"><i class='bx bx-cog fs-2' ></i> <span>configuration</span></a>
                    </li>
                
                    <li class="nav-item">
                        <a class="nav-link " href="assets/"><i class='bx bx-log-out fs-2'></i><span>deconnection</span></a>
                    </li>
                </ul>

        
        
    </nav>

<!----------------bar de navigation-->

<nav class="navigation navbar  navbar-light p-3 shadow">
<i  id="sidebar-close" class='bx bx-menu fs-1' ></p></i>
  
  
  <div class="p-1  w-20  me-6 d-flex ">
     <i class='bx bx-user-circle fs-1 mt-1' ></i>
     <p class="text-primary  mt-2" style="font-size: 22px;"> <?php echo $_SESSION['caissier_email'] ?></p>
</div>
 
 
  
</nav>


<main class="main">


   
 
</main>


<script>
   const sidebar = document.querySelector(".sidebar");
        const sidebarClose = document.querySelector("#sidebar-close");

        sidebarClose.addEventListener("click", () => sidebar.classList.toggle("close"))

</script>
<script type="module" src="assets/https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="assets/https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    

    
</body>
</html>