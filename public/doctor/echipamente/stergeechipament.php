<?php require_once('../../../privat/initializare.php'); ?>
<?php 


$id = $_GET['id'];


if(is_post_request()) {
   $sql = "DELETE FROM echipamente ";
   $sql .= "WHERE id='" . $id ."' ";
   $sql .= "LIMIT 1";
    
    
    $result = mysqli_query($db, $sql);
    //for update statements , the result is true or false
    if($result) {

    redirect_to(url_for('/doctor/echipamente/echipamente.php'));

    } else {

        echo mysqli_error($db);
        exit;
    }

 } else {

    $echipament = un_singur_echipament($id);
}



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

    <title>Update Echipament</title>
    
    
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
                <h1>Sterge Echipament</h1>
                <p>Esti sigur ca vrei sa stergi echipamentul: <b> <?php echo $echipament['echipament_nume']; ?> </b> ?</p>
                <form class="setform" action="<?php echo url_for('/doctor/echipamente/stergeechipament.php?id=' . $id); ?>" method="post">

                    <input class="button" type="submit" name="" value="Sterge Echipament">
                            
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