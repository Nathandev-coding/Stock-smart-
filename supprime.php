<?php
include "database.php";
$id = $_GET['id'];
$sql = "DELETE FROM produit_tab WHERE id = $id ";
$result = mysqli_query($conn, $sql);
if($result){
    header("location: pharmacie.php?msg=produit supprimer avec succé");
}else{
    echo  "failed: ". mysqli_error($conn);
}
$id = $_GET['id'];
$sql = "DELETE FROM utilisateur_tab WHERE id = $id ";
$result = mysqli_query($conn, $sql);
if($result){
    header("location: utilisateur_add.php?msg= utilisateur   supprimer avec succé");
}else{
    echo  "failed: ". mysqli_error($conn);
}

?>