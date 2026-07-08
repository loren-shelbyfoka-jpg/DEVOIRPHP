<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <title>Document</title>
<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Segoe UI',sans-serif;
}

body{
    background:#f5f7fc;
}

header{

    width:100%;
    padding:18px 50px;
    background:white;
    display:flex;
    justify-content:space-between;
    align-items:center;
    box-shadow:0 4px 15px rgba(0,0,0,.06);

}



.logo{

    display:flex;
    align-items:center;
    gap:15px;

}

.logo-icon{

    width:60px;
    height:60px;
    border-radius:18px;
    background:linear-gradient(135deg,#2d7ff9,#7d4cff);
    color:white;
    display:flex;
    justify-content:center;
    align-items:center;
    font-size:28px;

}

.logo h2{

    color:#1d2440;
    font-size:28px;

}

.logo p{

    color:#888;
    font-size:14px;

}



nav{

    background:#fff;
    border:1px solid #ececec;
    border-radius:18px;
    padding:8px;
    display:flex;
    gap:10px;

}

nav a{

    text-decoration:none;
    color:#394150;
    padding:15px 25px;
    border-radius:14px;
    transition:.35s;
    font-weight:500;

}

nav a i{

    margin-right:10px;

}

nav a:hover{

    background:#f2f3ff;

}



.active{

    background:linear-gradient(135deg,#2d7ff9,#7d4cff);
    color:white;

    box-shadow:0 8px 20px rgba(104,81,255,.35);

}



.right{

    display:flex;
    align-items:center;
    gap:20px;

}

.notification{

    width:50px;
    height:50px;
    border-radius:15px;
    border:1px solid #ececec;
    display:flex;
    justify-content:center;
    align-items:center;
    font-size:20px;
    cursor:pointer;
    position:relative;
    background:white;

}

.notification::after{

    content:'';
    width:10px;
    height:10px;
    border-radius:50%;
    background:#5b5bff;
    position:absolute;
    top:12px;
    right:12px;

}

.profile{

    display:flex;
    align-items:center;
    gap:12px;
    border:1px solid #ececec;
    padding:10px 18px;
    border-radius:16px;
    cursor:pointer;

}

.profile i:first-child{

    color:#3a7bfd;
    font-size:28px;

}

.profile span{

    font-weight:600;
    color:#333;

}

.profile i:last-child{

    color:#777;

}



@media(max-width:1100px){

header{

flex-direction:column;
gap:25px;

}

nav{

flex-wrap:wrap;
justify-content:center;

}
}
</style>
</head>
<body>
    <header>

<div class="logo">

<div class="logo-icon">

<i class="fa-solid fa-wallet"></i>

</div>

<div>

<h2>WalletApp</h2>

<p>Votre portefeuille, en toute simplicité</p>

</div>

</div>

<nav>

<a href="http://localhost:8000/creer-wallet" class="active">

<i class="fa-solid fa-wallet"></i>

Créer Wallet

</a>

<a href="http://localhost:8000/list-transaction">

<i class="fa-solid fa-list"></i>

Liste Transactions

</a>

<a href="http://localhost:8000/faire-transaction">

<i class="fa-solid fa-circle-plus"></i>

Nouvelle Transaction

</a>

</nav>

<div class="right">

<div class="notification">

<i class="fa-regular fa-bell"></i>

</div>

<div class="profile">

<i class="fa-solid fa-circle-user"></i>

<span>Utilisateur</span>

<i class="fa-solid fa-chevron-down"></i>

</div>

</div>

</header>
    
</body>
</html>