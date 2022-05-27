<?php require_once('../../../privat/initializare.php'); ?>

<?php 

if(is_post_request()) {
    
    $echip_nume = $_POST['numeechipament'] ?? '';
    $sert_num = $_POST['numarsertare'] ?? '';
    $echip_loc = $_POST['locatie'] ?? '';

    $sql = "INSERT INTO echipamente ";
    $sql .= "(echipament_nume, numar_sertare, echipament_locatie) ";
    $sql .= "VALUES (";
    $sql .= "'" . $echip_nume . "',";
    $sql .= "'" . $sert_num . "',";
    $sql .= "'" . $echip_loc . "'";
    $sql .= ")";
    $result = mysqli_query($db, $sql);
    if($result) {
        $id_nou = mysqli_insert_id($db);
        redirect_to(url_for('/doctor/echipamente/arataechipamentnou.php?id=' . $id_nou));
    } else {
        echo mysqli_error($db);
        exit;
    }
    



} else {
    redirect_to(url_for('/doctor/echipamente/adaugaechipament.php'));
}

?>
