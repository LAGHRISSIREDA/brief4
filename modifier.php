<?php

include "connexion.php";
//update infos et route vers dashboard
echo'test1';
if(isset($_POST['submitinfos'])){

    $sql ="update products set
            users = :user,
            dates = :date,
            quantity=:qt
            where id=:ids
            ";
    $req = $pdo->prepare($sql);
    $req->execute([
        "user"=>$_POST['user'],
        "date"=>$_POST['date'],
        "qt"=>$_POST['quantity'],
        "ids"=>$_POST['idp']

    ]);
    header('location:dashboard.php');
}

?>