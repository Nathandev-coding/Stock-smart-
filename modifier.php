<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/admin.css">

    <title>Modifier un produit</title><?php
    include "db_conn.php";
    $id = $_GET['id'];
    if(isset($_POST['submit'])){
        $nom = $_POST['nom'];
    $code_barre = $_POST['code_barre'];
    $prix_achat = $_POST['prix_achat'];
    $quantite = $_POST['quantite'];
    $date_expiration = $_POST['date_expiration'];
    $fournisseur = $_POST['fournisseur'];
    $seuil = $_POST['seuil'];
    $categorie = $_POST['categorie'];
    $prix_vente_detail = $_POST['prix_vente_detail'];
    $prix_vente_gros = $_POST['prix_vente_gros'];
    $nombre_munimun_gros = $_POST['nombre_munimun_gros'];
    $date_approvissionnement = $_POST['date_approvissionnement'];

    
        $sql = "UPDATE `produit` SET `nom`='$nom',`code_barre`='$code_barre',`prix_achat`='$prix_achat',`quantite`='$quantite',`date_expiration`='$date_expiration',`fournisseur`='$fournisseur',`seuil`='$seuil',`categorie`='$categorie',`prix_vente_detail`='$prix_vente_detail'
        ,`prix_vente_gros`='$prix_vente_gros',`nombre_munimun_gros`='$nombre_munimun_gros',`date_approvissionnement`='$date_approvissionnement' WHERE id=$id";
    
        $result = mysqli_query($conn,$sql);
        if($result){
            header("location: add.php?msg=produit modifier avec succé");
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
       
        $sql = "SELECT * FROM  `produit` WHERE id = $id LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        ?>
      
      <div class="w-75 ms-auto d-flex justify-content-center border-primary shadow-sm mb-3" >

      
<form action="" method="post" style="width: 50vw; min-width: 300px; backgroud: red;" class="p-5"   id="monFormulaire">
    <div class="text-center mb-6 bg-primary p-2 fw-semibold">
        <h3>MODIFIER UN PRODUIT</h3>
        <P class="" style="color: white;"> remplir le formulaire pour modifier  produit</P>
    </div>
    <div class="row">
        <div class="col">
            <label for="" class="form-label">Nom du produit <span class="text-danger">*</span> </label>
            <input type="text" class="form-control" name="nom" id="nom" value="<?php echo $row ['nom'] ?>" required>
        </div>
        <div class="col">
            <label for="" class="form-label">code-bare <span class="text-danger">*</span></label>
            <input type="number" class="form-control" name="code_barre" id="codebarre"  value="<?php echo $row ['code_barre'] ?>" required>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <label for="" class="form-label">prix d'achat <span class="text-danger">*</span></label>
            <input type="number" class="form-control" name="prix_achat"
            value="<?php echo $row ['prix_achat'] ?>" required>
        </div>
        <div class="col">
            <label for="" class="form-label">Quantite</label>
            <input type="number" class="form-control" name="quantite"
            value="<?php echo $row ['quantite'] ?>" required>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label for="" class="form-label">Date d'expiration <span class="text-danger">*</span></label>
            <input type="date" class="form-control" name="date_expiration"
            value="<?php echo $row ['date_expiration'] ?>" required>
        </div>
        <div class="col">
            <label for="" class="form-label">Fournisseur</label>
            <input type="text" class="form-control" name="fournisseur"
            value="<?php echo $row ['fournisseur'] ?>" required>
           
        </div>
       
    </div>
    <div class="row">
        <div class="col">
            <label for="" class="form-label"> seuil  <span class="text-danger">*</span></label>
            <input type="number" class="form-control" name="seuil"
            value="<?php echo $row ['seuil'] ?>" required>
        </div>
        <div class="col">
            <label for="">Categorie  <span class="text-danger">*</span></label>
            <select class="form-control" name="categorie" id="" value="<?php echo $row ['categorie'] ?>">
                <option value=""></option>
                <option value="savon">savon</option>
                <option value="tube">tube</option>
                <option value="anti-biotique">anti-biotique</option>
                <option value="sirop">sirop</option>
                <option value="comprimer">comprimer</option>
            </select>
        </div>
      
    </div>

       
        <div class="row mb-3">
        <div class="col">
            <label for="" class="form-label">prix vente detail  <span class="text-danger">*</span></label>
            <input type="number" class="form-control" name="prix_vente_detail"
            value="<?php echo $row ['prix_vente_detail'] ?>" required>
        </div>
        <div class="col">
            <label for="" class="form-label">Prix vente gros  <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="prix_vente_gros"
            value="<?php echo $row ['prix_vente_gros'] ?>" required>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <label for="" class="form-label">nombre minimun gros  <span class="text-danger">*</span></label>
            <input type="number" class="form-control" name="nombre_munimun_gros"
            value="<?php echo $row ['nombre_munimun_gros'] ?>" required>
        </div>
        <div class="col">
            <label for="" class="form-label">date approvissionnement</label>
            <input type="date" class="form-control" name="date_approvissionnement"
            value="<?php echo $row ['date_approvissionnement'] ?>" required>
        </div>
    </div>

        <div>
            <button type="submit" class="btn btn-success" name="submit">Modifier</button>
            <a href="assets/add.php" class="btn btn-danger">Annuler</a>
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