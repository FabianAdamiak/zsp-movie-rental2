<html>
<head>
    <meta charset="UTF-8">
    <title>Tutaj sa twoje filmy</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wrapp">
        <?php
        include '../zsp-movie-rental2/header.php';
        include '../zsp-movie-rental2/nav.php';
        ?>
        <div class="main">
            
            <div class="aside">
                <h1>Twoje filmy</h1>
                <?php
                    $con = new mysqli("localhost", "root", "", "zsp-movie-rental2");
                    $sql = "SELECT  `id`, `name`, `year`, `admin_id` FROM `movies` WHERE `user_id` = '".$_SESSION["id"]."';";
                    $res = $con->query($sql);
                    if(mysqli_num_rows($res) > 0){
                        while($row = $res->fetch_assoc()){
                            echo "<a class='card' href='/movie-details.php?movieId=".$row["id"]."'>";
                            echo "<p>".$row["name"]."</p>";
                            echo "<p>".$row["year"]."r.</p>";
                            echo $row["admin_id"] != null ? "<p style='color: green;'>Zatwierdzony</p>" : "<p style='color: red'>Niezatwierdzony</p>";
                            echo "</a>";
                        }
                    }
                    else{
                        echo "<div style='display: flex; flex-direction: column; align-content: center; justify-content: center; align-items: center;'>";
                        echo "<h2>Nie dodałeś jeszcze żadnego filmu!</h2>";
                        echo "<a class='headerLink' href='movie-add.php'>Dodaj film!</a>";
                        echo "</div>";
                    }
                ?>

                <h1>Wypożyczane</h1>
                <?php
                   {
                        echo "<div style='display: flex; flex-direction: column; align-content: center; justify-content: center; align-items: center;'>";
                        echo "<h2>Nie wypożyczasz jeszcze żadnego filmu!</h2>";
                        echo "<a class='headerLink' href='movie-search.php'>Szukaj film!</a>";
                        echo "</div>";
                    }
                ?>
            </div>
        </div>
        <?php include 'footer.php'; ?>
    </div>
</body>
</html>