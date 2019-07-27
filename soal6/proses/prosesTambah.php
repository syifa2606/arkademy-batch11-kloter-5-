<?php 

    include("config.php");

    $nama = $_POST['nama'];
    $kerja = $_POST['kerja'];
    $gaji = $_POST['gaji'];

    $query = $db->query("INSERT INTO nama_pekerja(nama,id_kerja,id_gaji) VALUES('$nama','$kerja','$gaji')");

    if ($query) {
        echo "<script>alert('Berhasil Menambahkan Data Ke Database');document.location.href='../index.php'</script>";   
    }else {
        echo "<script>alert('Gagal Menambahkan Data Ke Database');document.location.href='../index.php'</script>";   
    }

    