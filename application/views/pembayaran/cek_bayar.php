<div class="col-md-6">
    <!-- start: DYNAMIC TABLE PANEL -->
    <div class="panel-heading">
        <i class="fa fa-external-link-square"></i> Data Siswa

    </div>
    <div class="panel panel-default">
        <div class="panel-body">
            
            <table  class="table table-striped table-bordered">
             <tr><td>NIS</td><td><?php echo $this->session->userdata('no_identitas') ?></td></tr>
                <tr><td>NAMA</td><td><?php echo $this->session->userdata('nama_lengkap') ?></td></tr>
               <tr><td>KELAS</td><td> : <?php echo $rombel['kelas']?></td></tr>
               <tr><td>JURUSAN</td><td> : <?php echo $rombel['nama_jurusan']?></td></tr>
               <tr><td>SEMESTER</td><td> :  <?php echo get_tahun_akademik_aktif('semester_aktif')?></td></tr>
                 
            </table>
            
        </div>
    </div>
    <!-- end: DYNAMIC TABLE PANEL -->
</div>
<div class="col-md-6">
    <!-- start: DYNAMIC TABLE PANEL -->

    <div class="panel panel-default">
        <div class="panel-heading">
            <i class="fa fa-external-link-square"></i> DETAIL PEMBAYARAN

        </div>
        <div class="panel-body">
           <table class="table table bordered">
            <tr><th width="1">No</th><th width="60">TANGGAL</th><th width="100">JENIS PEMBAYARAN</th><th width="100">JUMLAH</th></tr>
               <?php
               $no=1;
               foreach ($cek->result() as $row){
                echo "<tr><td>$no</td><td width='40'>".$row->tanggal."</td><td>".strtoupper($row->nama_jenis_pembayaran)."</td><td>".$row->jumlah."</td></tr>";
                $no++;
                }
                ?>
           </table>
             </div>
                        <!-- end: DYNAMIC TABLE PANEL -->
                    </div>
                    </div>

    
<?php echo form_open('cek_bayar/cetak'); ?>
<tr><td></td><td><button type="submit" class="btn btn-green btn-sm"><i class="fa fa-unlink" aria-hidden="true"></i> Cetak Data</button></td></tr>
</form>
