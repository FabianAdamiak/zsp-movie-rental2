<div class="nav">
    <ul>
        <li><a href="/zsp-movie rental2/index.php">glowna strona</a></li>
        <li><a href="/zsp-movie rental2/sites/movie-search.php">wyszukaj film</a></li>
    </ul>
    <hr>
    <?php
    if(isset($_SESSION["id"])){
        echo "<ul>";
        echo "<li><a href='/zsp-movie rental2/sites/movie-my.php'>Moje filmy</a></li>";
        echo "<li><a href='/zsp-movie rental2/sites/movie-add.php'>Dodaj film</a></li>";
        echo "</ul>";
        echo "<hr>";
        if($_SESSION["isAdmin"])
        {
            echo "<ul>";
            echo "<li><a href='/zsp-movie rental2/admin/movie-list.php'>Wszystkie filmy</a></li>";
            echo "<li><a href='/zsp-movie rental2/admin/add-admin.php'>Nadaj admina</a></li>";
            echo "</ul>";
            echo "<hr>";
        }
    }
    else{
        echo "<div style='text-align: center; display: flex; flex-direction: column'>";
        echo "<p><b>wybacz nie jestes zalogowany</b></p>";
        echo "<a class='headerLink' href='/zsp-movie rental2/zsp-movie rental2/login.php'>zaloguj sie tutaj</a>";
        echo "<p style='margin-top: 40px;'><b>nie posiadasz konta? Kliknij tutaj</b></p>";
        echo "<a class='headerLink' href='/zsp-movie rental2/sites/register.php'>zarejestruj sie tutaj</a>";
        echo "</div>";
    }
    ?>
</div>