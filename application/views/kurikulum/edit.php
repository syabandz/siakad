<!-- start: PAGE HEADER -->
<div class="row">
    <div class="col-sm-12">
        <!-- start: PAGE TITLE & BREADCRUMB -->
        <ol class="breadcrumb">
            <li>
                <a href="<?php echo base_url()?>mapel">Data Kurikulum</a>
            </li>
            <li class="active">
                Ubah Data Kurikulum
            </li>
        </ol>
        <div class="page-header">
            <h2> Data Kurikulum </h2>
        </div>
        <!-- end: PAGE TITLE & BREADCRUMB -->
    </div>
</div>
<!-- end: PAGE HEADER -->
<div class="col-sm-12">
    <!-- start: TEXT FIELDS PANEL -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <i class="fa fa-external-link-square"></i> Ubah Data Kurikulum
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
            echo form_open('kurikulum/edit','role="form" class="form-horizontal"');
            echo form_hidden('id_kurikulum',$kurikulum['id_kurikulum']);
            ?>
            <div class="form-group">
                <label class="col-sm-3 control-label" for="form-field-1">
                    NAMA KURIKULUM
                </label>
                <div class="col-sm-8">
                    <input type="text" value="<?php echo $kurikulum['nama_kurikulum']?>" name="nama_kurikulum"placeholder="NAMA KURIKULUM" id="kurikulum" class="form-control" />
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label" for="form-field-1">
                AKTIF
                </label>
                <div class="col-sm-8">
                    <?php
                    echo form_dropdown('is_aktif',array('y'=>'Aktif','n'=>'Tidak Aktif'),$kurikulum['is_aktif'],"class='form-control'")
                    ?>
                </div>
            </div>
            <div class="form-group pull-right">
                <div class="col-sm-5">
                    <button type="submit" name="submit" class="btn btn-primary btn-sm">SIMPAN</button> 
                    </div>
                    <div class="col-sm-1">
                    <?php echo anchor('kurikulum','KEMBALI',array('class'=>'btn btn-warning btn-sm'));?>
                </div>
            </div>
            </form>
        </div>
    </div>
    <!-- end: TEXT FIELDS PANEL -->
</div>