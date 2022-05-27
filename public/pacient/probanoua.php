<?php require_once('../../privat/initializare.php'); ?>

<?php 
    if(is_post_request()){
        $proba_sn = mt_rand(10000,99999);
        $analiza_n = $_POST['analiza'];
        $pacient_n = $_POST['nume'];
        $doctor_n = '';
        $frigider_n = '';
        $sertar_n = 0;
        $locatie_n = '';
        $analiza_c = '';
        $rezultat_p = '';
        $status_p = 'COMANDAT';

        $sql = "INSERT INTO probe ";
        $sql .="(proba_sn, analiza_nume, pacient_nume, doctor_nume, frigider_nume, sertar_numar, locatie_nume, analiza_calitate, rezultat, status) ";
        $sql .="VALUES (";
        $sql .="'" . $proba_sn . "',";
        $sql .="'" . $analiza_n . "',";
        $sql .="'" . $pacient_n . "',";
        $sql .="'" . $doctor_n . "',";
        $sql .="'" . $frigider_n . "',";
        $sql .="'" . $sertar_n . "',";
        $sql .="'" . $locatie_m . "',";
        $sql .="'" . $analiza_c . "',";
        $sql .="'" . $rezultat_p . "',";
        $sql .="'" . $status_p . "'";
        $sql .=")";

        $rezultat = mysqli_query($db, $sql);

        if($rezultat){
            $id_n = mysqli_insert_id($db);
            redirect_to(url_for('/pacient/probacomandata.php?id=' . $id_n));
        } else {
            echo mysqli_error($db);
            exit;
            
        }


    } else {
        redirect_to(url_for('/pacient/proba/comandaproba.php'));
    }




?>