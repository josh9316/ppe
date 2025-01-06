<?php
require_once ("modèle/modele.class.php");
class Controleur {
    private $unModele;

    public function __construct() {
        $this->unModele = new Modele();
    }
   /****************** Gestion des patients ***********************/
public function selectAllPatients() {
    return $this->unModele->selectAllPatients();
}
public function insertPatient($tab) {
    // Contrôler les données du patient avant insertion.
    $this->unModele->insertPatient($tab);
}
public function selectLikePatients($filtre) {
    return $this->unModele->selectLikePatients($filtre);
}
public function deletePatient($idpatient) {
    $this->unModele->deletePatient($idpatient);
}
public function selectWherePatient($idpatient) {
    return $this->unModele->selectWherePatient($idpatient);
}
public function updatePatient($idpatient) {
    $this->unModele->updatePatient($idpatient);
}


   /****************** Gestion des infirmiers ***********************/
public function selectAllInfirmiers() {
    return $this->unModele->selectAllInfirmiers();
}
public function insertInfirmier($tab) {
    // Contrôler les données de l'infirmier avant insertion.
    $this->unModele->insertInfirmier($tab);
}
public function selectLikeInfirmiers($filtre) {
    return $this->unModele->selectLikeInfirmiers($filtre);
}
public function deleteInfirmier($idinfirmier) {
    $this->unModele->deleteInfirmier($idinfirmier);
}
public function selectWhereInfirmier($idinfirmier) {
    return $this->unModele->selectWhereInfirmier($idinfirmier);
}
public function updateInfirmier($tab) {
    $this->unModele->updateInfirmier($tab);
}

/****************** Gestion des vaccins ***********************/
public function selectAllVaccins() {
    return $this->unModele->selectAllVaccins();
}

public function insertVaccin($tab) {
    // Contrôler les données du vaccin avant insertion.
    $this->unModele->insertVaccin($tab);
}

public function selectLikeVaccins($filtre) {
    return $this->unModele->selectLikeVaccins($filtre);
}

public function deleteVaccin($idvaccin) {
    $this->unModele->deleteVaccin($idvaccin);
}

public function selectWhereVaccin($idvaccin) {
    return $this->unModele->selectWhereVaccin($idvaccin);
}

public function updateVaccin($tab) {
    $this->unModele->updateVaccin($tab);
}

    /****************** Gestions des RDV ***********************/

public function selectAllRDVs() {
    return $this->unModele->selectAllRDVs();
}

public function insertRDV($tab) {
    // Contrôler les données du RDV avant insertion.
    $this->unModele->insertRDV($tab);
}

public function selectLikeRDVs($filtre) {
    return $this->unModele->selectLikeRDVs($filtre);
}

public function deleteRDV($idrendezvous) {
    $this->unModele->deleteRDV($idrendezvous);
}

public function selectWhereRDV($idrendezvous) {
    return $this->unModele->selectWhereRDV($idrendezvous);
}

public function updateRDV($tab) {
    $this->unModele->updateRDV($tab);
}


/***********Gestion users*************/

public function verifConnexion ($email, $mdp){
    //Controle de donnée
    $tab = array("email"=> $email,"mdp"=> $mdp);

    //sha1 du mdp
    $mdp = sha1($mdp);
    
    if($this->verifDonnees ($tab)){
        //retourner le user resultat
        return $this->unModele->verifConnexion($email, $mdp);
    }else{
        return false;
    }
}
public function verifDonnees ($tab){
    $verif = true;
    foreach ($tab as $cle => $valeur) {
        if ($valeur == "" || $valeur == null){
            $verif = false;
            break;
        }
    }
    return $verif;
    
}
}

?>