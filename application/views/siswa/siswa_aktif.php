<!-- start: PAGE HEADER -->
<div class="row">
    <div class="col-sm-12">
        <!-- start: PAGE TITLE & BREADCRUMB -->
        <ol class="breadcrumb">
            <li class="active">
                Data Siswa
            </li>
        </ol>
        <div class="page-header">
            <h2> Data Siswa </h2>
        </div>
        <!-- end: PAGE TITLE & BREADCRUMB -->
    </div>
</div>
<!-- end: PAGE HEADER -->
<div class="col-sm-12">
    <!-- start: DYNAMIC TABLE PANEL -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <i class="fa fa-external-link-square"></i>
            Data Siswa
            <div class="panel-tools">
                <a class="btn btn-xs btn-link panel-collapse collapses" href="#">
                </a>
                <a class="btn btn-xs btn-link panel-close" href="#">
                    <i class="fa fa-times"></i>
                </a>
            </div>
        </div>
        <div class="panel-body">
            <div class="col-md-5">
            <!-- start: DYNAMIC TABLE PANEL -->
            <div class="panel-heading">
            <i class="fa fa-external-link-square"></i>
            Data Siswa
            <div class="panel-tools">
                <a class="btn btn-xs btn-link panel-collapse collapses" href="#">
                </a>
                <a class="btn btn-xs btn-link panel-close" href="#">
                    <i class="fa fa-times"></i>
                </a>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-body">
                <?php echo form_open('siswa/data_by_rombel_excel'); ?>
                <table  class="table table-striped table-bordered">
                    <tr><td>Jurusan</td><td><?php echo cmb_dinamis('jurusan', 'tbl_jurusan', 'nama_jurusan', 'kd_jurusan', null, "id='jurusan' onchange='loadRombel()'") ?></td></tr>
                    <tr><td>Rombel</td><td><div id="rombel"></div></td></tr>
                    <tr><td></td><td><button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-unlink" aria-hidden="true"></i> Export Data</button></td></tr>
                </table>
                </form>
            </div>
        </div>
    </div>
    <!-- end: DYNAMIC TABLE PANEL -->
    <div class="col-md-6">
        <!-- start: DYNAMIC TABLE PANEL -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-external-link-square"></i> Data Siswa
            </div>
            <div class="panel-body">
                <div id="dataSiswa"></div>
            </div>
        </div>
        <!-- end: DYNAMIC TABLE PANEL -->
    </div>
</div>

<script type="text/javascript">
    $(document ).ready(function() {
        loadRombel();
    });
</script>

<script type="text/javascript">
    function loadRombel(){
        var jurusan=$("#jurusan").val();
        $.ajax({
            type:'GET',
            url :'<?php echo base_url() ?>index.php/rombel/show_combobox_rombel_by_jurusan',
            data:'jurusan='+jurusan,
            success:function(html){
                $("#rombel").html(html);
                var rombel = $("#rombel2").val();
                loadSiswa(rombel);
            }
        })
    }
    
    function loadSiswa(rombel){
        var rombel = $("#rombel2").val();
        $.ajax({
            type:'GET',
            url :'<?php echo base_url() ?>index.php/siswa/load_data_siswa_by_rombel',
            data:'rombel='+rombel,
            success:function(html){
                $("#dataSiswa").html(html);
            }
        })
    }
</script>