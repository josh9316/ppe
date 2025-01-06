<link rel="stylesheet" href="css/style.css">

<header>
        <h1>Bienvenue sur notre site</h1>
        <p>Découvrez un monde de possibilités</p>
</header>


<h2>Gestion des Coachs</h2>

<?php
$leInfirmier = null;
if(isset($_GET['action']) && isset($_GET['idinfirmier'])){
    $action = $_GET['action'];
    $idinfirmier = $_GET['idinfirmier'];

    switch ($action) {
        case "sup": $unControleur->deleteInfirmier($idinfirmier); break;
        case "edit": $leInfirmier = $unControleur->selectWhereInfirmier($idinfirmier); break;
    }
}

require_once("vue/vue_insert_infirmier.php");

if(isset($_POST['Valider'])){
    $unControleur->insertInfirmier($_POST);
    echo "<br> Insertion réussie de l'infirmier <br>";
}

if(isset($_POST['Modifier'])){
    $unControleur->updateInfirmier($_POST);
    header("Location:index.php?page=3");
}

if(isset($_POST['Filtrer'])){
    $lesInfirmiers = $unControleur->selectLikeInfirmiers($_POST['filtre']);
} else {
    $lesInfirmiers = $unControleur->selectAllInfirmiers();
}

require_once("vue/vue_select_infirmiers.php");

?>
