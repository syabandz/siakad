<!-- start: PAGE HEADER -->
<div class="row">
    <div class="col-sm-12">
        <!-- start: PAGE TITLE & BREADCRUMB -->
        <ol class="breadcrumb">
            <li>
                <i class="clip-home-3"></i>&nbsp;&nbsp;
                <a href="<?php echo base_url()?>welcome">Dashboard</a>
            </li>
            <li class="active">
                Data Guru
            </li>
        </ol>
        <!-- end: PAGE TITLE & BREADCRUMB -->
    </div>
</div><br>
<!-- end: PAGE HEADER -->
<div class="col-md-12">
    <!-- start: DYNAMIC TABLE PANEL -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <i class="fa fa-external-link-square"></i>
            Data Guru
            <div class="panel-tools">
                <a class="btn btn-xs btn-link panel-collapse collapses" href="#">
                </a>
                <a class="btn btn-xs btn-link panel-close" href="#">
                    <i class="fa fa-times"></i>
                </a>
            </div>
        </div>
        <div class="panel-body">
            <?php echo anchor('guru/add','Tambah data',array('class'=>'btn btn-success btn-sm'))?><br /><br />
            <table id="sample_1" class="table table-striped table-bordered table-hover table-full-width dataTable"  aria-describedby="sample_1_info">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>NUPTK</th>
                        <th>NAMA GURU</th>
                        <th>TEMPAT LAHIR</th>
                        <th>TANGGAL LAHIR</th>
                        <th>GENDER</th>
                    </tr>
                </thead>
           </table>
        </div>
    </div>
</div> 
<script src="<?php echo base_url();?>assets/jquery/jquery-2.2.3.min.js"></script>
<script>
    $(document).ready(function() {
        var t = $('#sample_1').DataTable( {
            "ajax": '<?php echo site_url('guru/data'); ?>',
            "order": [[ 2, 'asc' ]],
            "columns": [
                {
                    "data": null,
                    "width": "50px",
                    "sClass": "text-center",
                    "orderable": false,
                }, 

                {   "data": "nuptk",
                    "width": "100px",
                    "sClass":"text-center"
                },

                {   "data": "nama_guru" },
                {   "data": "tempat_lahir" },
                {   "data": "tanggal_lahir" },


                {   "data": "gender","width": "180px"},

                {   "data": "aksi",
                    "width": "180px",
                    "sClass": "text-center" }
            ]
        } );
            
        t.on( 'order.dt search.dt', function () {
            t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
                cell.innerHTML = i+1;
            } );
        } ).draw();
    } );
</script>