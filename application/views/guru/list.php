<div class="col-md-12">
                            <!-- start: DYNAMIC TABLE PANEL -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <i class="fa fa-external-link-square"></i>
                                    Data guru
                                    
                                </div>
                                <div class="panel-body">
                                   
        <table id="sample_1" class="table table-striped table-bordered table-hover table-full-width dataTable"  aria-describedby="sample_1_info">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>NUPTK</th>
                        <th>NAMA GURU</th>
                        <th>TEMPAT LAHIR</th>
                        <th>TANGGAL LAHIR</th>
                        <th>GENDER</th>
                        <th><?php echo anchor('guru/add','Tambah data',array('class'=>'btn btn-success btn-sm'))?></th>
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

    </div>