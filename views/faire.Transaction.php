<!DOCTYPE html>
<html lang="fr">

<head>

<meta charset="UTF-8">

<title>Nouvelle Transaction</title>

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Arial;
}

body{

background:#f4f6fb;
display:flex;
flex-direction:column;
height:100vh;

}

.container{

width:620px;
background:white;
padding:30px;
margin:auto;
border-radius:15px;
box-shadow:0 0 15px rgba(0,0,0,.08);

}

h2{

margin-bottom:20px;

}



form{
    display:grid;
    grid-template-columns:1fr 1fr ;
    gap:15px;

}

input,select{

padding:12px;
border:1px solid #ddd;
border-radius:8px;

}

.buttons{

margin:20px 0;
display:flex;
justify-content:center;
gap:20px;


}

.depot{

background:#dff9ec;
color:green;

}

.retrait{

background:#ffe4e4;
color:red;

}

.buttons .buton{

padding:12px 30px;
border:none;
border-radius:8px;
cursor:pointer;

}
.error{
    color:red;
    font-size:14px;
}

.valider{

width:10%;
padding:14px;
margin:auto;
background:#7a3cff;
color:white;
border:none;
border-radius:20px;
cursor:pointer;
margin-left:600px

}

</style>

</head>

<body>
    <?php require_once(__DIR__."/partials/header.partial.php")?>

<div class="container">

<?php if(isset($result)){if ($result===TRUE) {
    echo "PRODUITS AJOUTE AVEC SUCCES";
}elseif ($result===FALSE) {
    echo "echec de sauvegarde";}
    }else {
        echo "";
    }
?>
<h2>Nouvelle Transaction</h2>

<form action="http://localhost:8000/AjouterTransaction" method='post'>

<div class='error'><?php echo $errors['wallet']??"";?> <input name="tel" type="text" placeholder="Tel_wallet"></div>
<div class='error'><?php echo $errors['montant']??"";?><input  name="montant" type="number" placeholder="Montant"></div>

<input name="date" type="date">

<select name="type">

<option>DEPOT</option>

<option>RETRAIT</option>

</select>

</div>

<div class="buttons">

<div  class="buton depot">Dépôt</div>

<div class="buton retrait">Retrait</div>

</div>
<div>
<button type="submit" name="btn" value="ajouter"  class="valider">

Ajouter la Transaction

</button>
</div>

</form>

</body>

</html>