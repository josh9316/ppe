<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-5">
    <h3 class="mb-4">Liste des patients (<?= count($lesPatients) ?>)</h3>

    <form method="post" class="mb-4">
        <div class="input-group">
            <input type="text" name="filtre" class="form-control" placeholder="Filtrer par..." aria-label="Filtrer par">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit" name="Filtrer">Filtrer</button>
            </div>
        </div>
    </form>

    <table class="table table-bordered table-striped">
        <thead class="thead-light">
            <tr>
                <th>Id Patient</th>
                <th>Nom Patient</th>
                <th>Prénom</th>
                <th>Adresse Postale</th>
                <th>Email</th>
                <th>Téléphone</th>
                <th>Date de Naissance</th>
                <th>Opération</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (isset($lesPatients)) {
                foreach ($lesPatients as $unPatient) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($unPatient['idpatient']) . "</td>";
                    echo "<td>" . htmlspecialchars($unPatient['nom']) . "</td>";
                    echo "<td>" . htmlspecialchars($unPatient['prenom']) . "</td>";
                    echo "<td>" . htmlspecialchars($unPatient['adresse']) . "</td>";
                    echo "<td>" . htmlspecialchars($unPatient['email']) . "</td>";
                    echo "<td>" . htmlspecialchars($unPatient['tel']) . "</td>";
                    echo "<td>" . htmlspecialchars($unPatient['date_naissance']) . "</td>";
                    echo "<td>";
                    echo "<a href='index.php?page=2&action=sup&idpatient=" . htmlspecialchars($unPatient['idpatient']) . "'><img src='images/supprimer.png' height='30' width='30' alt='Supprimer'></a>";
                    echo "<a href='index.php?page=2&action=edit&idpatient=" . htmlspecialchars($unPatient['idpatient']) . "'><img src='images/editer.png' height='30' width='30' alt='Modifier'></a>";
                    echo "</td>";
                    echo "</tr>";
                }
            }
            ?>
        </tbody>
    </table>
    <br><br><br>
</div>