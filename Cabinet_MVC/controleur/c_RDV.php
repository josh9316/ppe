<link rel="stylesheet" href="css/style.css">

<header>
        <h1>Bienvenue sur notre site</h1>
        <p>Découvrez un monde de possibilités</p>
</header>


<h2>Gestion des RDV</h2>

<?php
$leRDV = null;
if(isset($_GET['action']) && isset($_GET['idrendezvous'])){
    $action = $_GET['action'];
    $idrendezvous = $_GET['idrendezvous'];

    switch ($action) {
        case "sup": $unControleur->deleteRDV($idrendezvous); break;
        case "edit": $leRDV = $unControleur->selectWhereRDV($idrendezvous); break;
    }
}

$lesPatients = $unControleur->selectAllPatients();  // Méthode qui récupère tous les patients
$lesInfirmiers = $unControleur->selectAllInfirmiers();  // Méthode qui récupère tous les infirmiers
$lesVaccins = $unControleur->selectAllVaccins();

require_once("vue/vue_insert_rdv.php");

if(isset($_POST['Valider'])){
    $unControleur->insertRDV($_POST);
    echo "<br> Insertion réussie du RDV <br>";
}

if(isset($_POST['Modifier'])){
    $unControleur->updateRDV($_POST);
    header("Location:index.php?page=5");
}

if(isset($_POST['Filtrer'])){
    $lesRDVs = $unControleur->selectLikeRDVs($_POST['filtre']);
} else {
    $lesRDVs = $unControleur->selectAllRDVs();
}

require_once("vue/vue_select_rdvs.php");

?>
