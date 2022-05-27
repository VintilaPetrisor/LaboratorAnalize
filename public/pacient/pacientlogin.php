<?php require_once('../../privat/initializare.php'); ?>

<?php 
session_start();
$errors = [];
$user_n = '';
$user_p = '';


if(is_post_request()){



$_SESSION['username'] = $_POST['username'];
$_SESSION['pass']     = $_POST['pass'];
$user_n = $_POST['username'];
$user_p = $_POST['pass'];


if(is_blank($user_n)) {
    $errors[] = "Campul Utilizator nu poate sa fie gol!";
  }

if(is_blank($user_p)) {
    $errors[] = "Campul Parola nu poate sa fie gol!";
  }

if(empty($errors)) {

$sql = "SELECT * FROM autentificare ";
$sql .= "WHERE utilizator='" . $user_n . "'";
$result = mysqli_query($db, $sql);

$date_logare = mysqli_fetch_assoc($result);
/*echo $date_logare['utilizator'];
echo $date_logare['parola'];*/

if($result){

if(($_SESSION['username'] === $date_logare['utilizator']) || ($_SESSION['pass'] === $date_logare['parola'])){
   

    $_SESSION['authuser'] = 1;
    redirect_to(url_for('/pacient/index.php'));
} else {
    echo "Nu ai permisiune de logare!";
    exit();
}

} else {
    echo mysqli_error($db);
    exit;
}



} else {
    $errors[] = 'Erori';
}
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
    <link href="../css/normalize.css" rel="stylesheet" >
    <link href="css/style.css" rel="stylesheet" >

    <title>Logare Pacient</title>
    
    
</head>
<body>
    
    
    
<header class="main-header">
        <div> 
            <a href="#" class="main-header__brand"> Laborator Analize</a>
        </div>
        <nav class="main-nav">
            <ul class="main-nav__items">
                <li class="main-nav__item">
                    <a href="<?php echo url_for('/logare.php'); ?>" >Acasa</a>
                </li>
                <li class="main-nav__item">
                    <a href="<?php echo url_for('/doctor/doctorlogin.php'); ?>" >Logare Doctor</a>
                </li>
            </ul>
        </nav>

    </header>

    <div class="wrapper" id="test">
        <div class="side left">
            <div class="image pacient"></div>
            <div class="caption">
                <h1>Pacient</h1>
                <?php echo display_errors($errors); ?>
                <form class="setform" action="<?php echo url_for('pacient/pacientlogin.php');?>" method="post"> 
                    
                     <label>Utilizator:</label>
                     <input type="text" name="username" />
                      </br> 
                      
                      <label>Parola:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  </label> 
                      <input type="password" name="pass" />
                      </br>
                       <input class="button" type="submit" name="" value="Logare">
                     
                   </form>
         
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
