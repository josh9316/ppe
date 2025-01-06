<h3>Ajout d'un infirmier</h3>

<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<style>
    .form-container {
        background-color: white; /* White background for the form */
        border-radius: 8px; /* Rounded corners */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow */
        padding: 2rem; /* Padding around the form */
    }
    .form-label {
        font-weight: bold; /* Bold labels for better visibility */
    }
    .btn-custom {
        background-color: #007bff; /* Custom button color */
        color: white; /* White text on buttons */
    }
    .btn-custom:hover {
        background-color: #0056b3; /* Darker shade on hover */
    }
    
</style>

<div class="container mt-5">
    <div class="form-container">
        <h2 class="mb-4 text-center"><?= ($leInfirmier != null) ? 'Modifier Coach' : 'Ajouter Coach' ?></h2>
        <form method="post">
            <div class="form-group">
                <label for="nom" class="form-label">Nom Coach</label>
                <input type="text" class="form-control" id="nom" name="nom" value="<?= ($leInfirmier != null) ? htmlspecialchars($leInfirmier['nom']) : '' ?>" required>
            </div>
            <div class="form-group">
                <label for="prenom" class="form-label">Prénom du Coach</label>
                <input type="text" class="form-control" id="prenom" name="prenom" value="<?= ($leInfirmier != null) ? htmlspecialchars($leInfirmier['prenom']) : '' ?>" required>
            </div>
            <div class="form-group">
                <label for="specialite" class="form-label">Spécialité</label>
                <input type="text" class="form-control" id="specialite" name="specialite" value="<?= ($leInfirmier != null) ? htmlspecialchars($leInfirmier['specialite']) : '' ?>" required>
            </div>
            <div class="form-group">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?= ($leInfirmier != null) ? htmlspecialchars($leInfirmier['email']) : '' ?>" required>
            </div>
            <div class="form-group">
                <label for="tel" class="form-label">Téléphone</label>
                <input type="tel" class="form-control" id="tel" name="tel" value="<?= ($leInfirmier != null) ? htmlspecialchars($leInfirmier['tel']) : '' ?>" required>
            </div>
            <div class="d-flex justify-content-between">
                <button type="reset" class="btn btn-secondary">Annuler</button>
                <button type="submit" class="btn btn-custom" name="<?= ($leInfirmier != null) ? 'Modifier' : 'Valider' ?>">
                    <?= ($leInfirmier != null) ? 'Modifier' : 'Valider' ?>
                </button>
            </div>
            <?= ($leInfirmier != null) ? '<input type="hidden" name="idinfirmier" value="'.htmlspecialchars($leInfirmier['idinfirmier']).'">' : '' ?>
        </form>
    </div>
</div>


