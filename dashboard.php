<?php
//lier la connexion
include "connexion.php";
// creation d'un tableau
$products=[
    [
        "id"=>1,
        "name"=>"bracelet",
        "date"=>"11/11/11",
        "quantity"=>23
    ],
    [
        "id"=>2,
        "name"=>"kamal",
        "date"=>"23/11/11",
        "quantity"=>23
    ],
    [
        "id"=>3,
        "name"=>"khalid",
        "date"=>"11/22/11",
        "quantity"=>23
    ],
    [
        "id"=>3,
        "name"=>"khalid",
        "date"=>"11/22/11",
        "quantity"=>23
    ],
    [
        "id"=>3,
        "name"=>"khalid",
        "date"=>"11/22/11",
        "quantity"=>23
    ],
    [
        "id"=>3,
        "name"=>"khalid",
        "date"=>"11/22/11",
        "quantity"=>23
    ]
]

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
            <form action="sarch.php" method="post">
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
                <h2>Products</h2>
                   <tr>
                       <th>Images</th>
                       <th>Name</th>
                       <th>Date</th>
                       <th>Quantity</th>
                       <th>Update Or Delete</th>
                   </tr>
                   <?php foreach($products as $value):?>
                        <tr>
                        <td><img class="images" src="images/photo.png" alt=""></td>
                        <td><?= $value['name']?></td>
                        <td><?= $value['date']?></td>
                        <td><?= $value['quantity']?></td>
                        <td>
                            <a href="delete.php?id=<?= $value['id']?>"><ion-icon name="trash-outline"></ion-icon></a>
                            <a href="update.php?id=<?= $value['id']?>"><ion-icon name="create-outline"></ion-icon></a>
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
                            <li>1</li>
                            <li>2</li>
                            <li>3</li>
                            <li>4</li>
                            <li>5</li>
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