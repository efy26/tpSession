<?php
    session_start();

    $method = $_SERVER['REQUEST_METHOD'];


    if ($method == "POST") {
        if (isset($_POST["btn"])) {
            $name = $_POST["name"];
            $mail = $_POST["mail"];
            $username = $_POST["username"];
            $password = $_POST["password"];
    
            $_SESSION["name"] = $name;
            $_SESSION["mail"] = $mail;
            $_SESSION["username"] = $username;
            $_SESSION["password"] = md5($password);
    
            header('Location: login.php');
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>register</title>
</head>
<body>
    <div id="all">
        <div>
            <h1>S'enregistrer</h1>
        </div>
        <div >
            <div>
                <form action="index.php" id="form" method="post">
                    <input type="text" name="name" placeholder="Nom complet" required="required">
                    <input type="email" name="mail" placeholder="Adresse email" required="required">
                    <input type="text" name="username" placeholder="Username" required="required">
                    <input type="password" name="password" placeholder="Mot de passe" required="required">
                    <input type="submit" name = "btn" value="Créer un compte" id="submit">
                </form>
            </div>
            <div>
                <p id="paragraphe-lien">Déjà membre ? <a href="login.php">connectez-vous !</a></p>
            </div>
            
        </div>
    </div>
</body>
</html>