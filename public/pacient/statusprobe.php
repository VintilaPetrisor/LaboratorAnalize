<?php require_once('../../privat/initializare.php'); ?>
<?php

$sql = "SELECT * FROM probe ";
$sql .= "ORDER BY id ASC";

$result = mysqli_query($db, $sql);






   
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
    <link href="../css/normalize.css" rel="stylesheet" >
    <link href="css/style.css" rel="stylesheet" >

    <title>Situatie Comenzi</title>
    
    
</head>
<body>
    
    
    
<header class="main-header">
        <div> 
            <a href="#" class="main-header__brand"> Laborator Analize</a>
        </div>
        <nav class="main-nav">
            <ul class="main-nav__items">
                <li class="main-nav__item">
                    <a href="<?php echo url_for('/pacient/index.php'); ?>" >Acasa</a>
                </li>
                
            </ul>
        </nav>

    </header>

    <div class="wrapper" id="test">
        <div class="side left">
            <div class="image pacient"></div>
            <div class="caption">
               
         
                <h1>Situatie Comenzi</h1>
                <table class="lista">
                    <tr>
                        <th>Numar Comanda</th>
                        <th>Nume</th>
                        <th>Status</th>
                        <th>Raport Disponibil</th>
                    </tr>
                
                <?php while($proba = mysqli_fetch_assoc($result)) {?>
                    <tr>
                        <td><?php echo $proba['proba_sn']; ?></td>
                        <td><?php echo $proba['pacient_nume']; ?> </td>
                        <td><?php echo $proba['status']; ?></td>
                        <td><?php 
                            if(($proba['status']=='FINALIZAT') || ($proba['status']=='RESPINS')){
                                echo "<a class=\"link_culoare\" href=\"" . url_for('/pacient/raport.php?id=' . $proba['id']) . "\"> DA </a>";
                               
                            } else {
                                echo 'NU';
                            }
                        ?> </td>
                    </tr>
                <?php };?>
                
                </table>
                
            </div>
        </div>
        
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