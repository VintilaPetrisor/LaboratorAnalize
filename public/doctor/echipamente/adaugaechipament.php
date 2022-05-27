<?php require_once('../../../privat/initializare.php'); ?>
<?php 




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

    <title>Echipament Nou</title>
    
    
</head>
<body>
    
    
    
    <header class="main-header">
        <div> 
            <a href="#" class="main-header__brand"> Laboartor Analize </a>
        </div>
        <nav class="main-nav">
            <ul class="main-nav__items">
                <li class="main-nav__item">
                    <a href="<?php echo url_for('/doctor/echipamente/echipamente.php'); ?>" >Acasa</a>
                </li>
                
            </ul>
        </nav>

    </header>

    <div class="wrapper" id="test">
        <div class="side left">
            <div class="image pacient"></div>
            <div class="caption">
                <h1>Echipament Nou</h1>
                <form class="setform" action="<?php echo url_for('doctor/echipamente/echipamentnou.php'); ?>" method="post"> 
                    <dl>
                        <dt>Nume Echipament:</dt>
                        <dd><input type="text" name="numeechipament" value="" /></dd>
                    </dl>
                    <dl>
                        <dt>Numar Sertare:</dt>
                        <dd><input type="text" name="numarsertare" value=""/></dd>
                    </dl>
                    <dl>
                        <dt>Locatie:</dt>
                        <dd>
                            <select class="selectsolve" name="locatie">
                                <option value="Camera 1">Camera 1</option>
                                <option value="Camera 2">Camera 2</option>
                                <option value="Camera 3">Camera 3</option>
                                <option value="Camera 4">Camera 4</option>
                                <option value="Camera 5">Camera 5</option>
                            </select>
                        </dd>
                    </dl>
                    </br>
                    <input class="button" type="submit" name="pass" value="Adauga">
                     
                     
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