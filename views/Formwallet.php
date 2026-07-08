<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Informations du titulaire</title>

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Arial, Helvetica, sans-serif;
}

body{
background:#f5f7fb;
display:flex;
flex-direction:column;
height:100vh;
}

.container{

width:600px;
background:white;
margin:auto;
padding:30px;
border-radius:15px;
box-shadow:0 0 15px rgba(0,0,0,.08);

}

h2{

margin-bottom:20px;
color:#333;

}

.form-group{

display:grid;
grid-template-columns:1fr 1fr;
gap:15px;

}

input{

padding:12px;
border:1px solid #ddd;
border-radius:8px;
outline:none;

}

.large{

grid-column:1/3;

}

button{

margin-top:25px;
width:100%;
padding:14px;
background:#2b63ff;
color:white;
border:none;
border-radius:8px;
font-size:16px;
cursor:pointer;

}

button:hover{

background:#1c4ee5;

}

label{

font-size:14px;
margin-bottom:5px;
display:block;

}
.error{
    color: red;
    font-family:Arial;
    font-size:14px;
}

</style>

</head>

<body>
    <?php require_once(__DIR__."/partials/header.partial.php")?>
    

<div class="container">
<div class='error'>
<?php
if (isset($result)) {
    if ($result!==FALSE) {
   echo "Wallet ajouter avec success...";
}else {
    echo "ECHEC!";
}
}else {
     echo "";
}

?>
</div>

<h2>Informations du Titulaire <?php echo $errors['wallet']??""?></h2>
<form action="http://localhost:8000/enregister" method='post'>
<div class="form-group">

<div >
<div class="error"><?php echo $errors["nom"]??"";?></div>
<label>Nom</label>
<input type="text" name='nom'>

</div>

<div>
<div class="error"><?php echo $errors["prenom"]??"";?></div>
<label>Prénom</label>
<input type="text" name='prenom'>

</div>

<div>
<div class="error"><?php echo $errors["tel"]??"";?></div>


<label>Téléphone</label>
<input type="text" name='tel'>

</div>




<button>Enregistrer le Wallet</button>

</div>
</form>

</body>
</html>