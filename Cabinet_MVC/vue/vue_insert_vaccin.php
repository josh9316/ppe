<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    


<div class="container mt-5">
    <h3 class="mb-4">Ajout d'un vaccin</h3>

    <form method="post">
        <div class="form-group">
            <label for="nom">Nom du vaccin</label>
            <input type="text" name="nom" id="nom" class="form-control" value="<?= ($leVaccin != null) ? htmlspecialchars($leVaccin['nom']) : '' ?>" required>
        </div>

        <div class="d-flex justify-content-between">
            <button type="reset" class="btn btn-secondary">Annuler</button>
            <button type="submit" class="btn btn-primary" 
                <?= ($leVaccin != null) ? 'name="Modifier" value="Modifier"' : 'name="Valider" value="Valider"' ?>>
                <?= ($leVaccin != null) ? 'Modifier' : 'Valider' ?>
            </button>
        </div>

        <?= ($leVaccin != null) ? '<input type="hidden" name="idvaccin" value="' . htmlspecialchars($leVaccin['idvaccin']) . '">' : '' ?>
    </form>
</div>