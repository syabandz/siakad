<!-- start: PAGE HEADER -->
<div class="row">
    <div class="col-sm-12">
        <!-- start: PAGE TITLE & BREADCRUMB -->
        <ol class="breadcrumb">
            <li>
                <a href="<?php echo base_url()?>mapel">Data Mata Pelajaran</a>
            </li>
            <li class="active">
                Ubah Data Mata Pelajaran
            </li>
        </ol>
        <div class="page-header">
            <h2> Data Mata Pelajaran </h2>
        </div>
        <!-- end: PAGE TITLE & BREADCRUMB -->
    </div>
</div>
<!-- end: PAGE HEADER -->
<div class="col-sm-12">
                        <!-- start: TEXT FIELDS PANEL -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-external-link-square"></i> Ubah Data Mata Pelajaran
                                <div class="panel-tools">
                <a class="btn btn-xs btn-link panel-collapse collapses" href="#">
                </a>
                <a class="btn btn-xs btn-link panel-close" href="#">
                    <i class="fa fa-times"></i>
                </a>
            </div>
                            </div>
                            <div class="panel-body">
                         
                                <?php
                                echo form_open_multipart('mapel/edit','role="form" class="form-horizontal"');
                                echo form_hidden('kd_mapel',$mapel['kd_mapel']);
                                ?>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="form-field-1">
                                		 KODE MAPEL
                                        </label>
                                        <div class="col-sm-2">
                                            <input type="text" value="<?php echo $mapel['kd_mapel']?>" placeholder="MASUKAN KODE MAPEL" id="kd_mapel" class="form-control" type="text">
                                        </div>
                                    </div>

                                     <div class="form-group">
                                        <label class="col-sm-3 control-label" for="form-field-1">
                                		 NAMA MATA PELAJARAN
                                        </label>
                                        <div class="col-sm-8">
                                            <input type="text" value="<?php echo $mapel['nama_mapel']?>" name="nama_mapel" placeholder="MASUKAN NAMA MATA PELAJARAN" id="nama_mapel" class="form-control" type="text">
                                        </div>
                                    </div>
                                   
                                   

                                     <div class="form-group">
                                        <label class="col-sm-2 control-label" for="form-field-1">
                                	
                                        </label>
                                        <div class="col-sm-1">
                                           <button type="submit" name="submit" class="btn btn-danger btn-sm">SIMPAN</button> 
                                           </div>
                                          <div class="col-sm-1">
                                         
                                           <?php echo anchor('mapel','KEMBALI',array('class'=>'btn btn-info btn-sm'));?>
                                        </div>
                                    </div>
                                   
                                   
                                   
                                   
                                </form>
                            </div>
                        </div>
                        <!-- end: TEXT FIELDS PANEL -->
                    </div>