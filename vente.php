
<?php
  include "db_conn.php";
  
  //requete SQL pour recuper les noms de produits
  $sql = "SELECT nom FROM produit";
  $result = $conn->query($sql);

  //preparation d'un tableau pour stocker les noms de produit

 include "config.php";

 if (!isset($_SESSION['caissier_nom'])){
   
   
 }

?>
<?php
$pdo = new PDO('mysql:host=localhost;dbname=db_produit', 'root', '');

//verifier si une requete AJAX a ete envoyer
if (isset ($_GET['ajax']) && $_GET['ajax'] == 'getPrix'){

   //recuperez le nom du produit depuis la requete Ajax
$produit = $_GET['produit'];

//preparer et executer la requete pour obtenier le prix unitaire

$stmt = $pdo->prepare("SELECT Prix_vente_detail FROM produit WHERE nom = ?");
$stmt->execute([$produit]);
$prix = $stmt->fetchColum();
//retournez le prix unitaire

echo $prix;
exit();
}
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
    <title>vente</title>
</head>

<style>
#form{
    display: block;
    transition: all 0.2s ease-out;
}
.but{
    height: 171px;
    
}
</style>
<body>
    <?php
    include "user_dashboard.php";
    ?>
    <main class="main">
        <div class="w-75 mt-3 ms-5 shadow" id="form">
            <div class="card">
                <div class="card-header text-center bg-primary text-white">
                  <h2>EFFECTUER LA VENTE</h2>
                </div>

                <div class="card-body">
                    <form action="" method="post" id="formVentes">
                       
                        <div class="row">
                            <div class="col input-group mb-3">
                                <span class="input-group-text">numero du client</span>
                                <input type="number" class="form-control" placeholder="numero du client" aria-describedby="basic-addon1">
                            </div>
                            <div class="col input-group mb-3">
                                <span class="input-group-text">date </span>
                                <input type="date" class="form-control" placeholder="numero facture" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col input-group mb-3">
                                <span class="input-group-text">nom de l'utilisateure</span>
                                <input type="text" class="form-control" value="<?php echo $_SESSION["caissier_nom"] ?>" aria-describedby="basic-addon1" readonly>
                            </div>
                            </div>
                       

                       <table class="table" id="tableauVentes">
                       <thead class="bg-primary text-white">
                  <tr>
                   <th>Produit</th>
                    <th>Quantité</th>
                      <th>Prix unitaire</th>
                   <th>Prix total</th>
       
                    </tr>
                   </thead>
                      <tbody>
                             <tr>
                         <td><select type="text" name="produit[]" placeholder="Nom du produit" class="form-control" id="selectProduit">
                      <option value="">---selectionnée un produit--</option>
                     <?php
                        if ($row = $result->num_rows >0){
                          while($produit = $result->fetch_assoc()){
                           echo ' <option value="'. htmlspecialchars($produit['nom']) .'">'. htmlspecialchars($produit['nom']) .'</option>' ;  
                          }
                       }
                         ?>
                    </select></td>
                        <td><input type="number" name="quantite[]" placeholder="Quantité" class="form-control"></td>
                            <td><input type="text" name="prixHT[]" placeholder="Prix unitaire" class="form-control" id="prixUnitaire" oninput="calculLigne(this)"></td>
                           <td><input type="text" name="TotalHT[]" placeholder="Prix unitaire" class="form-control"readonly></td>
       
                              </tr>
                               </tbody>
                            </table>
                        <div class="but block float-start w-25 border border-end-0 p-2">
                            <div class="mb-3 mt-4">
                               <input type="submit" value="enregistrer" class="btn btn-primary">
                            </div>
                            <div class="mb-3">
                            <button class="btn btn-success d-none" type="button" onclick="ajouterLigne()">Ajouter un produit</button>
                            </div>
                        </div>

                       <div class="d-block float-end w-75 border p-3">
                        <div class="mb-3">
                            <p class="fs-5"> MONTANT HT <span id="montantHT">0</span></p>
                        </div>
                        <div class="mb-3">
                            <p class="fs-5"> TVA (16%) <span id="montantTVA">0</span></p>
                        </div>
                        <div class="mb w-100 bg-primary">
                            <p class="fs-5"> TOTAL TTC  <span id="montantTotalTTC">0</span></p>
                        </div>
                       </div>
                    </form>
                </div>
                   </div>
                   </div>
               <div class="container position-relative mt-5 mb-3  d-flex  p-1   justify-content-between" >
           
                <div> <button class="button-loader btn btn-primary p-3 " id="btn" onclick="afficherFormulaireVente()"> une nouvelle vente
              < /button>
           </div> 
        </div>

       
   </main>
   



   <script>
    function afficherFormulaireVente(){
        var formulaire = document.getElementById('form');
       
        if (form.style.display == 'none'){
            form.style.display = "block";
          


        }
    }

//*fonction pour ajouter une nouvelle vente
    function ajouterLigne() {
    var tableau = document.getElementById('tableauVentes').getElementsByTagName('tbody')[0];
    var nouvelleLigne = tableau.rows[0].cloneNode(true);
    tableau.appendChild(nouvelleLigne);
  }

   document.getElementById ('selectProduit').addEventListenert('change', function(){
    var produit = this.value; //l' identifiant ou le nom du produit selectionnée

   


   function calculerMontants() {
  var form = document.getElementById('formVente');
  var totalHT = 0;
  var tauxTVA = 0.16; // 20% de TVA

  // Calculer le total HT et mettre à jour le total HT de chaque ligne
  Array.from(form.querySelectorAll('tr')).forEach(function(row, index) {
    if (index > 0) { // Ignorer l'en-tête du tableau
      var quantite = parseFloat(row.querySelector('[name="quantite[]"]').value) || 0;
      var prixHT = parseFloat(row.querySelector('[name="prixHT[]"]').value) || 0;
      var totalLigneHT = quantite * prixHT;
      row.querySelector('[name="totalHT[]"]').value = totalLigneHT.toFixed(2);
      totalHT += totalLigneHT;
    }
  });

  // Calculer la TVA et le total TTC
  var tva = totalHT * tauxTVA;
  var totalTTC = totalHT + tva;

  // Afficher les montants calculés
  document.getElementById('montantHT').textContent = totalHT.toFixed(2);
  document.getElementById('montantTVA').textContent = tva.toFixed(2);
  document.getElementById('montantTotalTTC').textContent = totalTTC.toFixed(2);
}
   </script>
</body>
</html>