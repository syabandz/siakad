<!-- start: PAGE HEADER -->
<div class="row">
    <div class="col-sm-12">
        <!-- start: PAGE TITLE & BREADCRUMB -->
        <ol class="breadcrumb">
            <li>
                <a href="<?php echo base_url()?>mapel">Data Ruangan</a>
            </li>
            <li class="active">
                Ubah Data Ruangan
            </li>
        </ol>
        <div class="page-header">
            <h2> Data Ruangan </h2>
        </div>
        <!-- end: PAGE TITLE & BREADCRUMB -->
    </div>
</div>
<!-- end: PAGE HEADER -->
<div class="col-sm-12">
    <!-- start: TEXT FIELDS PANEL -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <i class="fa fa-external-link-square"></i> Ubah Data Ruangan
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
            echo form_open_multipart('ruang/edit','role="form" class="form-horizontal"');
            echo form_hidden('kd_ruang',$ruang['kd_ruang']);
            ?>
            <div class="form-group">
                <label class="col-sm-3 control-label" for="form-field-1">
                    KODE RUANGAN
                </label>
                <div class="col-sm-8">
                    <input type="text" value="<?php echo $ruang['kd_ruang']?>" placeholder="MASUKAN KODE RUANGAN" id="kd_ruang" class="form-control" type="text">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label" for="form-field-1">
                    NAMA RUANGAN
                </label>
                <div class="col-sm-8">
                    <input type="text" value="<?php echo $ruang['nama_ruang']?>" name="nama_ruang" placeholder="MASUKAN NAMA RUANGAN" id="nama_ruang" class="form-control" type="text">
                </div>
            </div>
            <div class="form-group pull-right">
                <div class="col-sm-5">
                    <button type="submit" name="submit" class="btn btn-primary btn-sm">SIMPAN</button> 
                    </div>
                    <div class="col-sm-1">
                    <?php echo anchor('ruang','KEMBALI',array('class'=>'btn btn-warning btn-sm'));?>
                </div>
            </div>
            </form>
        </div>
    </div>
    <!-- end: TEXT FIELDS PANEL -->
</div>