<?php require_once('../../../privat/initializare.php'); ?>
<?php 


$id = $_GET['id'];



if(is_post_request()) {
   
    $proba = [];
    $proba['id'] = $id;
    $proba['doctor_nume'] = $_POST['numedoctor'] ?? '';
    $proba['frigider_nume'] = $_POST['echipament'] ?? '';
 
    
  

    $sql = "UPDATE probe SET ";
    $sql .= "doctor_nume='" . $proba['doctor_nume'] . "',";
    $sql .= "frigider_nume='" . $proba['frigider_nume'] . "' ";
    $sql .= "WHERE id='" . $proba['id'] . "' ";
    $sql .= "LIMIT 1";

    
    $result = mysqli_query($db, $sql);
    //for update statements , the result is true or false
    if($result) {

    redirect_to(url_for('/doctor/probe/prelucrarecomanda1.php?id='.$id));

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


    $sql1 = "SELECT * FROM echipamente ";
    $sql1 .= "ORDER BY id ASC";
    $result1 = mysqli_query($db, $sql1);
    

    
    

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
                <h1>Proba: <?php echo $probe['proba_sn']; ?> a fost primita? </h1>
                <form class="setform" action="<?php echo url_for('/doctor/probe/prelucrarecomandat.php?id=' . $id); ?>" method="post">
               
                    <dl>
                        <dt>Nume Doctor:</dt>
                        <dd><input type="text" name="numedoctor" value="" /></dd>
                    </dl>
                    <dl>
                        <dt>Nume Echipament:</dt>
                        <dd>
                        <select class="selectsolve" name="echipament">
                             <?php while($proba1 = mysqli_fetch_assoc($result1)) {
                                
                                echo "<option value=\"{$proba1['echipament_nume']}\" >{$proba1['echipament_nume']}</option>";
                                    
                       
                             }
                             ?>
                        </select>
                        </dd>
                    </dl>
                    
                    </br>
                    <input class="button" type="submit" name="" value="Continua">
                     
                     
                </form><!-- end form-->
                 <br> <a class="button" href="<?php echo url_for('/doctor/probe/statusprobe.php'); ?>" >NU</a>
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