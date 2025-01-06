<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">



<div class="container mt-5">
    <h2 class="mb-4">Insertion d'un Rendez-vous</h2>

    <form method="post">
        <div class="form-group">
            <label for="idpatient">Patient</label>
            <select name="idpatient" id="idpatient" class="form-control" required>
                <option value="">Sélectionner un patient</option>
                <?php foreach ($lesPatients as $patient): ?>
                    <option value="<?= htmlspecialchars($patient['idpatient']) ?>"><?= htmlspecialchars($patient['nom']) ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group">
            <label for="idinfirmier">Infirmier</label>
            <select name="idinfirmier" id="idinfirmier" class="form-control" required>
                <option value="">Sélectionner un infirmier</option>
                <?php foreach ($lesInfirmiers as $infirmier): ?>
                    <option value="<?= htmlspecialchars($infirmier['idinfirmier']) ?>"><?= htmlspecialchars($infirmier['nom']) ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group">
            <label for="idvaccin">Vaccin</label>
            <select name="idvaccin" id="idvaccin" class="form-control" required>
                <option value="">Sélectionner un vaccin</option>
                <?php foreach ($lesVaccins as $vaccin): ?>
                    <option value="<?= htmlspecialchars($vaccin['idvaccin']) ?>"><?= htmlspecialchars($vaccin['nom']) ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group">
            <label for="dateRendezVous">Date du rendez-vous</label>
            <input type="datetime-local" name="dateRendezVous" id="dateRendezVous" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="motif">Motif</label>
            <textarea name="motif" id="motif" class="form-control" rows="4" required></textarea>
        </div>

        <div class="d-flex justify-content-between">
            <button type="reset" class="btn btn-secondary">Annuler</button>
            <button type="submit" class="btn btn-primary" name="Valider">Valider</button>
        </div>
    </form>
</div>