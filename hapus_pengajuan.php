<?php include "koneksi-mysql.php";?>
<?php
    $conn->query("delete from data_pengajuan_akta where no_surat='".$_GET['no_surat']."'");
    header("location:aktapendaftaran.php");
?>