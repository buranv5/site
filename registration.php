<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body class="backgroung">
    <div class='autorisation'>
        <h2>Registration</h2>
            <form action="" method="post">
                <p>Name: <input type="text" required name="nameIF"/></p>
                <p>Password: <input type="text" required name="pwdIF"/></p>
                <input type="submit" value='Regisrtate'>
            </form>
    </div>
</body>
</html>

<?php 
    $userName = $_POST["nameIF"];
    $userPwd = $_POST["pwdIF"];
    if($userName != '' && $userPwd != ''){
        $conn = new mysqli("localhost", "root", "0209", "site");
        $query = "insert into users values(0, '$userName', '$userPwd');";
        $conn->query($query);
        header("Location: index.php");
    }
?>