<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Wallet</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <!-- Informations du titulaire -->
    <div class="card">
        <div class="title">
            <span class="icon">👤</span>
            <h2>Informations du Titulaire</h2>
        </div>

        <form>
            <div class="row">
                <div class="input-group">
                    <label>Nom</label>
                    <input type="text" placeholder="Entrez le nom">
                </div>

                <div class="input-group">
                    <label>Prénom</label>
                    <input type="text" placeholder="Entrez le prénom">
                </div>
            </div>

            <div class="row">
                <div class="input-group">
                    <label>Téléphone</label>
                    <input type="text" placeholder="Ex: 07 12 34 56 78">
                </div>

                <div class="input-group">
                    <label>Code Wallet</label>
                    <input type="text" placeholder="Entrez le code wallet">
                </div>
            </div>

            <div class="input-group">
                <label>Solde (FCFA)</label>
                <input type="number" placeholder="Entrez le solde">
            </div>

            <button class="btn-blue">
                Enregistrer le Wallet
            </button>
        </form>
    </div>

    <!-- Transaction -->
    <div class="card">
        <div class="title">
            <span class="icon">🔄</span>
            <h2>Nouvelle Transaction</h2>
        </div>

        <form>
            <div class="row">
                <div class="input-group">
                    <label>Code Transaction</label>
                    <input type="text" placeholder="Entrez le code transaction">
                </div>

                <div class="input-group">
                    <label>Montant (FCFA)</label>
                    <input type="number" placeholder="Entrez le montant">
                </div>
            </div>

            <div class="row">
                <div class="input-group">
                    <label>Date et Heure</label>
                    <input type="datetime-local">
                </div>

                <div class="input-group">
                    <label>Type</label>
                    <select>
                        <option>Sélectionnez le type</option>
                        <option>Dépôt</option>
                        <option>Retrait</option>
                    </select>
                </div>
            </div>

            <div class="type-buttons">
                <button type="button" class="depot">
                    ↑ Dépôt
                </button>

                <button type="button" class="retrait">
                    ↓ Retrait
                </button>
            </div>

            <button class="btn-purple">
                Ajouter la Transaction
            </button>
        </form>
    </div>

</div>

</body>
</html>