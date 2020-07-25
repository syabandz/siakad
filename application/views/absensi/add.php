<div class="col-md-6">
    <!-- start: DYNAMIC TABLE PANEL -->
    <div class="panel-heading">
            <i class="fa fa-external-link-square"></i> Biodata Siswa
        </div>
    <div class="panel panel-default">
        <div class="panel-body">
        <?php echo form_open('absensi/add');?>
            <table id="mytable" class="table table-striped table-bordered table-hover table-full-width dataTable" cellspacing="0" width="100%">
                <tr><td>NIS</td><td><input name="nis" onkeyup="isi_otomatis()" type="text" id="nis" placeholder="NIS SISWA" class="form-control"></td></tr>
                <tr><td>NAMA</td><td><input type="text" name="nama" id="nama" placeholder="NAMA SISWA" class="form-control"></td></tr>
                <tr><td>JURUSAN</td><td><input type="text" id="jurusan" placeholder="JURUSAN" class="form-control"></td></tr>
                <tr><td>KELAS</td><td><input type="text" id="kelas" placeholder="KELAS" class="form-control"></td></tr>
            </table>
        </div>
    </div>
    <!-- end: DYNAMIC TABLE PANEL -->
</div>
<div class="col-md-6">
    <!-- start: DYNAMIC TABLE PANEL -->
        <div class="panel-heading">
            <i class="fa fa-external-link-square"></i> Form Transaksi
        </div>
    <div class="panel panel-default">
        <div class="panel-body">
        
            <table id="mytable" class="table table-striped table-bordered table-hover table-full-width dataTable" cellspacing="0" width="100%">
                <tr><td>TANGGAL</td><td><input type="text" name="tanggal" placeholder="Tanggal" onclick = "displayDatePicker('tanggal')" class="form-control"></td></tr>
                <tr><td>ABSENSI</td><td><?php echo form_dropdown('absen',array('H'=>'HADIR','A'=>'ALFA','I'=>'IZIN','S'=>'SAKIT','T'=>'TERLAMBAT'),null,"class='form-control'")?></td></tr>
                <tr><td colspan="2"><button type="submit" name="submit" class="btn btn-primary btn-sm">SIMPAN TRANSAKSI</button> </<td></tr>
            </table>
        </form>
        </div>
    </div>
    <!-- end: DYNAMIC TABLE PANEL -->
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script type="text/javascript">
            function isi_otomatis(){
                var nis = $("#nis").val();
                $.ajax({
                    url: '<?php echo base_url()?>index.php/absensi/form_siswa_autocomplate',
                    data:"nis="+nis ,
                }).success(function (data) {
                    var json = data,
                    obj = JSON.parse(json);
                    $('#nama').val(obj.nama);
                    $('#kelas').val(obj.kelas);
                    $('#jurusan').val(obj.jurusan);
                    $('#rombel').val(obj.rombel);
                });
            }
        </script>


