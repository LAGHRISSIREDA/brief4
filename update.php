<?php

session_start();
if(!isset($_SESSION['user'])&&!isset($_SESSION['password'])&&empty($_SESSION['user'])&&empty($_SESSION['password'])){
    header('location:index.php');
  }
//connexion database

include "connexion.php";
//verification

if(isset($_GET['id'])&&!empty($_GET['id'])){
    $sql = 'select * from products where id = :id';
    $req = $pdo->prepare($sql);
    $req->execute([
        "id"=>$_GET['id']
    ]);

    $produit = $req->fetch();
    // if true il y a un enregistrement

    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/create.css">
    <title>Document</title>
</head>
<body>
<div class="container-form">
        <form class="form" action="modifier.php" method="post"  enctype='multipart/form-data' >
            <div class="pageTitle title">Add New Product </div>
            <div class="secondaryTitle title">Please fill this form </div>
            <input type="text" style="display:none" value="<?=$produit['id']?>" name="idp" id="name" class="name formEntry" placeholder="Name Product" />
            <input type="text" value="<?=$produit['users']?>" name="user" id="name" class="name formEntry" placeholder="Name Product" />
            <input type="date" value="<?=$produit['dates']?>" name="date" id="date" class="email formEntry"/>
            <input type="number" value="<?=$produit['quantity']?>" name="quantity" class="email formEntry" id="message" placeholder="quantity">
            <button name="submitinfos" class="submit formEntry" >Submit</button>
          </form>
    </div>
  
    
    <script src="script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>