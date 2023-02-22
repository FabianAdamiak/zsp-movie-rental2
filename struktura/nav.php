<div class="nav">
    <ul>
        <li><a href="/zsp-movie-rental2/index.php">glowna strona</a></li>
        <li><a href="/zsp-movie-rental2/movie-search.php">wyszukaj film</a></li>
        <li><a href="/zsp-movie-rental2/movie-my.php">Moje filmy</a></li>
         <li><a href="movie-add.php">Dodaj film</a></li>
    </ul>
    <hr>
    <?php
    if(isset($_SESSION["id"])){
        echo "<ul>";
        echo "<li><a href='/zsp-movie-rental2/movie-my.php'>tutaj sa twoje filmy</a></li>";
        echo "<li><a href='/zsp-movie-rental2/movie-add.php'>dodaj nowy film tutaj</a></li>";
        echo "</ul>";
        echo "<hr>";
        if($_SESSION["isAdmin"])
        {
            echo "<ul>";
            echo "<li><a href='/zsp-movie-rental2/movie-list.php'>tutaj znajduja sie wszytskie filmy</a></li>";
            echo "<li><a href='/zsp-movie-rental2/add-admin.php'>nadaj admina tutaj</a></li>";
            echo "</ul>";
            echo "<hr>";
        }
    }
    else{
        echo "<div style='text-align: center; display: flex; flex-direction: column'>";
        echo "<p><b>wybacz nie jestes zalogowany</b></p>";
        echo "<a class='headerLink' href='login.php'>zaloguj sie tutaj</a>";
        echo "<p style='margin-top: 40px;'><b>nie posiadasz konta? Kliknij tutaj</b></p>";
        echo "<a class='headerLink' href='register.php'>zarejestruj sie tutaj</a>";
        echo "</div>";
    }
    ?>
</div>