<?php require_once('../../../privat/initializare.php'); ?>
<?php 


$id = $_GET['id'];



if(is_post_request()) {
   
    $proba = [];
    $proba['id'] = $id;
    $proba['analiza_calitate'] = $_POST['analiza'] ?? '';
    
    if($proba['analiza_calitate']=='OK') {
        $proba['status'] = 'ANALIZA PROCESARE';

        $sql = "UPDATE probe SET ";
        $sql .= "analiza_calitate='" . $proba['analiza_calitate'] . "',";
        $sql .= "status='" . $proba['status'] . "' ";
        $sql .= "WHERE id='" . $proba['id'] . "' ";
        $sql .= "LIMIT 1";
        $result = mysqli_query($db, $sql);
        if($result) {

            redirect_to(url_for('/doctor/probe/prelucrareanalizaprocesare.php?id='.$id));
        
            } else {
        
                echo mysqli_error($db);
                exit;
            }

    } else {
        $proba['status'] = 'RESPINS';
        $proba['rezultat'] = 'NECONCORDANT';

        $sql = "UPDATE probe SET ";
        $sql .= "analiza_calitate='" . $proba['analiza_calitate'] . "',";
        $sql .= "status='" . $proba['status'] . "',";
        $sql .= "rezultat='" . $proba['rezultat'] . "' ";
        $sql .= "WHERE id='" . $proba['id'] . "' ";
        $sql .= "LIMIT 1";
        $result = mysqli_query($db, $sql);
        if($result) {

            redirect_to(url_for('/doctor/probe/statusprobe.php?id='.$id));
        
            } else {
        
                echo mysqli_error($db);
                exit;
            }

    }
    
    
    
    } else {

    $sql = "SELECT * FROM probe ";
    $sql .= "WHERE id='" . $id . "'";
    $result = mysqli_query($db, $sql);

    $probe = mysqli_fetch_assoc($result);
    mysqli_free_result($result);

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

    <title>Proba - Analiza Calitate</title>
    
    
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
                <h1>Proba: <?php echo $probe['proba_sn']; ?>  - Anliza Calitate</h1>
                <form class="setform" action="<?php echo url_for('/doctor/probe/prelucrareanalizacalitate.php?id=' . $id); ?>" method="post">
               
                    <dl>
                        <dt>Calitatea Proba: </dt>
                        <dd>
                            <select class="selectsolve" name="analiza">
                                <option value="OK">OK</option>
                                <option value="NOK">NOK</option>
                            </select>
                        </dd>
                    </dl>
                    </br>
                    <input class="button" type="submit" name="" value="Trimite">
                     
                     
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