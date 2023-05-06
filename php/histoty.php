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
        <link href="../css/style.css" rel="stylesheet" type="text/css">
        <link href="../css/history.css" rel="stylesheet" type="text/css">
        <link rel="shortcut icon" href="../image/icon_qween.png" type="image/x-icon">
        <title>No Game No Life</title>
    </head>
    <body>
        <header>
            <a href="../index.php"><img class="logo", src="../image/No-Game-No-Life-anime-logo.svg.png" alt="logo"></a>
            <nav>
                <ul class="nav_links">
                    <li><a href="characters.html">Personaje</a></li>
                    <li><a href="video.html">Video</a></li>
                    <li><a href="author.html">Autor</a></li>
                </ul>
            </nav>
            <a href="../php/tabele.php"><button class="account">Tabele</button></a>
        </header>
        <div class="con-conteiner">
            <h1>Capitolul 1. Ciocnirea/Devil.</h1>
            <div class="conteiner"><br>
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
                <p>O altă problemă era că, chiar și după ce își <span class="act"><?php echo $act[4]['name_action'];?></span> <span class="sub"><?php echo $sub[1]['name_subiect'];?></span>,
                 forța națională a <span class="loc"><?php echo $loc[2 ]['name_local'];?></span> era încă una dintre cele mai bune din lume.</p> <br>
                <p>Forța lor națională, moneda, structura socială, etnia și limba erau complet diferite, dar trebuiau să aibă acces egal la resursele țării.</p> <br>
                <p>Pe scurt, situația nu ar putea fi mai rea de atât și nu văd rostul de a scrie mai multe detalii.</p> <br>
                <p>A fost pentru prima dată în istorie când <span class="pers"><?php echo $pers[6]['name_pers'];?></span> s-a confruntat cu o astfel de sarcină imposibilă.</p> <br>
                <p>A doua problemă a fost...</p> <br>
                <p>-Panica...</p> <br>
                <p>Uitându-se la cărțile din mână, fata roșcată a respirat adânc.</p> <br>
                <p><span class="pers"><?php echo $pers[2]['name_pers'];?></span>.</p> <br>
                <p>De obicei doar <span class="pers"><?php echo mb_substr($pers[2]['name_pers'],0,5);?></span>.</p> <br>
                <p>Era <span class="crt"><?php echo $crt[2]['name_caracter'];?></span> anterioare - o fată ale cărei viziuni erau complet diferite de cele ale fostului rege, bunicul ei.</p> <br>
                <p>Chiar dacă <span class="act"><?php echo $act[5]['name_action'];?></span> de <span class="sub"><?php echo $sub[4]['name_subiect'];?></span>, 
                chipul ei era frumos... Dar acum îi atârna o expresie încruntată, iar în aer se simțea o aură periculoasă.</p> <br>
                <p>Motivul pentru aceasta a fost [a doua problemă].</p> <br>
                <p>Și așa a fost...</p> <br>
                <p>- Este un moment atât de important! Când se vor întoarce ăștia doi?!</p> <br>
                <p>Exclamația ei puternică s-a răspândit în toată <span class="loc"><?php echo $loc[3]['name_local'];?></span> și i-a șocat pe toți cei prezenți.</p> <br>
                <p>- Milady <span class="pers"><?php echo mb_substr($pers[2]['name_pers'],9,13);?></span>, înțeleg cum vă simțiți... Dar nu credeți că nu este potrivit ca o 
                doamnă să folosească un astfel de cuvânt?</p> <br>
                <p>Cel care îi vorbise era în apropiere. Era <span class="crt"><?php echo $crt[3]['name_caracter'];?></span> și părea mai <span class="crt"><?php echo $crt[4]['name_caracter'];?></span> 
                decât orice persoană în vârstă normală.</p> <br>
                <p>Expresia lui era la fel ca a lui <span class="pers"><?php echo mb_substr($pers[2]['name_pers'],0,5);?></span>. Urechile și coada câinelui său erau ușor coborâte. 
                În ciuda faptului că era îmbrăcat într-un kimono, figura lui încă îi trăda inconfundabil fizicul. Era unul din rasa <span class="crt"><?php echo $crt[5]['name_caracter'];?></span> - 
                <span class="pers"><?php echo $pers[3]['name_pers'];?></span></p> <br>
                <p>A fost <span class="crt"><?php echo $crt[6]['name_caracter'];?></span> <span class="crt"><?php echo $crt[7]['name_caracter'];?></span> al 
                <span class="loc"><?php echo $loc[2]['name_local'];?></span> (<span class="pers"><?php echo $pers[4]['name_pers'];?></span>).
                 Actualii conducători ai țării (<span class="pers"><?php echo $pers[0]['name_pers'];?></span> și <span class="pers"><?php echo $pers[1]['name_pers'];?></span>) 
                l-au obligat <span class="act"><?php echo $act[6]['name_action'];?></span> la <span class="sub"><?php echo $sub[5]['name_subiect'];?></span>... pe scurt, a fost încă una dintre victimele lor, după 
                <span class="pers"><?php echo mb_substr($pers[2]['name_pers'],0,5);?></span>...</p> <br>
                <p>- Milady <span class="pers"><?php echo mb_substr($pers[2]['name_pers'],9,5);?></span>? Uh? Eu sunt?</p> <br>
                <p><span class="pers"><?php echo mb_substr($pers[2]['name_pers'],0,5);?></span> <span class="act"><?php echo $act[7]['name_action'];?></span> 
                puțin ritmul cu un răspuns.<span class="pers"><?php echo mb_substr($pers[3]['name_pers'],8,3);?></span> dat din cap.</p> <br>
                <p>-Da. Într-un cadru formal, trebuie să mă adresez dumneavoastră în mod corespunzător. Nu vă place?</p> <br>
                <p>- Mă întrebam doar. Dar ar fi bine să mă numești fată de comisioane din partea conducătorilor de azi.</p> <br>
                <p>Văzând-o pe <span class="pers"><?php echo mb_substr($pers[2]['name_pers'],0,5);?></span> <span class="crt"><?php echo $crt[8]['name_caracter'];?></span> din cauza unei 
                stime de sine atât de scăzute, <span class="pers"><?php echo mb_substr($pers[3]['name_pers'],8,3);?></span> a ridicat din umeri.</p> <br>
                <p>- Mi-e teamă că dacă mă adresez atât de nepoliticos, și alții mă vor trata la fel... Să ne întoarcem la subiect, Milady 
                    <span class="pers"><?php echo mb_substr($pers[2]['name_pers'],9,13);?></span>, și să fim atenți la lucrurile pe care le aveți în mână.</p> <br>
                <p>Urmărind privirea lui <span class="pers"><?php echo mb_substr($pers[3]['name_pers'],8,3);?></span>, 
                <span class="pers"><?php echo mb_substr($pers[2]['name_pers'],0,5);?></span> își <span class="act"><?php echo $act[8]['name_action'];?></span> din nou de 
                <span class="sub"><?php echo $sub[6]['name_subiect'];?></span> actuală... și își spuse.</p> <br>
                <p>Concentrează-te doar pe faptul că ai un meci important acum.</p> <br>
                <p>Nu a fost nimic special în acest joc. Era un poker obișnuit.</p> <br>
                <p>În plus, jokerii erau prezenți în joc, astfel încât acesta era cel mai comun joc de poker.</p> <br>
                <p><span class="loc"><?php echo $loc[0]['name_local'];?></span> a creat o federație cu <span class="loc"><?php echo $loc[2]['name_local'];?></span>, fostul lider.</p> <br>
                <p>Acum se punea întrebarea ce să facă cu acest teritoriu dublat. Cui să dea ce și cum să folosească.</p> <br>
                <p>Cu cât domnul <span class="pers"><?php echo $pers[5]['name_pers'];?></span> era mai <span class="crt"><?php echo $crt[9]['name_caracter'];?></span>,
                 cu atât mai multe <span class="sub"><?php echo $sub[7]['name_subiect'];?></span> dorea <span class="act"><?php echo $act[9]['name_action'];?></span>.</p> <br>
                <p>În această situație, așa-zisa țară egală și multinațională era doar o iluzie.</p> <br>
                <p>Oricât de complex ar fi sistemul, diferența uriașă dintre forțele celor două țări nu poate fi compensată.</p> <br>
                <p>În ziua în care economia de piață va intra în joc, <span class="loc"><?php echo $loc[0]['name_local'];?></span> va fi probabil complet distrusă.</p> <br>
                <p>Așa că au încercat să aloce resursele țării în așa fel încât să ofere <span class="loc"><?php echo $loc[2]['name_local'];?></span> tot ceea ce avea nevoie.</p> <br>
                <p>Aceasta este soarta <span class="loc"><?php echo $loc[0]['name_local'];?></span>.</p> <br>
                <p>Aceasta este o situație obișnuită în care cei care dețin puterea s-au aliat între ei pentru a-și maximiza câștigurile.</p> <br>
                <p>Din acest motiv, un flux constant de <span class="pers"><?php echo $pers[5]['name_pers'];?></span> a <span class="act"><?php echo $act[10]['name_action'];?></span>-o pe 
                <span class="pers"><?php echo mb_substr($pers[2]['name_pers'],0,5);?></span>, care acum <span class="act"><?php echo $act[11]['name_action'];?></span> 
                <span class="sub"><?php echo $sub[8]['name_subiect'];?></span> de a-și impune cererile, iar și iar.</p> <br>
                <p>Din această cauză, <span class="pers"><?php echo mb_substr($pers[2]['name_pers'],0,5);?></span> nu a <span class="act"><?php echo $act[13]['name_action'];?></span> 
                <span class="sub"><?php echo $sub[9]['name_subiect'];?></span> cum trebuie în ultimele două săptămâni și a fost nevoită să se joace tot timpul cu ei.</p> <br>
                <p>(A accepta provocarea a fost o decizie corectă... da.)</p> <br>
                <p>a murmurat <span class="pers"><?php echo mb_substr($pers[2]['name_pers'],0,5);?></span> în sinea ei, pentru că... era o capcană.</p> <br>
                <p>Totul decurge fără probleme, așa cum a fost planificat.</p> <br>
                <p>Cu credință... totul este bine, cu excepția [cantității], la care mă opun.</p> <br>
                <p>- Ei bine! Hai să <span class="act"><?php echo $act[12]['name_action'];?></span> <span class="sub"><?php echo $sub[10]['name_subiect'];?></span> deja!</p> <br>
                <p>- Ce s-a întâmplat cu manierele acestei doamne?</p> <br>
                <p>Din cauza oboselii severe, avea cearcăne sub ochi, iar furia îi înclina fața - era înfiorător...</p> <br>
                <p>Fața ei le amintea că [conducătorii] trebuie să se teamă. Stăpânii <span class="pers"><?php echo $pers[5]['name_pers'];?></span> s-au privit unul pe altul și s-au [Salvat]. 
                Asta însemna că acum erau obligați <span class="act"><?php echo $act[14]['name_action'];?></span> <span class="sub"><?php echo $sub[10]['name_subiect'];?></span> lui 
                <span class="pers"><?php echo mb_substr($pers[2]['name_pers'],0,5);?></span>...</p> <br>
                <p>Cu toate acestea, <span class="pers"><?php echo mb_substr($pers[2]['name_pers'],0,5);?></span> și-a folosit vocea puternică, fără să-i lase să scoată un cuvânt. 
                A sărit în sus și a lovit cu piciorul în scaunul ei.</p> <br>
                <p>- Dacă erai dispus să-mi accepți oferta de la început, de ce m-ai făcut să pierd atâta timp?!</p> <br>
                <p>A aruncat cărțile pe masă și le-a îndepărtat. Mâna ei a arătat...</p> <br>
                <p>- Cinci cărți de aceeași valoare!</p> <br>
                <p>Chiar dacă nu ar fi salvat, rezultatul ar fi fost același - toți ar fi <span class="act"><?php echo $act[15]['name_action'];?></span>. Privind această combinație de cărți, 
                <span class="pers"><?php echo $pers[5]['name_pers'];?></span>
                <span class="act"><?php echo $act[16]['name_action'];?></span> <span class="crt"><?php echo $crt[10]['name_caracter'];?></span>...</p> <br>
                <p>Dar <span class="pers"><?php echo mb_substr($pers[2]['name_pers'],0,5);?></span>. a decis să le <span class="act"><?php echo $act[17]['name_action'];?></span> și s-a întors să plece.</p> <br>
                <p>"Ori câștigi, ori pierzi! (totul sau nimic!) Acum, că speranțele tale s-au spulberat, te rog să te întorci, bine?"</p> <br>
                <p>După aceea, <span class="pers"><?php echo $pers[3]['name_pers'];?></span> a stat în locul lui <span class="pers"><?php echo mb_substr($pers[2]['name_pers'],0,5);?></span> 
                și a <span class="act"><?php echo $act[18]['name_action'];?></span> <span class="crt"><?php echo $crt[11]['name_caracter'];?></span>...</p> <br>
                <p>- Și acum, așa cum am convenit, îți voi <span class="act"><?php echo $act[19]['name_action'];?></span>  <span class="sub"><?php echo $sub[12]['name_subiect'];?></span>.
                 Iartă-mă pentru asta. </p> <br>

        </div>
        <footer>
            <div class="navfoot">
                <a href="#">Resurse</a>
            </div>
            <p>Galinschii Ion &copy 2021</p>
        </footer>
    </body> 
</html>
