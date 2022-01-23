<?php
// On se connecte à là base de données

include "connexion.php";

$search ="";
    
    $sql = 'SELECT * FROM  `products` ORDER BY `id`;';
    
    // On prépare la requête
    $query = $pdo->prepare($sql);
    
    // On exécute
    $query->execute();


// On récupère les valeurs dans un tableau associatif
$articles = $query->fetchAll(PDO::FETCH_ASSOC);

// On détermine sur quelle page on se trouve
if(isset($_GET['page']) && !empty($_GET['page'])){
    $currentPage = (int) strip_tags($_GET['page']);
}else{
    $currentPage = 1;
}

// On détermine le nombre total d'articles
$sql = 'SELECT COUNT(*) AS produits FROM `products`;';

// On prépare la requête
$query = $pdo->prepare($sql);

// On exécute
$query->execute();

// On récupère le nombre d'articles
$result = $query->fetch();

$nbArticles = (int) $result['produits'];

// On détermine le nombre d'articles par page
$parPage = 5;

// On calcule le nombre de pages total
$pages = ceil($nbArticles / $parPage);

// suite

// Calcul du 1er article de la page
$premier = ($currentPage * $parPage) - $parPage;

if(isset($_POST['search'])){
 
        $search = $_POST['searchname'];
        $sql = 'SELECT * FROM products where users=:name  ORDER BY id DESC LIMIT :premier, :parpage;';
  
        $query->bindValue(':name', $search, PDO::PARAM_STR);
    }else{
        $sql = 'SELECT * FROM `products` ORDER BY `id` DESC LIMIT :premier, :parpage;';
       
    }
// On prépare la requête
$query = $pdo->prepare($sql);

if(isset($_POST['search'])){
     $query->bindValue(':name', $search, PDO::PARAM_STR);
}
$query->bindValue(':premier', $premier, PDO::PARAM_INT);
$query->bindValue(':parpage', $parPage, PDO::PARAM_INT);


// On exécute
$query->execute();

// On récupère les valeurs dans un tableau associatif
$produits = $query->fetchAll(PDO::FETCH_ASSOC);

?>