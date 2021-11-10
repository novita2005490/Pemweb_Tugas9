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
                            <li class="nav-item active">
                                <a class="nav-link" href="aktapendaftaran.php">Data</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="tambahaktapendaftaran.php">Tambah Data</a>
                            </li>
                        </ul>
                    </div>
                    
                </div>
            </nav>
    <?php include "koneksi-mysql.php";?>
    <h3> Pengajuan Akta Pendaftaran </h3>
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>No Surat</th>
                <th>Nama Pemohon</th>
                <th>Tanggal Surat</th>
                <th>Pemohon Merupakan</th>
                <th>Bukti Hak Milik</th>
                <th>Tempat Pendaftaran</th>
                <th colspan="2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $sql=$conn->query("select*from data_pengajuan_akta");
                while ($rs=$sql->fetch_object()){
            ?>
            <tr>
                <td><?php echo $rs->no_surat?></td>
                <td><?php echo $rs->nama_pemohon?></td>
                <td><?php echo $rs->tanggal_surat?></td>
                <td><?php echo $rs->pemohon_merupakan?></td>
                <td><?php echo $rs->bukti_hakmilik?></td>
                <td><?php echo $rs->tempat_pendaftaran?></td>
                <td>
                    <a href='tambahaktapendaftaran.php?no_surat=<?php echo $rs->no_surat;?>' class='btn btn-sm btn-warning'> Edit </a>   
                </td>
                <td>
                    <a href="hapus_pengajuan.php?no_surat=<?php echo $rs->no_surat;?>" class='btn btn-sm btn-danger'> Hapus </a>   
                </td>
            </tr>
            <?php
                }
            ?>
            
        </tbody>
    </table>
        </div>
    </div>

<?php include "footer.php";?>
<script>
    $(document).ready(function() {
    $('#example').DataTable();
} );
</script>