
<h3>Vous êtes <?= $_SESSION['nom'].' '.$_SESSION['prenom']?> et connectés en tant que <?=$_SESSION['role']?> </h3>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Bienvenue sur notre site</title>
    
</head>
<body>
    <header>
        <h1>Bienvenue sur notre site</h1>
        <p>Découvrez un monde de possibilités</p>
    </header>
    <div class="container">
        <div class="section">
            <h2>À propos de nous</h2>
            <p>Nous sommes dédiés à vous offrir les meilleures expériences. Notre équipe travaille sans relâche pour vous apporter des produits et des services de qualité.</p>
            <img src="images/Acceuil.png" alt="Accueil">
        </div>
        <div class="section">
            <h2>Nos Services</h2>
            <p>Explorez nos services exceptionnels qui répondent à vos besoins.</p>
            <ul>
                <li>Vaccination</li>
                <li>Radiologie</li>
                <li>Soin médicaux</li>
            </ul>
        </div>
        <div class="section">
            <h2>Contactez-nous</h2>
            <p>Pour toute question, n'hésitez pas à nous contacter.</p>
            <a href ="https://www.doctolib.fr/" target="_blank" class="cta-button">Nous Contacter</a>
        </div>
    </div>  
    <footer>
        <p>&copy; 2023 Votre Entreprise. Tous droits réservés.</p>
    </footer>
</body>
</html>