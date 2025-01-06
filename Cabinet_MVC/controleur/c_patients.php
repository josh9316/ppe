<link rel="stylesheet" href="css/style.css">

<header>
        <h1>Bienvenue sur notre site</h1>
        <p>Découvrez un monde de possibilités</p>
</header>


<h2>Gestion des Clubs</h2>

<?php
$lePatient = null;
if(isset($_GET['action']) && isset($_GET['idpatient'])){
    $action = $_GET['action'];
    $idpatient = $_GET['idpatient'];

    switch ($action) {
        case "sup": $unControleur->deletePatient($idpatient); break;
        case "edit": $lePatient = $unControleur->selectWherePatient($idpatient); break;
    }
}

require_once("vue/vue_insert_patient.php");

if(isset($_POST['Valider'])){
    $unControleur->insertPatient($_POST);
    echo "<br> Insertion réussie du Club <br>";
}

if(isset($_POST['Modifier'])){
    $unControleur->updatePatient($_POST);
    header("Location:index.php?page=2");
}

if(isset($_POST['Filtrer'])){
    $lesPatients = $unControleur->selectLikePatients($_POST['filtre']);
} else {
    $lesPatients = $unControleur->selectAllPatients();
}

require_once("vue/vue_select_patients.php");

?>
