<?php require_once('../../../privat/initializare.php'); ?>
<?php 


$id = $_GET['id'];



if(is_post_request()) {
   
    $proba1 = [];
    $proba1['id'] = $id;
    $proba1['sertar_numar'] = $_POST['numarsertare'] ?? '';
    $proba1['locatie_nume'] = $_POST['locatieechip'] ?? '';
    $proba1['status'] = 'PRIMIT';
    
 
    $sql2 = "UPDATE probe SET ";
    $sql2 .= "sertar_numar='" . $proba1['sertar_numar'] . "',";
    $sql2 .= "locatie_nume='" . $proba1['locatie_nume'] . "',";
    $sql2 .= "status='" . $proba1['status'] . "' ";
    $sql2 .= "WHERE id='" . $proba1['id'] . "' ";
    $sql2 .= "LIMIT 1";

    
    $result2 = mysqli_query($db, $sql2);
    //for update statements , the result is true or false
    if($result2) {

    redirect_to(url_for('/doctor/probe/prelucrareprimit.php?id='.$id));

    } else {

        echo mysqli_error($db);
        exit;
    }
  

 } else {

    $sql = "SELECT * FROM probe ";
    $sql .= "WHERE id='" . $id . "'";
    $result = mysqli_query($db, $sql);
    
    $probe = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    $nume_echip = $probe['frigider_nume'];


    $sql1 = "SELECT * FROM echipamente ";
    $sql1 .= "WHERE echipament_nume='" . $nume_echip . "' ";
    $sql1 .= "LIMIT 1";
    $result1 = mysqli_query($db, $sql1);
    $echip1 = mysqli_fetch_assoc($result1);
    mysqli_free_result($result1);
    $nr_sertare = $echip1['numar_sertare'];
    $locatie  = $echip1['echipament_locatie'];
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

    <title>Proba - Primire</title>
    
    
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
                <h1>Te rog continua introducerea datelor! </h1>
                <form class="setform" action="<?php echo url_for('/doctor/probe/prelucrarecomanda1.php?id=' . $id); ?>" method="post">
               
                    <dl>
                        <dt>Nume Doctor:</dt>
                        <dd><input type="text" name="numedoctor" value="<?php echo $probe['doctor_nume']; ?>" disabled /></dd>
                    </dl>

                    

                    

                    <dl>
                        <dt>Numar Sertar:</dt>
                        <dd>
                        <select class="selectsolve" name="numarsertare">
                             <?php for($i=1; $i<$nr_sertare+1; $i++) { 
                                echo "<option value=\"{$i}\" >{$i}</option>";
                                } ?>
                        </select>
                        </dd>
                    </dl>

                    <dl>
                        <dt>Locatie Echipament:</dt>
                        <dd><input type="text" name="locatieechip" value="<?php echo $locatie; ?>" disabled /></dd>
                    </dl>

                    
                    

                    </br>
                    <input class="button" type="submit" name="" value="Primit">
                     
                     
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