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
        <form class="form" action="ajouter.php" method="post"  enctype='multipart/form-data' >
            <div class="pageTitle title">Add New Product </div>
            <div class="secondaryTitle title">Please fill this form </div>
            <input type="text" name="user" id="name" required class="name formEntry" placeholder="Name Product" />
            <input type="number" placeholder="Cost" name="date" id="date" required class="email formEntry"/>
            <input type="number" name="quantity" required class="email formEntry" id="message" placeholder="quantity">
            <input type="file" name="file" required class="file formEntry" id="message" placeholder="images">
            <button name="submit" class="submit formEntry" >Submit</button>
          </form>
    </div>
  
    
    <script src="script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>