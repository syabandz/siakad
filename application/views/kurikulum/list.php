<div class="col-md-12">
                        <!-- start: DYNAMIC TABLE PANEL -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-external-link-square"></i> Data Kurikulum
                                <div class="panel-tools">
                                
                                </div>
                            </div>
                            <div class="panel-body">
                               


            <table id="mytable" class="table table-striped table-bordered table-hover table-full-width dataTable" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>NAMA KURIKULUM</th>
                        <th>AKTIF</th>
                         <th><?php echo anchor('kurikulum/add','Tambah data',array('class'=>'btn btn-success btn-sm'))?></th>
                    </tr>
                    </tr>
                </thead>
            </table>
        </div>
                       
    </div>
    </div>
                       
                    </div>
    


    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.0/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.js"></script>
 
    <script>
        $(document).ready(function() {
            var t = $('#mytable').DataTable( {
                "ajax": '<?php echo site_url('kurikulum/data'); ?>',
                "order": [[ 2, 'asc' ]],
                "columns": [
                    {
                        "data": null,
                        "width": "50px",
                        "sClass": "text-center",
                        "orderable": false,
                    }, 

                    {   "data": "nama_kurikulum",
                        "width": "200px",
                        "sClass":"text-center"
                    },

                    {   "data": "is_aktif",
                        "width": "200px",
                        "sClass": "text-center"
                    },
                    
                    {   "data": "aksi",
                        "width": "180px",
                        "sClass": "text-center"
                    },
                ]
            } );
               
            t.on( 'order.dt search.dt', function () {
                t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
                    cell.innerHTML = i+1;
                } );
            } ).draw();
        } );
    </script>
    
