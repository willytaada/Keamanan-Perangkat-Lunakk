<?php
session_start ();
if(!isset($_SESSION["login"]))
{
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jm.</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <div class="wrapper">
            <div class="logo"><a href=''>Yname.</a></div>
            <div class="menu">
                <ul>
                    <li><a href="logout.php" class="tbl-biru">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="wrapper">
        <!-- untuk home -->
        <section id="home">
            <div class="kolom">
                <p class="deskripsi">Keamanan Perangkat Lunak</p>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nesciunt, nobis.</p>
            <div class="kolom">
                <p class="deskripsi">Keamanan Perangkat Lunak</p>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nesciunt, nobis.</p>
            </div>
            <div class="kolom">
                <p class="deskripsi">Keamanan Perangkat Lunak</p>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nesciunt, nobis.</p>
            </div>
        </section>        
    <div id="copyright">
        <div class="wrapper">
            &copy; 2021. <b>Jagungggmaniss.</b> All Rights Reserved.
        </div>
    </div>
    
</body>
</html>