<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>wypozyczalnia filmow</title>
    <link rel="stylesheet" href="/zsp-movie rental2/css/style.css">
</head>
<body>
    <div class="wrapp">
        <?php include $_SERVER['DOCUMENT_ROOT'].'/zsp-movie rental2/includes/header.php';?>

        <div class="main">
            <?php include $_SERVER['DOCUMENT_ROOT'].'/zsp-movie rental2/includes/nav.php'; ?>
            <div class="aside">
                <h1>filmy</h1>
                <p>stronka z filmami</p>
            </div>
        </div>

        <?php include $_SERVER['DOCUMENT_ROOT'].'/zsp-movie rental2/includes/footer.php'; ?>
    </div>
</body>
</html>