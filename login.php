<?php 
    session_start();
    include "connexion.php";
    if(isset($_POST['submit'])){
    if(isset($_POST['user'])&&!empty($_POST['password']))
    {   

        $sql = 'select * from users where username=:user and password=:password';
        $req = $pdo->prepare($sql);
        $req->execute(["user"=>$_POST['user'],
            "password"=>$_POST['password']
        ]);

        $user = $req->fetch();

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