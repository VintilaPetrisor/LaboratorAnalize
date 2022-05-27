<?php require_once('../../../privat/initializare.php'); ?>
<?php

$result_set = toate_echipamentele();



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <link href="../../css/normalize.css" rel="stylesheet" >
    <link href="../css/style.css" rel="stylesheet" >

    <title>Echipamente</title>
    
    
</head>
<body>
    
    
    
<header class="main-header">
        <div> 
            <a href="#" class="main-header__brand"> Echipamente </a>
        </div>
        <nav class="main-nav">
            <ul class="main-nav__items">
                <li class="main-nav__item">
                    <a href="<?php echo url_for('/doctor/index.php'); ?>" >Acasa</a>
                    <a href="<?php echo url_for('/doctor/echipamente/adaugaechipament.php'); ?>" >Echipament Nou</a>
                </li>
                
            </ul>
        </nav>

    </header>

    <div class="wrapper" id="test">
        <div class="side left">
            <div class="image pacient"></div>
            <div class="caption">
                <h1>Echipamente</h1>
                <table class="lista">
                    <tr>
                        <th>Numar Inventar</th>
                        <th>Nume</th>
                        <th>Numar Sertare</th>
                        <th>Locatie</th>
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                    </tr>
                
                <?php while($echipament = mysqli_fetch_assoc($result_set)) { ?>
                    <tr>
                        <td><?php echo $echipament['id']; ?></td>
                        <td><?php echo $echipament['echipament_nume']; ?> </td>
                        <td><?php echo $echipament['numar_sertare']; ?></td>
                        <td><?php echo $echipament['echipament_locatie']; ?> </td>
                        <td><a class="action link_culoare" href="<?php echo url_for('/doctor/echipamente/updateechipament.php?id=' . $echipament['id']); ?>">Editeaza</a></td>
                        <td><a class="action link_culoare" href="<?php echo url_for('/doctor/echipamente/stergeechipament.php?id=' . $echipament['id']); ?>">Sterge</a></td>
                        
                    </tr>
                <?php };?>
                
                </table>
                
            </div>
        </div>
        <?php mysqli_free_result($result_set); ?>
    </div>


    <footer class="main-footer"> 
        <nav>
            <ul class="main-footer__links">
                <li class="main-footer__link">
                    <a href="#"></a>
                </li>
                
            </ul>
        </nav>
    </footer>
    
</body>
</html>

<?php db_disconnect($db); ?>