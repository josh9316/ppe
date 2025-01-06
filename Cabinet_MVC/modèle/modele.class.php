<?php
class modele{
    private $unPdo;

    public function __construct(){
        try{
            $serveur = "localhost:3306";
            $bdd = "cabinet_medical";
            $user = "root";
            $mdp = "";
            $this -> unPdo = new PDO("mysql:host=".$serveur.";dbname=".$bdd, $user, $mdp);
        }
        catch(PDOException $exp){
            echo "<br> erreur de connexion à la BDD : " . $exp->getMessage();
        }
    }
   
    public function selectAllPatients(){
        $requete = "SELECT * FROM patients;";
        $exec = $this->unPdo->prepare($requete);
        $exec->execute();
        return $exec->fetchAll();
    }
    
    public function insertPatient($tab){
        $requete = "INSERT INTO patients VALUES (NULL, :nom, :prenom, :adresse, :email, :tel, :date_naissance);";
        $exec = $this->unPdo->prepare($requete);
        $donnees = array(
            ":nom" => $tab['nom'],
            ":prenom" => $tab['prenom'],
            ":adresse" => $tab['adresse'],
            ":email" => $tab['email'],
            ":tel" => $tab['tel'],
            ":date_naissance" => $tab['date_naissance']
        );
        $exec->execute($donnees);
    }
    
    public function selectWherePatient($idpatient){
        $requete = "SELECT * FROM patients WHERE idpatient = :idpatient;";
        $exec = $this->unPdo->prepare($requete);
        $exec->execute(array(":idpatient" => $idpatient));
        return $exec->fetch();
    }
    
    public function updatePatient($tab){
        $requete = "UPDATE patients SET nom = :nom, prenom = :prenom, adresse = :adresse, email = :email, tel = :tel, date_naissance = :date_naissance WHERE idpatient = :idpatient;";
        $exec = $this->unPdo->prepare($requete);
        $donnees = array(
            ":nom" => $tab['nom'],
            ":prenom" => $tab['prenom'],
            ":adresse" => $tab['adresse'],
            ":email" => $tab['email'],
            ":tel" => $tab['tel'],
            ":date_naissance" => $tab['date_naissance'],
            ":idpatient" => $tab['idpatient']
        );
        $exec->execute($donnees);
    }

    public function selectLikePatients($filtre){
        $requete = "SELECT * FROM patients WHERE 
            nom LIKE :filtre OR 
            prenom LIKE :filtre OR 
            adresse LIKE :filtre OR 
            email LIKE :filtre OR 
            tel LIKE :filtre;";
        $exec = $this->unPdo->prepare($requete);
        $exec->execute(array(":filtre" => "%".$filtre."%"));
        return $exec->fetchAll();
    }
    
    
    public function deletePatient($idpatient){
        $requete = "DELETE FROM patients WHERE idpatient = :idpatient;";
        $exec = $this->unPdo->prepare($requete);
        $exec->execute(array(":idpatient" => $idpatient));
    }

    public function selectAllInfirmiers(){
        $requete = "SELECT * FROM infirmiers;";
        $exec = $this->unPdo->prepare($requete);
        $exec->execute();
        return $exec->fetchAll();
    }
    
    public function insertInfirmier($tab){
        $requete = "INSERT INTO infirmiers VALUES (NULL, :nom, :prenom, :specialite, :email, :tel);";
        $exec = $this->unPdo->prepare($requete);
        $donnees = array(
            ":nom" => $tab['nom'],
            ":prenom" => $tab['prenom'],
            ":specialite" => $tab['specialite'],
            ":email" => $tab['email'],
            ":tel" => $tab['tel']
        );
        $exec->execute($donnees);
    }
    
    public function selectWhereInfirmier($idinfirmier){
        $requete = "SELECT * FROM infirmiers WHERE idinfirmier = :idinfirmier;";
        $exec = $this->unPdo->prepare($requete);
        $exec->execute(array(":idinfirmier" => $idinfirmier));
        return $exec->fetch();
    }
    
    public function selectLikeInfirmiers($filtre){
        $requete = "SELECT * FROM infirmiers WHERE nom LIKE :filtre OR prenom LIKE :filtre OR specialite LIKE :filtre OR email LIKE :filtre OR tel LIKE :filtre;";
        $exec = $this->unPdo->prepare($requete);
        $exec->execute(array(":filtre" => "%" . $filtre . "%"));
        return $exec->fetchAll();
    }
    
    public function updateInfirmier($tab){
        $requete = "UPDATE infirmiers SET nom = :nom, prenom = :prenom, specialite = :specialite, email = :email, tel = :tel WHERE idinfirmier = :idinfirmier;";
        $exec = $this->unPdo->prepare($requete);
        $donnees = array(
            ":nom" => $tab['nom'],
            ":prenom" => $tab['prenom'],
            ":specialite" => $tab['specialite'],
            ":email" => $tab['email'],
            ":tel" => $tab['tel'],
            ":idinfirmier" => $tab['idinfirmier']
        );
        $exec->execute($donnees);
    }
    
