<body onload="window.print()">    
</body><style type="text/css">
    body
    {
        font-family: sans-serif;
        font-size: 14px;
    }
    th{
        padding: 5px;
        font-weight: bold;
        font-size: 12px;
        border-color: #7E7E7E;
    }
    td{
        font-size: 12px;
        padding: 3px;
    }
    h2{
        text-align: left;
        margin-bottom: 13px;
    }
    .potong
    {
        page-break-after:always;
    }
</style>
<img src="<?php echo base_url();?>uploads/logo.jpg" width='500' height='100' alt="">
          

<h2 class="center">LAPORAN PEMBAYARAN</h2>
            <table  class="table table-striped table-bordered">
             <tr><td width="150">NIS</td><td> : <?php echo $this->session->userdata('no_identitas') ?></td></tr>
                <tr><td>Nama</td><td>   : <?php echo $this->session->userdata('nama_lengkap') ?></td></tr>
                <tr><td>KELAS</td><td> : <?php echo $rombel['kelas']?></td></tr>
               <tr><td>JURUSAN</td><td> : <?php echo $rombel['nama_jurusan']?></td></tr>
               <td>SEMESTER</td><td>:  <?php echo get_tahun_akademik_aktif('semester_aktif')?></td></tr>
                 
        
            </table>
            
        </div>
    </div>
    <!-- end: DYNAMIC TABLE PANEL -->
</div>
</table>
<?php
$nis= $this->session->userdata('no_identitas');
$sql2 = $this->db->query("SELECT  tp.nis,tp.tanggal,tj.nama_jenis_pembayaran,tp.jumlah,tb.jumlah_biaya
                FROM tbl_pembayaran as tp,tbl_jenis_pembayaran as tj,tbl_biaya_sekolah as tb
                WHERE tp.id_jenis_pembayaran=tj.id_jenis_pembayaran and tp.id_jenis_pembayaran=tb.id_jenis_pembayaran and tp.nis=$nis");
        ?>
<div class="col-md-12">
    <!-- start: DYNAMIC TABLE PANEL -->

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="fa fa-external-link-square"></h3> Nilai Semester

        </div>
        <h3></h3>
        <div class="panel-body">
           <table border="1" cellspacing="0" bordercolor="#7E7E7E">
            <tr><th>No</th><th width="100">TANGGAL</th><th width="200">JENIS PEMBAYARAN</th><th width="100">JUMLAH</th></tr>
               <?php
               $no=1;
               foreach ($sql2->result() as $row){
                echo "<tr><td>$no</td><td>".$row->tanggal."</td><td>".strtoupper($row->nama_jenis_pembayaran)."</td><td>".$row->jumlah."</td></tr>";
                $no++;
                }
                ?>
           </table>
             </div>
                        <!-- end: DYNAMIC TABLE PANEL -->
                    </div>
                    </div>
    
