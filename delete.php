<?php
    require "koneksi.php";

    $id = $_GET['id'];

    $result = mysqli_query($conn, "DELETE FROM datamember WHERE id=$id");

    if ($result){
        echo "
        <script> 
            alert ('Data Berhasil Dihapus');
            document.location.href = 'tampilan.php';
        </script>";
    } else {
        echo "
        <script> 
            alert ('Data Gagal Dihapus');
            document.location.href = 'tampilan.php';
        </script>";
    }
?>