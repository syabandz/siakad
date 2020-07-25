<div class="row">
                        <div class="col-md-12">
                            <!-- start: DYNAMIC TABLE PANEL -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <i class="fa fa-external-link-square"></i>
                                    Data siswa
                                   
                                </div>
            <div class="panel-body">
             <table id="mytable" class="table table-striped table-bordered table-hover table-full-width dataTable" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>NIS</th>
                        <th>NAMA</th>
                        <th>ROMBEL</th>
                        <th>TEMPAT LAHIR</th>
                        <th>TANGGAL LAHIR</th>
                        <th>GENDER</th>
                        <th><?php echo anchor('siswa/add','Tambah data',array('class'=>'btn btn-success btn-sm'))?></th>
                    </tr>
                </thead>
            </table>
                        </div>
                        <!-- end: DYNAMIC TABLE PANEL -->
                    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.0/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.js"></script>
 
    <script>
        $(document).ready(function() {
            var t = $('#mytable').DataTable( {
                "ajax": '<?php echo site_url('siswa/data'); ?>',
                "order": [[ 2, 'asc' ]],
                "columns": [
                    {
                        "data": null,
                        "width": "50px",
                        "sClass": "text-center",
                        "orderable": false,
                    }, 
                    { "data": "nis","width": "80px","sClass": "text-center"},
                    { "data": "nama","sClass": "text-center"},
                     { "data": "nama_rombel","sClass": "text-center"},
                    { "data": "tempat_lahir", "width": "120px" ,"sClass": "text-center"},
                    { "data": "tanggal_lahir", "width": "130px","sClass": "text-center" },
                    { "data": "gender","width": "80px","sClass": "text-center" },
                    { "data": "aksi","width": "180px","sClass": "text-center" },
                ]
            } );
               
            t.on( 'order.dt search.dt', function () {
                t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
                    cell.innerHTML = i+1;
                } );
            } ).draw();
        } );
    </script>
                                    
                           
                        </div>
                    </div>

           