<?php 
//connexion database

include "connexion.php";

//verification

if(isset($_GET['id'])&&!empty($_GET['id'])){
    $sql = 'delete from products where id = :id';
    $req = $pdo->prepare($sql);
    $req->execute([
        "id"=>$_GET['id']
    ]);

    echo "delete success";

    header('Location: dashboard.php');
}

?>