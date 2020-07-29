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
        <div class="page-header">
            <h2> Data Guru </h2>
        </div>
        <!-- end: PAGE TITLE & BREADCRUMB -->
    </div>
</div>
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
            <table id="mytable" class="table table-striped table-bordered table-hover table-full-width dataTable"  aria-describedby="sample_1_info">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>NUPTK</th>
                        <th>NAMA GURU</th>
                        <th>TEMPAT LAHIR</th>
                        <th>TANGGAL LAHIR</th>
                        <th>GENDER</th>
                        <th>Action</th>
                    </tr>
                </thead>
           </table>
        </div>
    </div>
</div> 
<script src="<?php echo base_url();?>assets/jquery/dist/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings)
    {
        return {
            "iStart": oSettings._iDisplayStart,
            "iEnd": oSettings.fnDisplayEnd(),
            "iLength": oSettings._iDisplayLength,
            "iTotal": oSettings.fnRecordsTotal(),
            "iFilteredTotal": oSettings.fnRecordsDisplay(),
            "iPage": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
            "iTotalPages": Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
        };
    };

    var t = $("#mytable").dataTable({
        fixedHeader: { header: true },
        "lengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]],
        initComplete: function() {
            var api = this.api();
            $('#mytable_filter input')
                    .off('.DT')
                    .on('keyup.DT', function(e) {
                        if (e.keyCode == 13) {
                            api.search(this.value).draw();
                }
            });
        },
        oLanguage: {
            sProcessing: "loading..."
        },
        processing: true,
        serverSide: true,
        ajax: {"url": "guru/json", "type": "POST"},
        columns: [
            {
                "data": "id_guru",
                "orderable": false
            },{"data": "nuptk"},{"data": "nama_guru"},{"data": "tempat_lahir"},{"data": "tanggal_lahir"},{"data": "gender"},
            {
                "data" : "action",
                "orderable": false,
                "className" : "text-center"
            }
        ],
        order: [[0, 'desc']],
        rowCallback: function(row, data, iDisplayIndex) {
            var info = this.fnPagingInfo();
            var page = info.iPage;
            var length = info.iLength;
            var index = page * length + (iDisplayIndex + 1);
            $('td:eq(0)', row).html(index);
        }
    });
});
</script>
