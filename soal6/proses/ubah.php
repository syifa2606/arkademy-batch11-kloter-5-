<?php 

    include("config.php");

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $kerja = $_POST['kerja'];
    $gaji = $_POST['gaji'];

    $query = $db->query("UPDATE nama_pekerja SET nama='$nama', id_kerja='$kerja', id_gaji='$gaji' WHERE id='$id'");

    if ($query) {
        echo "<script>alert('Berhasil Mengubah Data Ke Database');document.location.href='../index.php'</script>";   
    }else {
        echo "<script>alert('Gagal Mengubah Data Ke Database');document.location.href='../index.php'</script>";   
    }

    