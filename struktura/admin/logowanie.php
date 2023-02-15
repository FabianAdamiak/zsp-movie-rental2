<html>
    
<head>
    <meta charset="UTF-8">
    <title>zsp-movie-rental2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $db = new mysqli("localhost", "root", "", "zsp-movie rental2");

    if(isset($_POST["name"]) && isset($_POST["login"]) && isset($_POST["password"]) &&
    !empty($_POST["name"]) && !empty($_POST["login"]) && !empty($_POST["password"]) ){
    $sql = "INSERT INTO `users` (`id`, `name`, `login`, `password`, `is_admin`) VALUES (NULL, '".$_POST["name"]."',
    '".$_POST["login"]."', '".md5($_POST["password"])."', '0');";
    $db->query($sql);
    $db->close();
    header('Location: index.php');
    }

    echo "
    <form method='POST' action='register.php'>
    <label>Nazwa</label><input type 'text' name='name'></br>
    <label>Login</label><input type='text' name='login'></br>
    <label>Haslo</label><input type='password' name='password'></br>
    <input type='submit' value='Rejestruj'></br>
    </form>
    ";
    echo "<a href='index.php'>zarejstrowany? kliknij tutaj i zaloguj sie!</a>";

     $db->close();
    ?>
</body>
</html>
