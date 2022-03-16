<?php 
//ouverrue de la session
    session_start();
    include "connexion.php";
    if(isset($_POST['submit'])){
    if(isset($_POST['user'])&&!empty($_POST['password']))
    {   
        //verification du pass et username
        $sql = 'select * from users where username=:user and password=:password';
        $req = $pdo->prepare($sql);
        $req->execute(["user"=>$_POST['user'],
            "password"=>$_POST['password']
        ]);

        $user = $req->fetch();
        // var_dump($user);
        // if true il y a un enregistrement
        if($user){
            $_SESSION['user']=$_POST['user'];
            $_SESSION['password']=$_POST['password'];
            header('location:dashboard.php');
        }else{
            header('location:index.php');
        }
    }
}
?>