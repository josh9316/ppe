<?php
session_start();
require_once("controleur/controleur.class.php");
//création d'une instance de la class controleur
$unControleur = new Controleur();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cabinet medical</title>
</head>
<body>
<center>

    <h1>Gestion du Cabinet </h1>

    <?php
    if(!isset($_SESSION["email"])){
       require_once("vue/vue_connexion.php");
    }
    if(isset($_POST["Connexion"])){
        $email = $_POST["email"];
        $mdp = $_POST["mdp"];
    }

    if(isset($_POST["Connexion"])){
       $email = $_POST['email'];
       $mdp = $_POST['mdp'];

       $unUser = $unControleur->verifConnexion($email, $mdp);
       if($unUser){

          $_SESSION['nom'] = $unUser['nom'];
          $_SESSION['prenom'] = $unUser['prenom'];
          $_SESSION['email'] = $unUser['email'];
          $_SESSION['role'] = $unUser['role'];
          header("Location: index.php?page=1");

         }else{
           echo "<br> Vérifier les identifiants.";
       }
    }
        if(isset($_SESSION["email"])){

	        echo '

        <h1> Gestion du Cabinet medical</h1><br><br>
        <a href="index.php?page=1"> <img src="images/home.png" height="80" width="80"> </a>

            <a href="index.php?page=2"> <img src="images/icon_Patient.png" height="80" width="80" style="margin-right: 30px"> </a>

        <a href="index.php?page=3"> <img src="images/Infermier.png" height="80" width="80" style="margin-right: 30px"> </a>

        <a href="index.php?page=4"> <img src="images/vaccin.png" height="80" width="80" style="margin-right: 30px"> </a>

        <a href="index.php?page=5"> <img src="images/Rendez-vous-medical.png" height="80" width="80" style="margin-right: 30px"> </a>

        <a href="index.php?page=6"> <img src="images/deconnexion.png" height="80" width="80" style="margin-right: 30px"> </a>
        '   ;
    



            if (isset($_GET['page'])) {
               $page = $_GET['page'];
            }else{
              $page = 1;
            }
            switch ($page) {
               case 1: require_once("controleur/home.php"); break;
               case 2: require_once("controleur/c_patients.php"); break;
               case 3: require_once("controleur/c_infirmier.php"); break;
               case 4: require_once("controleur/c_vaccin.php"); break;
               case 5: require_once("controleur/c_RDV.php"); break;
               case 6 : session_destroy(); unset($_SESSION["email"]);
	    				header("Location: index.php");
	    				break;
            }

        }
    ?>

</center>
<br> 
<div id="footer" ></div>
<script>
    fetch('vue/vue_footer.php')
        .then(response => response.text())
        .then(data => {
            document.getElementById('footer').innerHTML = data;
            document.getElementById('footer').style.backgroundColor = '#f0f0f0'; // Fond gris
            document.getElementById('footer').style.padding = '20px';
        });
</script>



</body>
</html>
