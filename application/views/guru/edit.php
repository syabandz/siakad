<!-- start: PAGE HEADER -->
<div class="row">
    <div class="col-sm-12">
        <!-- start: PAGE TITLE & BREADCRUMB -->
        <ol class="breadcrumb">
            <li>
                <a href="<?php echo base_url()?>guru">Data Guru</a>
            </li>
            <li class="active">
                Ubah Data Guru
            </li>
        </ol>
        <div class="page-header">
            <h2> Data Guru </h2>
        </div>
        <!-- end: PAGE TITLE & BREADCRUMB -->
    </div>
</div>
<!-- end: PAGE HEADER -->
<div class="col-sm-12">
    <!-- start: TEXT FIELDS PANEL -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <i class="fa fa-external-link-square"></i> Ubah Data Guru
            <div class="panel-tools">
                <a class="btn btn-xs btn-link panel-collapse collapses" href="#">
                </a>
                <a class="btn btn-xs btn-link panel-close" href="#">
                    <i class="fa fa-times"></i>
                </a>
            </div>
        </div>
        <div class="panel-body">
        <?php   echo form_open_multipart('guru/edit','role="form" class="form-horizontal"');
                echo form_hidden('id_guru',$guru['id_guru']);
        ?>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="form-field-1">
                    NUPTK
                    </label>
                    <div class="col-sm-4">
                        <input type="text"  value="<?php echo $guru['nuptk']?>" name="nuptk"placeholder="NUPTK" id="nuptk" class="form-control" type="text">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="form-field-1">
                        NAMA GURU
                    </label>
                    <div class="col-sm-8">
                        <input type="text"  v value="<?php echo $guru['nama_guru']?>" name="nama_guru" placeholder="MASUKAN NAMA GURU" id="nama_guru" class="form-control" type="text">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="form-field-1">
                        TEMPAT,TGL LAHIR
                    </label>
                    <div class="col-sm-5">
                        <input type="text" name="tempat_lahir" value="<?php echo $guru['tempat_lahir']?>"placeholder="TEMPAT LAHIR" id="tempat_lahir" class="form-control" type="text">
                    </div>
                        <div class="col-sm-3">
                        <input type="text" name="tanggal_lahir" value="<?php echo $guru['tanggal_lahir']?>" placeholder="TANGGAL LAHIR" id="tanggal_lahir" onclick = "displayDatePicker('tanggal_lahir')" class="form-control" type="text">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="form-field-1">
                        GENDER
                    </label>
                    <div class="col-sm-2">
                        <?php echo form_dropdown('gender',array('p'=>'LAKI-LAKI','w'=>'PEREMPUAN'),$guru['gender'],"class='form-control'"); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="form-field-1">
                    FOTO
                    </label>
                    <div class="col-sm-5">
                        <input type="file" name="userfile" >
                    </div>
                </div>
                <br>
                <div class="form-group pull-right">
                    <div class="col-sm-5">
                        <button type="submit" name="submit" class="btn btn-primary btn-sm">SIMPAN</button> 
                        </div>
                        <div class="col-sm-1">
                        <?php echo anchor('guru','KEMBALI',array('class'=>'btn btn-warning btn-sm'));?>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- end: TEXT FIELDS PANEL -->
</div>