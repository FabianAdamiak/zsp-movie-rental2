<?php
    $db = new mysqli("127.0.0.1", "root", "", "zsp-movie-rental2");
    session_start();
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>logout</title>
    <link rel="stylesheet" href="style.css">
</head>
    <body>
    <div class="a">
        <h3>Zostałeś wylogowany :)</h3>
        <button type="button"><a href="login.php">zaloguj sie ponownie</a></button><br></div>
    </body>
</html>



