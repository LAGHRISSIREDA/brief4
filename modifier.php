<?php

include "connexion.php";
//update infos et route vers dashboard
echo'test1';
if(isset($_POST['submitinfos'])){
    echo'test2';
    $sql ="update products set
            users = :user,
            dates = :date,
            quantity=:qt
            where id=:ids
            ";
            echo'test3';
    $req = $pdo->prepare($sql);
    $req->execute([
        "user"=>$_POST['user'],
        "date"=>$_POST['date'],
        "qt"=>$_POST['quantity'],
        "ids"=>$_POST['idp']

    ]);
    echo'test4';
    header('location:dashboard.php');
}

?>