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
          
<h2>LAPORAN NILAI</h2>
            <table  class="table table-striped table-bordered">
             <tr><td width="150">NIS</td><td> : <?php echo $this->session->userdata('no_identitas') ?></td></tr>
                <tr><td>Nama</td><td>   : <?php echo $this->session->userdata('nama_lengkap') ?></td></tr>
                <tr><td>KELASL</td><td> : <?php echo $rombel['kelas']?></td></tr>
               <tr><td>JURUSAN</td><td> : <?php echo $rombel['nama_jurusan']?></td></tr>
               <tr><td>SEMESTER</td><td>:  <?php echo get_tahun_akademik_aktif('semester_aktif')?></td></tr>
                 
        
            </table>
            
        </div>
    </div>
    <!-- end: DYNAMIC TABLE PANEL -->
</div>
</table>
<?php
$sql2=$this->db->query("SELECT tm.nama_mapel,tn.nilai
            FROM tbl_nilai as tn, tbl_jadwal as tj,tbl_mapel as tm
            WHERE tn.id_jadwal=tj.id_jadwal and tj.kd_mapel=tm.kd_mapel and tn.nis=".$this->session->userdata('no_identitas'));
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
            <tr><th>No</th><th width="350">MATA PELAJARAN</th><th width="100">NILAI</th></tr>
               <?php
               $no=1;
               foreach ($sql2->result() as $row){
                echo "<tr><td>$no</td><td>".strtoupper($row->nama_mapel)."</td><td>".$row->nilai."</td></tr>";
                $no++;
                }
                ?>
           </table>
             </div>
                        <!-- end: DYNAMIC TABLE PANEL -->
                    </div>
                    </div>
    
