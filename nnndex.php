<?php

include "database.php";
session_start();

if (isset($_POST['submit'])){
    $email = ($_POST['email']);
    $password = ($_POST['passeword']);

    $sql = "SELECT * FROM utilisateur_tab WHERE email = '$email' && passeword = '$password' ";
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)> 0){
        $row = mysqli_fetch_array($result);
        if($row ['role'] == 'admin'){
    
           $_SESSION['admin_email'] = $row['email'];
           $_SESSION['admin_nom'] = $row['nom'];
     
           header("location: admin_space.php");
        }elseif($row ['role'] == 'caissier'){
            
            $_SESSION['caissier_email'] = $row['email'];
            $_SESSION['caissier_nom'] = $row['nom'];
            header("location: user_space.php");
        }elseif($row ['role'] == 'gestionner'){
            $_SESSION ['gestionnaire_email'] = $row ['email'];
            $_SESSION ['gestionnaire_nom'] = $row ['nom'];
            header ("location : gest_dashboard.php");
        }
    }else{
        $error[] = 'mot de passe ou email incorect';
    }
};


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="assets/https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>stocksmart authentification</title>
</head>

<style>
    @media (max-width:992px) {
        .auth-fluid .auth-fluid-right{
            display: none;
        }
    }
</style>
<body color="light">

    <div class="auth-fluid d-flex h-100 position-fixed"  style="width: 100%;height:650px;">
    <div class="auth-fluid-form-box p-2 " >
        <div class="align-items-center d-flex h-100 p-5">
            <div class="p-1">
                <h2 class="mt-0 text-primary" style="font-weight: bold;">se connecter</h2>
                <p class="text-muted mb-2" style="font-size: 16px;">saisissez votre email et votre mot de passe pour acceder a votre compte</p>

                <?php
            if (isset($error)) {
               foreach($error as $error){
              
                    echo'<div class="alert alert-warning alert-dismissible d-flex fade show mt-3" role="alert">
                    <i class="bi bi-exclamation-triangle text-danger me-1 " ></i>
                    
                   
                    '.$error.'
        
                    <button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="close"></button>
                    </div>';
                }
            }
            ?>
                <form action="" method="post" >
                    <div class="mb-3">
                        <label for="email" class="form-label" style="font-size: 16px; font-weight: bold;"> Email</label>
                        <input type="mail" class="form-control form-control-lg" autocomplete="off" autofocus id="" required placeholder="saissir vote email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label" style="font-size: 16px;font-weight: bold;"> Mot de passe</label>
                        <div class="input-group input-group-merge">
                             <input type="password" class="form-control form-control-lg" autocomplete="off" autofocus id="" required placeholder="saissir vote Mot de passe" name="passeword">
                        </div>
                    </div><br>
                    <div class="text-center d-grid" style="margin-top: -22px;">
                        <button class="btn btn-block btn-lg bg-primary text-white" id="valid" type="submit" name="submit">
                            <span>connexion</span>
                            <i class='bx bx-log-in'></i>
                        </button>
                        <div class="techno" style="text-align: left;"></div>
                    </div>

                    <div class="text-center align-items-center mt-4">
                        <p class=" font-16">contactez nous</p>

                        <ul class="social-list list-inline  mt-3 d-flex " style="align-items: center; justify-content: center;">
                            <li class="list-inline-item"><a href="assets/https://www.instagram.com/nathan_dumebi?igsh=MzNINGNkZWQ4Mg=="class="social-list-item border-danger text-danger " style="font-size: 30px;"><i class='bx bxl-instagram'></i></a></li>
                            <li class="list-inline-item"><a href="assets/https://wa.me/message/EJTYCQ5YTHRAG1" class="social-list-item border-success text-success" style="font-size: 30px;"><i class='bx bxl-whatsapp' ></i></a></li>
                            <li class="list-inline-item"><a href="assets/tel:+243903864670" class="social-list-item border-primary text-primary" style="font-size: 30px;"><i class='bx bx-phone'></i></a></li>

                        </ul>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <div class="auth-fluid-right text-center " style="background-image: url('css/stock-gestion.jpg')!important;background-repeat: no-repeat;width: 100%;background-size: cover;height:700px;">
        
    </div>
       
       

    </div>
    









    <script type="module" src="assets/https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="assets/https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="assets/https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<script src="assets/https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="assets/https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    
</body>
</html>