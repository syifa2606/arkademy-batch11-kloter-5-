<?php 

    include("config.php");
    $query = $db->query("DELETE FROM nama_pekerja WHERE id='$_GET[id]'");
    header('location: ../index.php');