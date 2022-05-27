<?php 

function toate_echipamentele() {
global $db;
$sql = "SELECT * FROM echipamente ";
$sql .= "ORDER BY id ASC";
$result = mysqli_query($db, $sql);
return $result;
}

function un_singur_echipament($id) {
    global $db;
    $sql = "SELECT * FROM echipamente ";
    $sql .= "WHERE id='" . $id . "'";
    $result = mysqli_query($db, $sql);

    $echipamente = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    return $echipamente;

}

?>