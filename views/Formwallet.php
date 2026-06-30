<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Wallet</title>
</head>
<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Segoe UI, sans-serif;
}

body{
    background:#f5f6fa;
    padding:40px;
}

.container{
    max-width:1200px;
    margin:auto;
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:25px;
}

.card{
    background:white;
    padding:25px;
    border-radius:15px;
    box-shadow:0 5px 20px rgba(0,0,0,0.08);
}

.title{
    display:flex;
    align-items:center;
    gap:10px;
    margin-bottom:25px;
}

.icon{
    width:35px;
    height:35px;
    display:flex;
    align-items:center;
    justify-content:center;
    background:#eef2ff;
    border-radius:10px;
}

.title h2{
    font-size:20px;
    color:#1e293b;
}

.row{
    display:flex;
    gap:15px;
    margin-bottom:15px;
}

.input-group{
    flex:1;
    display:flex;
    flex-direction:column;
}

.input-group label{
    margin-bottom:8px;
    font-size:14px;
    color:#334155;
}

input,
select{
    height:45px;
    border:1px solid #dcdfe6;
    border-radius:8px;
    padding:0 12px;
    outline:none;
}

input:focus,
select:focus{
    border-color:#4f46e5;
}

.type-buttons{
    display:flex;
    justify-content:center;
    gap:15px;
    margin:20px 0;
}

.depot{
    width:120px;
    height:55px;
    border:none;
    border-radius:10px;
    background:#eafaf1;
    color:#16a34a;
    cursor:pointer;
}

.retrait{
    width:120px;
    height:55px;
    border:none;
    border-radius:10px;
    background:#fdecec;
    color:#dc2626;
    cursor:pointer;
}

.btn-blue{
    width:100%;
    height:48px;
    border:none;
    border-radius:8px;
    color:white;
    font-size:15px;
    cursor:pointer;
    background:linear-gradient(
        90deg,
        #2563eb,
        #1d4ed8
    );
}

.btn-purple{
    width:100%;
    height:48px;
    border:none;
    border-radius:8px;
    color:white;
    font-size:15px;
    cursor:pointer;
    background:linear-gradient(
        90deg,
        #7c3aed,
        #8b5cf6
    );
}

.btn-blue,
.btn-purple{
    margin-top:10px;
}

@media(max-width:900px){

    .container{
        grid-template-columns:1fr;
    }

    .row{
        flex-direction:column;
    }
} 
</style>
<body>

<div class="container">

    
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


            <button class="btn-blue" type="submit">
                Enregistrer le Wallet
            </button>
        </form>
    </div>

    
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