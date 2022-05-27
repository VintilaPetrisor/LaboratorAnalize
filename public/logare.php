<?php require_once('../privat/initializare.php'); ?>
<?php session_unset();
$_SESSION['authuser'] = 0;
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
    <link href="css/normalize.css" rel="stylesheet" >
    <link href="css/style.css" rel="stylesheet" >

    <title>Logare</title>
    
   
</head>
<body>
    
    
    
    <header class="main-header">
        <div> 
            <a href="#" class="main-header__brand"> Laborator Analize</a>
        </div>
        <nav class="main-nav">
            <ul class="main-nav__items">
                
            </ul>
        </nav>

    </header>

    <div class="wrapper" id="test">
        <div class="side left">
            <div class="image pacient"></div>
            <div class="caption">
                <h1>Pacient</h1>
                <a class="button" href="<?php echo url_for('/pacient/pacientlogin.php'); ?>">Logare</a>
            </div>
        </div>
        <div class="side right">
            <div class="image doctor"></div>
            <div class="caption">
                <h1>Doctor</h1>
                <a class="button" href="<?php echo url_for('/doctor/doctorlogin.php'); ?>">Logare</a>
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