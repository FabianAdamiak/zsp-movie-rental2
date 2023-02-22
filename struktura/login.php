<html>  
<head>
    <meta charset="UTF-8">
    <title>zsp-movie-rental2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="post">
    <label>Login</label><input type='text' name='login'> <br>
    <label>Haslo</label><input type='password' name='password'> <br>
    <input type='submit' value='Zaloguj'> <br>
    </form>
    <?php
    $db = new mysqli("127.0.0.1", "root", "", "zsp-movie-rental2");
    if(isset($_POST["login"]) && isset($_POST["password"]) &&
    !empty($_POST["login"]) && !empty($_POST["password"]) ){
        $q = "SELECT id FROM users WHERE login='".$_POST['login']."'";
        $res = $db -> query($q);
        $d = $res->fetch_all(MYSQLI_ASSOC);
        $_SESSION["id"] = $d;
    header("location: index.php");
    }
    echo "<a href='register.php'>Nie posiadasz konta? Tutaj mozesz sie zarejstrowac!</a>";
     $db->close();
    ?>
</body>
</html>
