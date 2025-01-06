<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">



<div class="container mt-5">
    <h3 class="mb-4">Ajout d'un Club sportif</h3>

    <form method="post">
        <div class="form-group">
            <label for="nom">Nom du Club</label>
            <input type="text" class="form-control" id="nom" name="nom" value="<?= ($lePatient != null) ? htmlspecialchars($lePatient['nom']) : '' ?>" required>
        </div>
        <div class="form-group">
            <label for="prenom">Prénom & Nom du Président</label>
            <input type="text" class="form-control" id="prenom" name="prenom" value="<?= ($lePatient != null) ? htmlspecialchars($lePatient['prenom']) : '' ?>" required>
        </div>
        <div class="form-group">
            <label for="adresse">Adresse postale</label>
            <input type="text" class="form-control" id="adresse" name="adresse" value="<?= ($lePatient != null) ? htmlspecialchars($lePatient['adresse']) : '' ?>" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="<?= ($lePatient != null) ? htmlspecialchars($lePatient['email']) : '' ?>" required>
        </div>
        <div class="form-group">
            <label for="tel">Téléphone</label>
            <input type="tel" class="form-control" id="tel" name="tel" value="<?= ($lePatient != null) ? htmlspecialchars($lePatient['tel']) : '' ?>" required>
        </div>
        <div class="form-group">
            <label for="date_naissance">Date de creation du Club</label>
            <input type="date" class="form-control" id="date_naissance" name="date_naissance" value="<?= ($lePatient != null) ? htmlspecialchars($lePatient['date_naissance']) : '' ?>" required>
        </div>
        <div class="d-flex justify-content-between">
            <button  type="reset"  class="btn btn-secondary">Annuler</button>
            <button type="submit" class="btn btn-primary" name="<?= ($lePatient != null) ? 'Modifier' : 'Valider' ?>">
                <?= ($lePatient != null) ? 'Modifier' : 'Valider' ?>
            </button>
        </div>
        <?= ($lePatient != null) ? '<input type="hidden" name="idpatient" value="' . htmlspecialchars($lePatient['idpatient']) . '">' : '' ?>
    </form>
</div>