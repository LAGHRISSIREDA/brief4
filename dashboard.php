<?php
//lier la connexion
include "pagination.php";
include "connexion.php";

// if(!isset($_POST['search'])){
//     $req = 'select * from products';
//     $stat = $pdo->prepare($req);
//     $stat->execute();
//     $records = $stat->fetchAll();
// }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/dashboard.css">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="logo">
            <img src="images/logoW.png" alt="">
        </div>
        <div class="logout">
            <a href="logout.php">Log Out</a>
        </div>
    </header>
    <div class="container">
        <div class="search">
            <form action="search.php" method="post">
                <input type="text" name="search" class="search">
                <button type="submit">Search</button>
            </form>
        </div>
        <div class="products">
            <div class="aside">
                <h3>Dashboard</h3>

            </div>
            <div class="table">
            <table>
                   <tr>
                       <th>Images</th>
                       <th>Name</th>
                       <th>Date</th>
                       <th>Quantity</th>
                       <th>Update Or Delete</th>
                   </tr>
                   <?php foreach($produits as $record):?>
                        <tr>
                        <td><img class="images" src="upload/<?=$record['images']?>" alt=""></td>
                        <td><?= $record['users']?></td>
                        <td><?= $record['dates']?></td>
                        <td><?= $record['quantity']?></td>
                        <td>
                            <a href="delete.php?id=<?= $record['id']?>"><ion-icon name="trash-outline"></ion-icon></a>
                            <a href="update.php?id=<?= $record['id']?>"><ion-icon name="create-outline"></ion-icon></a>
                        </td>
                    </tr>
                    <?php endforeach;?>
                
            </table>
            </div>
        </div>
    </div>
    <div class="add">
      <div class="vide"></div>
      <div class="footer">
        <div class="paginnation">
                        <ol>
                                    <?php for($page = 1; $page <= $pages; $page++): ?>
                                    <!-- Lien vers chacune des pages (activé si on se trouve sur la page correspondante) -->
                                    <li class="<?= ($currentPage == $page) ? "active" : '' ?>">
                                    <a href="dashboard.php?page=<?= $page ?>" class="page-link"><?= $page ?></a>
                                    </li>
                        <?php endfor ?>
                        </ol>
            </div>
            <div class="new">
                        <form action="create.php">
                            <input type="submit" value="Add New Product" name="new" class="search">
                        </form>
            </div>
      </div>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>