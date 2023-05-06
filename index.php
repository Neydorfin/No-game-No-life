<?php
$host = "localhost";
                $user = "root";
                $password = "";
                $data_base = "no_game_db";
                $connection = mysqli_connect($host, $user, $password, $data_base)or die("error " . mysqli_error($connection));
$sql = mysqli_query($connection, "SELECT * from personaj ORDER BY `id_pers` ASC");
$pers = array();
while($rws = $sql->fetch_assoc()){
    $pers[] = $rws;
}
$sql = mysqli_query($connection, "SELECT * from caracter ORDER BY `id_caracter` ASC");
$crt = array();
while($rws = $sql->fetch_assoc()){
    $crt[] = $rws;
}
$sql = mysqli_query($connection, "SELECT * from localitate ORDER BY `id_local` ASC");
$loc = array();
while($rws = $sql->fetch_assoc()){
    $loc[] = $rws;
}
$sql = mysqli_query($connection, "SELECT * from action ORDER BY `id_action` ASC");
$act = array();
while($rws = $sql->fetch_assoc()){
    $act[] = $rws;
}
$sql = mysqli_query($connection, "SELECT * from subiect ORDER BY `id_subiect` ASC");
$sub = array();
while($rws = $sql->fetch_assoc()){
    $sub[] = $rws;
}
?>
<!DOCTYPE html>
<html lang="ro">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <link href="css/index-style.css" rel="stylesheet" type="text/css">
        <link rel="shortcut icon" href="image/icon_qween.png" type="image/x-icon">
        <title>No Game No Life</title>
    </head>
    <body>
        <header>
            <a href="index.html"><img class="logo", src="image/No-Game-No-Life-anime-logo.svg.png" alt="logo"></a>
            <nav>
                <ul class="nav_links">
                    <li><a href="html/characters.html">Personaje</a></li>
                    <li><a href="html/video.html">Video</a></li>
                    <li><a href="html/author.html">Autor</a></li>
                </ul>
            </nav>
            <a href="php/tabele.php"><button class="account">Tabele</button></a>
        </header>
            <div class="bg_images">
                <img class="bg_image", src="image/No-Game-No-Life-wallpaper.jpg" alt="bg_image">
                <img class="bg_logo", src="image/No-Game-No-Life-anime-logo2.svg.png" alt="bg_logo">
            </div>
            <div class="con-conteiner">
                <h1>Capitolul 1. Ciocnirea/Devil.</h1>
                <div class="conteiner">
                    <img src="image/tom1.jpg" alt="tom1" class="contimg">
                    <div class="text">
                    <p><b>Regatul</b> <span class="loc"><b><?php echo $loc[0]['name_local'];?></b></span>. </p> <br>
                    <p>Este situat în partea vestică a continentului <span class="loc"><?php echo $loc[1]['name_local'];?></span> și este ultimul refugiu al rasei 
                    <span class="pers"><?php echo $pers[6]['name_pers'];?></span>, al 16-lea la rând în clasamentul Exidelor.</p> <br>
                    <p>Trecuse o jumătate de lună de la ultima lor bătălie cu Uniunea de Est. 
                    <span class="crt"><?php echo $crt[0]['name_caracter'];?></span> <span class="pers"><?php echo $pers[0]['name_pers'];?></span> și 
                    <span class="crt"><?php echo $crt[1]['name_caracter'];?></span> <span class="pers"><?php echo $pers[1]['name_pers'];?></span> au
                    <span class="act"><?php echo $act[0]['name_action'];?></span> <span class="sub"><?php echo $sub[0]['name_subiect'];?></span> și au 
                    <span class="act"><?php echo $act[1]['name_action'];?></span> <span class="sub"><?php echo $sub[1]['name_subiect'];?></span> țării.</p> <br>
                    <p>Dar, în același timp, numărul de probleme s-a dublat.</p> <br>
                    <p>Au existat două probleme principale.</p> <br>
                    <p>Prima este ideea de a <span class="act"><?php echo $act[2]['name_action'];?></span> o <span class="sub"><?php echo $sub[2]['name_subiect'];?></span> cu 
                    <span class="loc"><?php echo $loc[2  ]['name_local'];?></span>, propusă de  <span class="pers"><?php echo $pers[0]['name_pers'];?></span> și  
                    <span class="pers"><?php echo $pers[1]['name_pers'];?></span>.</p> <br>
                    <p><span class="act"><?php echo $act[3]['name_action'];?></span> unei <span class="sub"><?php echo $sub[3]['name_subiect'];?></span>, 
                    care să spargă bariera rasială, a fost o sarcină nemaiîntâlnită și foarte dificilă.</p> <br>
                    <p>Chiar dacă au reușit să reconstruiască o parte din teritoriul lor, <span class="loc"><?php echo $loc[0]['name_local'];?></span> 
                    nu avea încă tehnologia necesară pentru a folosi în mod corespunzător aceste terenuri.</p> <br>
                        <p><a href="php/histoty.php">Continue...</a></p><br>
                    </div>
                </div>
            </div>
        <footer>
            <div class="navfoot">
                <a href="#">Resurse</a>
            </div>
            <p>Galinschii Ion &copy 2021</p>
        </footer>
    </body>
</html>