    public function deleteInfirmier($idinfirmier){
        $requete = "DELETE FROM infirmiers WHERE idinfirmier = :idinfirmier;";
        $exec = $this->unPdo->prepare($requete);
        $exec->execute(array(":idinfirmier" => $idinfirmier));
    }
    
    /****************** Gestion des vaccins ***********************/
    public function selectAllVaccins() {
        $requete = "SELECT * FROM vaccins;";
        $exec = $this->unPdo->prepare($requete);
        $exec->execute();
        return $exec->fetchAll();
    }
    
    public function insertVaccin($tab) {
        $requete = "INSERT INTO vaccins (nom) VALUES (:nom);";
        $exec = $this->unPdo->prepare($requete);
        $donnees = array(
            ":nom" => $tab['nom']
        );
        $exec->execute($donnees);
    }
    
    public function selectWhereVaccin($idvaccin) {
        $requete = "SELECT * FROM vaccins WHERE idvaccin = :idvaccin;";
        $exec = $this->unPdo->prepare($requete);
        $exec->execute(array(":idvaccin" => $idvaccin));
        return $exec->fetch();
    }
    
    public function updateVaccin($tab) {
        $requete = "UPDATE vaccins 
                    SET nom = :nom
                    WHERE idvaccin = :idvaccin;";
        $exec = $this->unPdo->prepare($requete);
        $donnees = array(
            ":nom" => $tab['nom'],
            ":idvaccin" => $tab['idvaccin']
        );
        $exec->execute($donnees);
    }
    
    public function deleteVaccin($idvaccin) {
        $requete = "DELETE FROM vaccins WHERE idvaccin = :idvaccin;";
        $exec = $this->unPdo->prepare($requete);
        $exec->execute(array(":idvaccin" => $idvaccin));
    }
    
    public function selectLikeVaccins($filtre) {
        $requete = "SELECT * FROM vaccins WHERE 
            nom LIKE :filtre;";
        $exec = $this->unPdo->prepare($requete);
        $exec->execute(array(":filtre" => "%" . $filtre . "%"));
        return $exec->fetchAll();
    }
    

    
    
    public function selectAllRDVs() {
        $requete = "SELECT * FROM RDV;";
        $exec = $this->unPdo->prepare($requete);
        $exec->execute();
        return $exec->fetchAll();
    }
    
    public function insertRDV($tab) {
        $requete = "INSERT INTO RDV (dateRendezVous, motif, idpatient, idinfirmier, idvaccin) 
                    VALUES (:dateRendezVous, :motif, :idpatient, :idinfirmier, :idvaccin);";
        $exec = $this->unPdo->prepare($requete);
        $donnees = array(
            ":dateRendezVous" => $tab['dateRendezVous'],
            ":motif" => $tab['motif'],
            ":idpatient" => $tab['idpatient'],
            ":idinfirmier" => $tab['idinfirmier'],
            ":idvaccin" => $tab['idvaccin']
        );
        $exec->execute($donnees);
    }
    
    public function selectWhereRDV($idrendezvous) {
        $requete = "SELECT * FROM RDV WHERE idrendezvous = :idrendezvous;";
        $exec = $this->unPdo->prepare($requete);
        $exec->execute(array(":idrendezvous" => $idrendezvous));
        return $exec->fetch();
    }
    
    public function updateRDV($tab) {
        $requete = "UPDATE RDV 
                    SET dateRendezVous = :dateRendezVous, motif = :motif, 
                        idpatient = :idpatient, idinfirmier = :idinfirmier, idvaccin = :idvaccin 
                    WHERE idrendezvous = :idrendezvous;";
        $exec = $this->unPdo->prepare($requete);
        $donnees = array(
            ":dateRendezVous" => $tab['dateRendezVous'],
            ":motif" => $tab['motif'],
            ":idpatient" => $tab['idpatient'],
            ":idinfirmier" => $tab['idinfirmier'],
            ":idvaccin" => $tab['idvaccin'],
            ":idrendezvous" => $tab['idrendezvous']
        );
        $exec->execute($donnees);
    }
    
    public function deleteRDV($idrendezvous) {
        $requete = "DELETE FROM RDV WHERE idrendezvous = :idrendezvous;";
        $exec = $this->unPdo->prepare($requete);
        $exec->execute(array(":idrendezvous" => $idrendezvous));
    }
    
    public function selectLikeRDVs($filtre) {
        $requete = "SELECT * FROM RDV WHERE 
            dateRendezVous LIKE :filtre OR 
            motif LIKE :filtre OR 
            idpatient LIKE :filtre OR 
            idinfirmier LIKE :filtre OR 
            idvaccin LIKE :filtre;";
        $exec = $this->unPdo->prepare($requete);
        $exec->execute(array(":filtre" => "%".$filtre."%"));
        return $exec->fetchAll();
    }
    
    /****************** Gestion des User **************************/
    
    public function verifConnexion($email, $mdp){
        $requete = "select * from user where email = :email and mdp = :mdp;";
        $exec = $this->unPdo->prepare ($requete);
        $donnees = array("email"=>$email,":mdp"=>$mdp);
        $exec->execute ($donnees);
        return $exec->fetch();
    }

}
?>