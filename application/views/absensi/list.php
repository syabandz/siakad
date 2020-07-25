<div class="col-md-12">
                            <!-- start: DYNAMIC TABLE PANEL -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <i class="fa fa-external-link-square"></i>
                                    Data Absensi
                                    
                                </div>
                                <div class="panel-body">
                                   
        <table id="sample_1" class="table table-striped table-bordered table-hover table-full-width dataTable"  aria-describedby="sample_1_info">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>NIS</th>
                        <th>NAMA</th>
                        <th>TANGGAL</th>
                        <th>ABSEN</th>
                    </tr>
                </thead>
           </table>
                        </div>
                       
                    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.0/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.js"></script>
 
    <script>
        $(document).ready(function() {
            var t = $('#sample_1').DataTable( {
                "ajax": '<?php echo site_url('absensi/data'); ?>',
                "order": [[ 2, 'asc' ]],
                "columns": [
                    {
                        "data": null,
                        "width": "50px",
                        "sClass": "text-center",
                        "orderable": false,
                    }, 

                    {   "data": "nis",
                        "width": "100px",
                        "sClass":"text-center"
                    },
                    {   "data": "nama" },
                    {   "data": "tanggal" },


                    {   "data": "absen","width": "180px"},

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