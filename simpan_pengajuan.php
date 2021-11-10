<?php include "koneksi-mysql.php";?>
<?php
      $conn->query("insert into data_pengajuan_akta(no_surat) values('".$_POST['no_surat']."')");
      $conn->query("insert into data_pengajuan_akta(nama_pemohon) values('".$_POST['nama_pemohon']."')");
      $conn->query("insert into data_pengajuan_akta(tanggal_surat) values('".$_POST['tanggal_surat']."')");
      $conn->query("insert into data_pengajuan_akta(pemohon_merupakan) values('".$_POST['pemohon_merupakan']."')");
      $conn->query("insert into data_pengajuan_akta(bukti_hakmilik) values('".$_POST['bukti_hakmilik']."')");
      $conn->query("insert into data_pengajuan_akta(tempat_pendaftaran) values('".$_POST['tempat_pendaftaran']."')");
      header("location:aktapendaftaran.php");
?>