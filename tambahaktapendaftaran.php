<?php include "header.php";?>
        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Toggle Sidebar</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item ">
                                <a class="nav-link" href="aktapendaftaran.php">Data</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="tambahaktapendaftaran.php">Tambah Data</a>
                            </li>
                        </ul>
                    </div>
                    
                </div>
            </nav>
    <?php include "koneksi-mysql.php";?>

    <?php 
          if (isset ($_GET['no_surat'])){
            $no_surat=$_GET['no_surat'];
          } else{
              $no_surat=null;
          }
    ?>

    <?php
          $nama_pemohon="";
          $tanggal_surat="";
          $pemohon_merupakan="";
          $bukti_hakmilik="";
          $tempat_pendaftaran="";

          $sql=$conn->query("select * from data_pengajuan_akta where no_surat='".$no_surat."'");
          while ($rs=$sql->fetch_object()){
            $nama_pemohon=$rs->nama_pemohon;
            $tanggal_surat=$rs->tanggal_surat;
            $pemohon_merupakan=$rs->pemohon_merupakan;
            $bukti_hakmilik=$rs->bukti_hakmilik;
            $tempat_pendaftaran=$rs->tempat_pendaftaran;
          }
    ?>


    <?php echo $no_surat;?>
    <h3><?php if ($no_surat>0) {echo "Edit";} else {echo "Tambah";}?> Pengajuan Akta Pendaftaran </h3>
    <h5> Tambah Data </h5>
    <div class="col-6">
    <form class="row g-3" action="simpan_pengajuan.php" method="POST">
              <div class="col-md-6">
                <label for="inputsuratpermohonan" class="form-label">Nama Pemohon</label>
                <input type="text" name="no_surat" class="form-control" id="nosurat" required>
              </div>
              <div class="col-md-6">
                <label for="inputnama" class="form-label">No Surat</label>
                <input type="text" name="nama_pemohon" class="form-control" id="namapemohon" required>
              </div>
              <div class="col-md-6">
                <label for="inputtanggal" class="form-label">Tanggal Surat Pemohonan</label>
                <input type="date" name="tanggal_surat" class="form-control" id="tanggalsurat" required>
              </div>
              <div class="col-md-6">
                <label for="inputState" class="form-label">Pemohon Merupakan</label>
                <select name="pemohon_merupakan" id="inputState" class="form-select"required>
                  <option>Pilih Salah satu</option>
                  <option value="Pemilik kapal">Pemilik Kapal</option>
                  <option value="Bukan pemilik kapal">Bukan Pemilik Kapal</option>
                </select>
              </div>
              <div class="col-md-6">
                <label for="inputbuktihakmilik" class="form-label">Bukti Hak Milik</label>
                <input type="text" name="bukti_hakmilik" class="form-control" id="buktihakmilik" required>
              </div>
              <div class="col-md-6">
                <label for="inputtempatpendaftaran" class="form-label">Tempat Pendaftaran</label>
                <input type="text" name="tempat_pendaftaran" class="form-control" id="tempatpendaftaran" required>
</div>
            <br>
              <div class="col-md-12 mb-3">
                <button type="submit" class="btn btn-primary mb-3 mt-3">Simpan</button>
              </div>
            </form>
        </div>
        </div>
    </div>

<?php include "footer.php";?>
<script>
    $(document).ready(function() {
    $('#example').DataTable();
} );
</script>