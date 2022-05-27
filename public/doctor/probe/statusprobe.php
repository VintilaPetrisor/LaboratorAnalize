<?php require_once('../../../privat/initializare.php'); ?>

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

    <title>Situatie Probe</title>
    
    
</head>
<body>
    
    
    
<header class="main-header">
        <div> 
            <a href="#" class="main-header__brand"> Laborator Analize </a>
        </div>
        <nav class="main-nav">
            <ul class="main-nav__items">
                <li class="main-nav__item">
                    <a href="<?php echo url_for('/doctor/index.php'); ?>" >Acasa</a>
                    <a href="<?php echo url_for('/logare.php'); ?>" >Delogare</a>
                </li>
                
        </nav>

    </header>

    <div class="wrapper" id="test">
        <div class="side left">
            <div class="image pacient"></div>
            <div class="caption">
                
                <h1>Situatie Probe:</h1>
                <a class="button" href="<?php echo url_for('/doctor/probe/statuscomandat.php'); ?>">Status: Comandat</a><br><br><br>
                <a class="button" href="<?php echo url_for('/doctor/probe/statusprimit.php'); ?>"> Status: Primit</a> <br><br><br>
                <a class="button" href="<?php echo url_for('/doctor/probe/statusanalizacalitate.php'); ?>"> Status: Analiza Calitate</a> <br><br><br>
                <a class="button" href="<?php echo url_for('/doctor/probe/statusproberespinse.php'); ?>"> Status: Proba Respinsa</a> <br><br><br>
                <a class="button" href="<?php echo url_for('/doctor/probe/statusanalizaprocesare.php'); ?>"> Status: Analiza Procesare</a> <br><br><br>
                <a class="button" href="<?php echo url_for('/doctor/probe/statusfinalizat.php'); ?>"> Status: Finalizat</a> <br><br><br>
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