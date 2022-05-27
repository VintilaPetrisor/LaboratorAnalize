<?php require_once('../../privat/initializare.php'); ?>
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
    <link href="../css/normalize.css" rel="stylesheet" >
    <link href="css/style.css" rel="stylesheet" >

    <title>Comanda Proba</title>
    
    
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
                <h1>Comanda Proba</h1>
                <form class="setform" action="<?php echo url_for('pacient/probanoua.php'); ?>" method="post"> 
                    <dl>
                        <dt>Nume Pacient:</dt>
                        <dd><input type="text" name="nume" value="" /></dd>
                    </dl>
                    <dl>
                        <dt>Tip Analiza:</dt>
                        <dd>
                            <select class="selectsolve" name="analiza">
                                <option value="Hemocultura">Hemocultura</option>
                                <option value="Hemoleucograma completa">Hemoleucograma completa</option> 
                                <option value="Nucleotidaza">Nucleotidaza</option>
                                <option value="OH-vitamina D">OH-vitamina D</option>
                                <option value="Deoxicorticosteron">Deoxicorticosteron</option>
                            </select>
                        </dd>
                    </dl>
                    </br>
                    <input class="button" type="submit" name="pass" value="Comanda">
                     
                     
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