<h3>Liste des infirmiers (<?= count($lesInfirmiers) ?>)</h3>

<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-5">
    <h2 class="mb-4">Liste des Infirmiers</h2>

    <form method="post" class="mb-4">
        <div class="input-group">
            <input type="text" name="filtre" class="form-control" placeholder="Filtrer par..." aria-label="Filtrer par">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit" name="Filtrer">Filtrer</button>
            </div>
        </div>
    </form>

    <table class="table table-bordered">
        <thead class="thead-light">
            <tr>
                <th>Id Infirmier</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Spécialité</th>
                <th>Email</th>
                <th>Téléphone</th>
                <th>Opérations</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (isset($lesInfirmiers)) {
                foreach ($lesInfirmiers as $unInfirmier) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($unInfirmier['idinfirmier']) . "</td>";
                    echo "<td>" . htmlspecialchars($unInfirmier['nom']) . "</td>";
                    echo "<td>" . htmlspecialchars($unInfirmier['prenom']) . "</td>";
                    echo "<td>" . htmlspecialchars($unInfirmier['specialite']) . "</td>";
                    echo "<td>" . htmlspecialchars($unInfirmier['email']) . "</td>";
                    echo "<td>" . htmlspecialchars($unInfirmier['tel']) . "</td>";
                    echo "<td>";
                    echo "<a href='index.php?page=3&action=sup&idinfirmier=" . htmlspecialchars($unInfirmier['idinfirmier']) . "'><img src='images/supprimer.png' height='30' width='30' alt='Supprimer'></a>";
                    echo "<a href='index.php?page=3&action=edit&idinfirmier=" . htmlspecialchars($unInfirmier['idinfirmier']) . "'><img src='images/editer.png' height='30' width='30' alt='Modifier'></a>";
                    echo "</td>";
                    echo "</tr>";
                }
            }
            ?>
        </tbody>
    </table>
    <br><br><br>
</div>
