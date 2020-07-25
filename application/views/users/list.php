<div class="col-md-12">


                        <!-- start: DYNAMIC TABLE PANEL -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-external-link-square"></i> Tabel Users
                                <div class="panel-tools">
                                
                                </div>
                            </div>
                            <div class="panel-body">
                               


            <table id="mytable" class="table table-striped table-bordered table-hover table-full-width dataTable" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>NAMA LENGKAP</th>
                        <th>LEVEL</th>
                        <th><?php echo anchor('users/rule','RULE USER',array('class'=>'btn btn-info btn-sm'))?></th>
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
                "ajax": '<?php echo site_url('users/data'); ?>',
                "order": [[ 2, 'asc' ]],
                "columns": [
                     {
                        "data": null,
                        "width": "50px",
                        "sClass": "text-center",
                        "orderable": false,
                    },
                    {
                        "data": "nama_lengkap"
                    },
                    { "data": "nama_level" },
                    { "data": "aksi","width": "180px" },
                ]
            } );
               
            t.on( 'order.dt search.dt', function () {
                t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
                    cell.innerHTML = i+1;
                } );
            } ).draw();
        } );
    </script>