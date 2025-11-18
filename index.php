<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Martin Rossakov PHP tööd</title>
    <link rel="stylesheet" href="style/style.css">
    <script src="js/kalkulaator.js" defer></script>
    <link rel="stylesheet" href="style/kalkulatorstyle.css">
    <script src="js/time.js" defer></script>
    <script src="js/muusika.js"></script>
</head>
<body>
<?php
//päis
    include("header.php");
?>

<?php
//navigeerimismenüü
include("nav.php");
?>
<div class="flex-container">
    <div>
        <?php
        if(isset($_GET['link'])){
        include('content/'.$_GET['link']);
        } else {
            include('content/avaleht.php');
        }
        ?>
    </div>
    <div>
        <img id="main" src="image/pic.jpg" alt="Martin">
        <button id="tana" onclick="tana()">Täna on</button>
        <button id="sunnipaev" onclick="sunnipaev()">Minu sünnipäevani ( 16.10.2006 )</button>
        <div id="valjund"></div>
    </div>
</div>
<?php
//jalus
include("footer.php");
?>
</body>
</html>