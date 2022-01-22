<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/login.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="login.php" method="post">
            <table>
                <tr>
                    <td><label for="username">UserName</label></td>
                    <td><input type="text" id="username" class="username"></td>
                </tr>
                <tr>
                    <td><label for="password">password</label></td>
                    <td><input type="text" id="password" class="password"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Submit"></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>