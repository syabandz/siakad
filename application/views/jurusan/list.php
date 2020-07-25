<div class="col-md-12">
                        <!-- start: DYNAMIC TABLE PANEL -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-external-link-square"></i> Data Jurusan
                                <div class="panel-tools">
                                
                                </div>
                            </div>
                            <div class="panel-body">
                               


            <table id="mytable" class="table table-striped table-bordered table-hover table-full-width dataTable" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>KODE JURUSAN</th>
                        <th>NAMA JURUSAN</th>
                        <th><?php echo anchor('jurusan/add','Tambah data',array('class'=>'btn btn-success btn-sm'))?></th>
                    </tr>
                </thead>
           </table>
        </div>
                       
        </div>
        </div>
    



    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.0/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.js"></script>
 
    <script>
        $(document).ready(function() {
            var t = $('#mytable').DataTable( {
                "ajax": '<?php echo site_url('jurusan/data'); ?>',
                "order": [[ 2, 'asc' ]],
                "columns": [
                    {
                        "data": null,
                        "width": "50px",
                        "sClass": "text-center",
                        "orderable": false,
                    }, 

                    {   "data": "kd_jurusan"},

                    {   "data": "nama_jurusan"},

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