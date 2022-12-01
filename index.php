<?php
    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <title>index</title>
</head>
<body>
    <div id="all">
        <div id="alls">
            <div id="alls-1">
                <i id="i" class="bi bi-person-circle"></i>
            </div>
            <p id="paragraphe-index">Bienvenu dans votre compte, <?php echo $_SESSION["name"]?></p>
            <p class="paragraphe-indexs">@<?php echo $_SESSION["username"]?></p>
            <p class="paragraphe-index"><?php echo $_SESSION["mail"]?></p>
            <form action="login.php">
                <input type="submit" name="deconnexion" id="deconnexion" value="Déconnexion">
            </form>
        </div>
    </div>
</body>
</html>