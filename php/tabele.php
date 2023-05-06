<!DOCTYPE html>
<html lang="ro">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/style.css" rel="stylesheet" type="text/css">
        <link href="../css/tabele.css" rel="stylesheet" type="text/css">
        <link rel="shortcut icon" href="../image/icon_qween.png" type="image/x-icon">
        <title>No Game No Life</title>
    </head>
    <body>
    <header>
            <a href="../index.php"><img class="logo", src="../image/No-Game-No-Life-anime-logo.svg.png" alt="logo"></a>
            <nav>
                <ul class="nav_links">
                    <li><a href="../html/characters.html">Personaje</a></li>
                    <li><a href="../html/video.html">Video</a></li>
                    <li><a href="../html/author.html">Autor</a></li>
                </ul>
            </nav>
            <a href="tabele.php"><button class="account">Tabele</button></a>
        </header>
        <div class="tables">
            <table>
                <caption><h2>Aici puteti modifica actiunile personajelor:</h2><br></caption>
                <tr>
                    <th>Id</th>
                    <th>Action</th>
                    <th>Subiectul</th>  
                    <th>Personaj</th>  
                    <th>Modifică</th>
                    <th>Sterge</th>
                </tr>
                <?php
                    $host = "localhost";
                    $user = "root";
                    $password = "";
                    $data_base = "no_game_db";
                    $connection = mysqli_connect($host, $user, $password, $data_base)or die("error " . mysqli_error($connection)); 
                    $sql = mysqli_query($connection, " SELECT * FROM action LEFT JOIN action_pers USING (id_action) LEFT JOIN subiect 
                    USING (id_subiect) LEFT JOIN personaj USING(id_pers)");
                        while($action = $sql->fetch_assoc()): ?>
                        <tr>
                        <form method = "POST" >
                            <td><?php echo $action['id_action']; ?></td>
                            <td><input type="text" class='change' id="name_action" name="name_action" required value="<?php echo $action['name_action']; ?>"/></td>
                            <td><?php echo $action['name_subiect']; ?></td>
                            <td><?php echo $action['name_pers']; ?></td>
                            <td><?php echo "<input  type='hidden' id ='id_action' name='id_action' value='".$action['id_action']."'/>
                                    <input type='submit' id='change' name='submit' class='change' value='Change'; >"; ?></td>
                            <td><?php echo "<input  type='hidden' id ='id_action' name='id_action' value='".$action['id_action']."'/>
                                    <input type='submit' id='change' name='delete' class='change' value='Delete'; >"; ?></td>
                            <?php
                                if(isset($_POST['submit'])){
                                    if(!empty($_POST['name_action'])){
                                        $id = $_POST['id_action'];
                                        $name = $_POST['name_action'];

                                        $result = mysqli_query($connection, "UPDATE action SET name_action = '$name' WHERE id_action = '$id'");
                                        if($result){
                                            echo '<script>window.location="tabele.php"</script>';
                                        }
                                    }
                                }

                                if(isset($_POST['delete'])){
                                    if(!empty($_POST['name_action'])){
                                        $id = $_POST['id_action'];
                                        $name = $_POST['name_action'];
                                        
                                        $result = mysqli_query($connection, "DELETE  from action_pers WHERE action_pers.id_action = '$id'");
                                        $result = mysqli_query($connection, "DELETE  from action WHERE action.id_action = '$id'"); 
                                        if($result){
                                            echo '<script>window.location="tabele.php"</script>';
                                        }
                                    }
                                }
                            ?>
                        </form> 
                        <?php endwhile ?>
                        </tr>   
                   <form method="POST">
                    <tr>
                            <?php 
                                $result = mysqli_query($connection, "SELECT id_action FROM action ORDER BY id_action DESC LIMIT 1");
                                $result1 = $result->fetch_assoc();
                                $index = $result1['id_action'] + 1;
                            ?>
                            
                            <td><input type="text" class='change' name="id_action" required value="<?php echo $index;?>"/></td>
                            <td><input type="text" class='change' name="name_action" required value=""/></td>
                            <td><input type="text" class='change' name="id_subiect" required value=""/></td>
                            <td><input type="text" class='change' name="id_pers" required value=""/></td>
                            <td><input type='submit' id='insert' name='insert' class='change' value='insert';></td>
                            <?php
                                if(isset($_POST['insert'])){
                                    if(!empty($_POST['name_action'])){
                                        $id_act = $_POST['id_action'];
                                        $name = $_POST['name_action'];
                                        $id_sub = $_POST['id_subiect'];
                                        $id_pers = $_POST['id_pers'];
                                        
                                        $result = mysqli_query($connection, "INSERT INTO action(`id_action`, `name_action`, `id_subiect`) VALUES ($id_act, '$name', $id_sub)");
                                        $result = mysqli_query($connection, "UPDATE action SET name_action = '$name' WHERE id_action = '$id'");
                                        $result = mysqli_query($connection, "INSERT INTO action_pers SET id_action = $id_act, id_pers = $id_pers");
                                        if($result){
                                            echo '<script>window.location="tabele.php"</script>';
                                        }
                                    }
                                }
                            ?>
                        </tr>
                   </form>
                </table>
                <br>
        </div>
            <table>
            <caption><h2>Aici puteti modifica caracteristicile personajelor:</h2><br></caption>
            <tr>
                <th>Id</th>
                <th>Caracter</th>
                <th>Personaj</th> 
                <th>Id personaj</th>
                <th>Modifică</th>
            </tr>
            <?php
                $host = "localhost";
                $user = "root";
                $password = "";
                $data_base = "no_game_db";
                $connection = mysqli_connect($host, $user, $password, $data_base)or die("error " . mysqli_error($connection)); 
                $sql = mysqli_query($connection, " SELECT * FROM caracter LEFT JOIN personaj USING(id_pers);");
                    while($caracter = $sql->fetch_assoc()): ?>
                    <tr>
                    <form method = "POST" >
                        <td><?php echo $caracter['id_caracter']; ?></td>
                        <td><input type="text" class='change' id="name_caracter" name="name_caracter" required value="<?php echo $caracter['name_caracter']; ?>"/></td>
                        <td><?php echo $caracter['name_pers']; ?></td>
                        <td><?php echo $caracter['id_pers']; ?></td>
                        <td><?php echo "<input  type='hidden' id ='id_caracter' name='id_caracter' value='".$caracter['id_caracter']."'/>
                                <input type='submit' id='change' name='submit' class='change' value='Change'; >"; ?></td>
                        <?php
                            if(isset($_POST['submit'])){
                                if(!empty($_POST['name_caracter'])){
                                    $id = $_POST['id_caracter'];
                                    $name = $_POST['name_caracter'];

                                    $result = mysqli_query($connection, "UPDATE caracter SET name_caracter = '$name' WHERE id_caracter = '$id'");
                                    if($result){
                                        echo '<script>window.location="tabele.php"</script>';
                                    }
                                }
                            }
                        ?>
                    </form> 
                    <?php endwhile ?>
                    </tr>   
            </table>
            <div class="con-conteiner">
                <br>
                <table>
                <caption><h2>Aici puteti modifica subiectele actiunilor:</h2><br></caption>
                <tr>
                    <th>Id</th>
                    <th>Subiect</th>
                    <th>Modifică</th>
                </tr>
                <?php
                    $host = "localhost";
                    $user = "root";
                    $password = "";
                    $data_base = "no_game_db";
                    $connection = mysqli_connect($host, $user, $password, $data_base)or die("error " . mysqli_error($connection)); 
                    $sql = mysqli_query($connection, " SELECT * FROM subiect ORDER BY `id_subiect` ASC;");
                        while($subiect = $sql->fetch_assoc()): ?>
                        <tr>
                        <form method = "POST" >
                            <td><?php echo $subiect['id_subiect']; ?></td>
                            <td><input type="text" class='change' id="name_subiect" name="name_subiect" required value="<?php echo $subiect['name_subiect']; ?>"/></td>
                            <td><?php echo "<input  type='hidden' id ='id_subiect' name='id_subiect' value='".$subiect['id_subiect']."'/>
                                    <input type='submit' id='change' name='submit' class='change' value='Change'; >"; ?></td>
                            <?php
                                if(isset($_POST['submit'])){
                                    if(!empty($_POST['name_subiect'])){
                                        $id = $_POST['id_subiect'];
                                        $name = $_POST['name_subiect'];

                                        $result = mysqli_query($connection, "UPDATE subiect SET name_subiect = '$name' WHERE id_subiect = '$id'");
                                        if($result){
                                            echo '<script>window.location="tabele.php"</script>';
                                        }
                                    }
                                }
                            ?>
                        </form> 
                        <?php endwhile ?>
                        </tr>   
                </table>
                <div class="conteiner">
                    <br>
                    <table>
                    <caption><h2>Aici puteti modifica numele personajelor:</h2><br></caption>
                    <tr>
                        <th>Id</th>
                        <th>Personaj</th> 
                        <th>Modifică</th>
                    </tr>
                    <?php
                        $host = "localhost";
                        $user = "root";
                        $password = "";
                        $data_base = "no_game_db";
                        $connection = mysqli_connect($host, $user, $password, $data_base)or die("error " . mysqli_error($connection)); 
                        $sql = mysqli_query($connection, " SELECT * FROM  personaj ORDER BY `id_pers` ASC;");
                            while($pers = $sql->fetch_assoc()): ?>
                            <tr>
                            <form method = "POST" >
                                <td><?php echo $pers['id_pers']; ?></td>
                                <td><input type="text" class='change' id="name_pers" name="name_pers" required value="<?php echo $pers['name_pers']; ?>"/></td>
                                <td><?php echo "<input  type='hidden' id ='id_pers' name='id_pers' value='".$pers['id_pers']."'/>
                                        <input type='submit' id='change' name='submit' class='change' value='Change'; >"; ?></td>
                                <?php
                                    if(isset($_POST['submit'])){
                                        if(!empty($_POST['name_pers'])){
                                            $id = $_POST['id_pers'];
                                            $name = $_POST['name_pers'];

                                            $result = mysqli_query($connection, "UPDATE personaj SET name_pers = '$name' WHERE id_pers = '$id'");
                                            if($result){
                                                echo '<script>window.location="tabele.php"</script>';
                                            }
                                        }
                                    }
                                ?>
                            </form> 
                            <?php endwhile ?>
                            </tr>   
                    </table><br>
                    <table>
                    <caption><h2>Aici puteti modifica lacatiile:</h2><br></caption>
                    <tr>
                        <th>Id</th>
                        <th>Localitate</th> 
                        <th>Modifică</th>
                    </tr>
                    <?php
                        $host = "localhost";
                        $user = "root";
                        $password = "";
                        $data_base = "no_game_db";
                        $connection = mysqli_connect($host, $user, $password, $data_base)or die("error " . mysqli_error($connection)); 
                        $sql = mysqli_query($connection, " SELECT * FROM localitate ORDER BY `id_local` ASC;");
                            while($local = $sql->fetch_assoc()): ?>
                            <tr>
                            <form method = "POST" >
                                <td><?php echo $local['id_local']; ?></td>
                                <td><input type="text" class='change' id="name_local" name="name_local" required value="<?php echo $local['name_local']; ?>"/></td>
                                <td><?php echo "<input  type='hidden' id ='id_local' name='id_local' value='".$local['id_local']."'/>
                                        <input type='submit' id='change' name='submit' class='change' value='Change'; >"; ?></td>
                                <?php
                                    if(isset($_POST['submit'])){
                                        if(!empty($_POST['name_local'])){
                                            $id = $_POST['id_local'];
                                            $name = $_POST['name_local'];

                                            $result = mysqli_query($connection, "UPDATE localitate SET name_local = '$name' WHERE id_local = '$id'");
                                            if($result){
                                                echo '<script>window.location="tabele.php"</script>';
                                            }
                                        }
                                    }
                                ?>
                            </form> 
                            <?php endwhile ?>
                            </tr>   
                    </table>
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

