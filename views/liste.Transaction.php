<!DOCTYPE html>
<html lang="fr">

<head>

<meta charset="UTF-8">

<title>Historique</title>

<style>
form{
    padding: 70px;
    font-family: Arial;
    color:blue;
    display:flex;

}
.buton{
    padding-left:30px;
}
button{
    border: solid 2px blue ;
    border-radius:20px;
    color:white;
    background-color:blue;
    width: 100px;
    height:30px;
    
    
}

*{

margin:0;
padding:0;
box-sizing:border-box;
font-family:Arial;

}

body{

background:#f4f6fb;


}

.container{

background:white;
padding:30px;
border-radius:15px;
box-shadow:0 0 15px rgba(0,0,0,.08);


}

h2{

margin-bottom:20px;

}

table{

width:100%;
border-collapse:collapse;

}

th{

background:#f4f4f4;
padding:15px;

}

td{

padding:15px;
text-align:center;
border-bottom:1px solid #eee;

}

.depot{

color:green;
font-weight:bold;

}

.retrait{

color:red;
font-weight:bold;

}

.action{

background:#2b63ff;
color:white;
border:none;
padding:8px 14px;
border-radius:6px;
cursor:pointer;

}

</style>

</head>

<body>
    <?php require_once(__DIR__."/partials/header.partial.php")?>
    <form action="http://localhost:8000/recherchetransactions" method="post">
        <div>
        <label for="">Entrer le code du wallet</label>
        <input type="number" name="code" id="">
        </div>
        
        <div class="buton" >
       
        <button type="submit" name="btn-list" value="recherche">Rechercher</button>
       
        </div>
        
    </form>

<div class="container">

<h2>Historique des Transactions</h2>
<?php $transactions=$transactions?? [];?>
<table>
<thead>
<tr>

<th>Code</th>

<th>Montant</th>

<th>Type</th>

<th>Date</th>




</tr>
</thead>

<?php if(count($transactions)!==0):?>
        <tbody>
            <?php foreach ($transactions as $transaction):?>
                <tr>
                    <td> <?php echo $transaction->getCode(); ?></td>
                    <td> <?php echo $transaction->getMontant(); ?></td>
                    <td> <?php echo $transaction->getType()->value ; ?></td>
                    <td> <?php echo $transaction->getDate()->format('Y-m-d'); ?></td>
                </tr>
            <?php endforeach?>
        </tbody>
    <?php else: echo "Aucune transaction";?>
    <?php endif ?>



</table>

</div>

</body>


</html>