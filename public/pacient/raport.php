<?php require_once('../../privat/initializare.php'); ?>
<?php 


$id = $_GET['id'];
$sql = "SELECT * FROM probe ";
$sql .= "WHERE id='" . $id . "'";
$result = mysqli_query($db, $sql);
$probe = mysqli_fetch_assoc($result);
mysqli_free_result($result);


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

    <title>Proba - Primita </title>
    
    
</head>
<body>
    
    
    
    <header class="main-header">
        <div> 
            <a href="#" class="main-header__brand"> Laboartor Analize </a>
        </div>
        <nav class="main-nav">
            <ul class="main-nav__items">
                <li class="main-nav__item">
                    <a href="<?php echo url_for('/doctor/probe/statusprobe.php'); ?>" >Acasa</a>
                </li>
                
            </ul>
        </nav>

    </header>

    <div class="wrapper" id="test">
        <div class="side left">
            <div class="image pacient"></div>
            <div class="caption">
                <h1>Raport Proba: <?php echo $probe['proba_sn']; ?> </h1>
                
                <form class="setform" action="<?php echo url_for('/doctor/probe/prelucrareprimit.php?id=' . $id); ?>" method="post">
                    <dl>
                        <dt>Nume Pacient:</dt>
                        <dd><input type="text" name="" value="<?php echo $probe['pacient_nume']; ?>" disabled /></dd>
                    </dl>

                    <dl>
                        <dt>Nume Analiza:</dt>
                        <dd><input type="text" name="" value="<?php echo $probe['analiza_nume']; ?>" disabled /></dd>
                    </dl>
                    
                    <dl>
                        <dt>Nume Doctor:</dt>
                        <dd><input type="text" name="" value="<?php echo $probe['doctor_nume']; ?>" disabled /></dd>
                    </dl>

                    <dl>
                        <dt>Rezultat:</dt>
                        <dd><input type="text" name="" value="<?php echo $probe['rezultat']; ?>" disabled /></dd>
                    </dl>


                    </br>
                    
                     
                     
                </form><!-- end form-->
                 
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