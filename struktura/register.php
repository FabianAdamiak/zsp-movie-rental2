<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/zsp-movie rental2/css/style.css">
</head>
<body>
    <div class="wrapp">
        <?php
        if(isset($_POST["loginRegistration"]) && isset($_POST["passwordRegistration"])){
            $con = new mysqli("localhost", "root", "", "zsp-movie-rental2");
            $sql = "INSERT INTO `users` (`id`, `login`, `password`, `is_admin`) VALUES (NULL, '".$_POST["loginRegistration"]."', '".$_POST["passwordRegistration"]."', '0');";
            $con->query($sql);
            $con->close();
            header("Location: ". "/zsp-movie-rental2/login.php");
        }
        ?>
        <div class="header">
            <h3>strona na ktorej mozesz sie zarejstrowac</h3>
        </div>

        <div class="main" style="justify-content: flex-start; flex-direction: column">
            <div class="aside" style="justify-content: flex-start; flex-direction: column; align-items: center;  align-content: center;">
                <form class="form" method="POST">
                    <p>podaj login</p>
                    <input type="text" name="loginRegistration">
                    <p>podaj haslo</p>
                    <input type="password" name="passwordRegistration">
                    <input type="submit" value="Zarejestruj!">
                </form>
                <div style="display: flex; flex-direction: column; text-align: center; margin-top: 30px; font-weight: bolder; font-size: 20px;">
                    <p style="margin-bottom: 10px;">czy posiadasz juz konto?</p>
                    <a class='headerLink' href='/zsp-movie rental2/sites/login.php'>zaloguj sie tutaj</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>