<link rel="stylesheet" href="css/style.css">

<header>
        <h1>Bienvenue sur notre site</h1>
        <p>Découvrez un monde de possibilités</p>
</header>


<h2>Gestion des vaccins</h2>

<?php
$lesVaccins = $unControleur->selectAllVaccins();

$leVaccin = null;
if (isset($_GET['action']) && isset($_GET['idvaccin'])) {
    $action = $_GET['action'];
    $idvaccin = $_GET['idvaccin'];

    switch ($action) {
        case "sup":
            $unControleur->deleteVaccin($idvaccin);
            break;
        case "edit":
            $leVaccin = $unControleur->selectWhereVaccin($idvaccin);
            break;
    }
}

require_once("vue/vue_insert_vaccin.php");

if (isset($_POST['Valider'])) {
    $unControleur->insertVaccin($_POST);
    echo "<br> Insertion réussie du vaccin <br>";
}

if (isset($_POST['Modifier'])) {
    $unControleur->updateVaccin($_POST);
    header("Location:index.php?page=4");
}

if (isset($_POST['Filtrer'])) {
    $lesVaccins = $unControleur->selectLikeVaccins($_POST['filtre']);
} else {
    $lesVaccins = $unControleur->selectAllVaccins();
}

require_once("vue/vue_select_vaccins.php");
?>
