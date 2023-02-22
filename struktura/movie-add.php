<?php 
    if((isset($_POST["title"]) && isset($_POST["year"]) && isset($_POST["genere"]))
    && (!empty($_POST["title"]) && !empty($_POST["year"]) && !empty($_POST["length"]) && !empty($_POST["genere"]))){
        $con = new mysqli("localhost", "root", "", "movies");
        $sql = "INSERT INTO `movies` (`id`, `name`, `year`,`genere_id`,`user_id`, `admin_id`, `renter_id`) VALUES (NULL, '".$_POST["title"]."', '".$_POST["year"]."', '".$_POST["length"]."', '".$_POST["genere"]."', '".$_SESSION["id"]."', NULL, NULL);";
        $con->query($sql);
        header("Location: ". "movie-my.php");
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Filmy</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wrapp">
        <?php include 'header.php';?>

        <div class="main">
            <?php include 'nav.php'; ?>
            <div class="aside">
                <form class='movieAddForm' method="POST">
                    <p>Tytuł</p>
                    <input type="text" name='title'>
                    <p>Rok</p>
                    <input type="text" name='year'>
                    <p>Gatunek</p>
                    <select name="genere">
                        <?php
                            $con = new mysqli("localhost", "root", "", "movies");
                            $sql = "SELECT `id`, `genere` FROM `generes` WHERE 1;";
                            $res = $con->query($sql);
                            while($row = $res->fetch_assoc()){
                                echo "<option value='".$row["id"]."'>".$row["genere"]."</option>";
                            }
                        ?>
                    </select>
                    <input type="submit" value="Dodaj!">
                </form>
            </div>
        </div>

        <?php include 'footer.php'; ?>
    </div>
</body>
</html>