<?php
    session_start();
    $method = $_SERVER['REQUEST_METHOD'];

    if ($method == "POST") {
        if (isset($_POST["btn1"])) {
            $usernames = $_POST["usernames"];
            $passwords = $_POST["passwords"];

            $_SESSION["usernames"] = $usernames;
            $_SESSION["passwords"] = md5($passwords);
             
            
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
    <title>login</title>
</head>
<body>
    <div id="all">
        <div>
            <h1>Connexion</h1>
        </div>
        <div >
            <div>
                <form action="" id="form" method="post">
                    <input type="text" name="usernames" placeholder="Username" required="required">
                    <input type="password" name="passwords" placeholder="password" required="required">
                    <?php 
                        if (isset($_POST["usernames"]) and isset($_POST["passwords"])) {
                            if ($_SESSION["usernames"] == $_SESSION["username"] and $_SESSION["passwords"] == $_SESSION["password"]) {
                                header('Location: index.php');
                                
                            }else {
                                echo "<p id='p-echo' style='color:red;'>username ou password incorrect</p>";
                            }
                        }
                    ?>
                    <input type="submit" name="btn1" value="Se connceter" id="submit">
                </form>
            </div>
            <div>
                <p id="paragraphe-lien">Pas encore membre ? <a href="register.php">créer un compte !</a></p>
            </div>
        </div>
    </div>
</body>
</html>