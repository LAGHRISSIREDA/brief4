<?php

include "connexion.php";
//update infos et route vers dashboard
// echo'test1';
if(isset($_POST['submitinfos']) && $_POST['user']!="" && $_POST['date']!=0 && $_POST['quantity']!=0&& $_POST['date']!="" && $_POST['quantity']!=""){
    

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
}else{
    header('location:dashboard.php');
}

?>