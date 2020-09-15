<!-- start: PAGE HEADER -->
<div class="row">
    <div class="col-sm-12">
        <!-- start: PAGE TITLE & BREADCRUMB -->
        <ol class="breadcrumb">
            <li class="active">
                Data Rombongan Kelas
            </li>
        </ol>
        <div class="page-header">
            <h2> Data Rombongan Kelas </h2>
        </div>
        <!-- end: PAGE TITLE & BREADCRUMB -->
    </div>
</div>
<!-- end: PAGE HEADER -->
<div class="col-sm-12">
    <!-- start: DYNAMIC TABLE PANEL -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <i class="fa fa-external-link-square"></i> Data Rombongan Kelas
            <div class="panel-tools">
                <a class="btn btn-xs btn-link panel-collapse collapses" href="#">
                </a>
                <a class="btn btn-xs btn-link panel-close" href="#">
                    <i class="fa fa-times"></i>
                </a>
            </div>
        </div>
        <div class="panel-body">
        <?php echo anchor('rombel/add','Tambah data',array('class'=>'btn btn-success btn-sm'))?><br /><br />
            <div class = "table-responsive">
                <table id="mytable" class="table table-striped table-bordered table-hover table-full-width dataTable" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>NAMA ROMBEL</th>
                            <th>JURUSAN</th>
                            <th>KELAS</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo base_url();?>assets/jquery/dist/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    var t = $('#mytable').DataTable({
        fixedHeader: { header: true },
        "lengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]],
        ajax: {"url": "rombel/json", "type": "POST"},
        "order": [[ 2, 'asc' ]],
        "columns": [
            {
                "data": null,
                "width": "50px",
                "className":"text-center",
                "orderable": false,
            }, 
            {   
                "data": "nama_rombel",
                "width": "200px",
                "className":"text-center",
            },
            {   
                "data": "kd_jurusan",
                "width": "200px",
                "className":"text-center",
            },
            {   
                "data": "kelas",
                "width": "200px",
                "className":"text-center",
            },
            {
                "data" : "action",
                "orderable": false,
                "className" : "text-center"
            },
        ],
    });        

    t.on( 'order.dt search.dt', function () {
        t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
            cell.innerHTML = i+1;
        });
    }).draw();
});
</script>


<script type="text/javascript">
function deletedata(id_rombel) {
    swal({
        type: "warning",
        title: "Are you sure?",
        text: "You will not be able to recover this Data!",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Yes, delete it!",
        cancelButtonText: "No, cancel!",
        closeOnConfirm: false,
        closeOnCancel: false
    },
    function (isConfirm){
        if (isConfirm) {
            $.ajax({
                url : "<?php echo base_url('rombel/delete/') ?>",
                type : "POST",
                dataType : "JSON",
                data : {id_rombel:id_rombel},
                success: function(data) {
                    window.location.href = "<?php echo site_url('rombel'); ?>";
                },
                error: function() {
                    swal({
                        type : "error",
                        title: "Failed",
                        text : "Your Data can not deleted !",
                        });
                },
            });
        } else {
            swal("Cancelled", "Your Data is safe :)", "error");
        }
    });
}
</script>

<?php if ($this->session->userdata('message') <> '') { ?>
<script type="text/javascript">
$(document).ready(function() {
    swal({
            type : "success",
            title: "Success",
            text : "<?php echo $this->session->userdata('message'); ?> !",
        });
});
</script>
<?php } ?>