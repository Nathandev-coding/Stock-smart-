<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/admin.css">

    <title>Document</title><?php
    include "config.php";
    $id = $_GET['id'];
    if(isset($_POST['submit'])){
        $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $mot_de_passe =  ($_POST['mot_de_passe']);
    $role = $_POST['role'];

    $sql = "UPDATE `user_tb` SET `nom`='$nom',`prenom`='$prenom',`email`='$email',`telephone`='$telephone',`mot_de_passe`='$mot_de_passe',`role`='$role' WHERE id=$id";
        $result = mysqli_query($conn,$sql);
        if($result){
            header("location: utilisateur.php?msg=utilisareur modifier avec succé");
        }
        else{
            echo "Failed: " . mysqli_error($conn);
        }
    
    }
    
    ?>
    
    
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="assets/css/bootstrap.css">
    </head>
    <body>

    
    <?php
    include "admin_dashboard.php";
    ?>

    <main class="main">
    
    <div class="container justify-content-center">
        <?php
       
        $sql = "SELECT * FROM  `user_tb` WHERE id = $id LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        ?>
      
      <div class="w-75 ms-auto d-flex justify-content-center border-primary shadow-sm mb-3" >

      
      <form action="" method="post" style="width: 250vw; min-width: 500px; backgroud: red;" class="p-5" id="monFormulaire">
            <div class="text-center mb-5 bg-primary p-2 fw-semibold">
                <h3>MODIFIER  UN  UTILISATEUR</h3>
                <P class="text-white"> remplir le formulaire pour modifier un utilisateur</P>
            </div>
            <div class="row">
                <div class="col">
                    <label for="" class="form-label">Nom<span class="text-danger">*</span> </label>
                    <input type="text" class="form-control" name="nom" id="nom" value ="<?php echo $row ['nom'] ?>" required>
                </div>
                <div class="col">
                    <label for="" class="form-label">prenom <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="prenom"  value ="<?php echo $row ['prenom'] ?>" required>
                </div>
            </div>
        
            <div class="row">
                <div class="col">
                    <label for="" class="form-label">email<span class="text-danger">*</span></label>
                    <input type="email" class="form-control" name="email"
                    value ="<?php echo $row ['email'] ?>" required>
                </div>
                <div class="col">
                    <label for="" class="form-label">telephone</label>
                    <input type="text" class="form-control" name="telephone"
                    value ="<?php echo $row ['telephone'] ?>" required>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="" class="form-label">mot de passe<span class="text-danger">*</span></label>
                    <input type="password" class="form-control" name="mot_de_passe" value ="<?php echo $row ['mot_de_passe'] ?>" required>
                </div>
                <div class="col mb-5">
                    <label for="">role <span class="text-danger">*</span></label>
                    <select class="form-control" name="role" id="" value ="<?php echo $row ['role'] ?>">
                        <option value="admin">admin</option>
                        <option value="gestionnaire">gestionnaire</option>
                        <option value="caissier">caissier</option>
                      
                    </select>
                </div>
               
            </div>

                <div>
                    <button type="submit" class="btn btn-success" name="submit">Enregistrer</button>
                    <a href="assets/utilisateur.php" class="btn btn-danger">Annuler</a>
                </div>
            
        </form>
</div>
    
    </div>
    </main>
        
    </body>
    </html>
</head>
<body>

<script src="assets/https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="assets/https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    
</body>
</html>