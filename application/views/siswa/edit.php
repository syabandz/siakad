<!-- start: PAGE HEADER -->
<div class="row">
    <div class="col-sm-12">
        <!-- start: PAGE TITLE & BREADCRUMB -->
        <ol class="breadcrumb">
            <li>
                <a href="<?php echo base_url()?>siswa">Data Siswa</a>
            </li>
            <li class="active">
                Ubah Data Siswa
            </li>
        </ol>
        <div class="page-header">
            <h2> Data Siswa </h2>
        </div>
        <!-- end: PAGE TITLE & BREADCRUMB -->
    </div>
</div>
<!-- end: PAGE HEADER -->
<div class="col-sm-12">
    <!-- start: TEXT FIELDS PANEL -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <i class="fa fa-external-link-square"></i> Ubah Data Siswa
            <div class="panel-tools">
                <a class="btn btn-xs btn-link panel-collapse collapses" href="#">
                </a>
                <a class="btn btn-xs btn-link panel-close" href="#">
                    <i class="fa fa-times"></i>
                </a>
            </div>
        </div>
        <div class="panel-body">
            <?php   echo form_open_multipart('siswa/edit','role="form" class="form-horizontal"');
                    echo form_hidden('nis',$siswa['nis']);
            ?>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="form-field-1">
                        NIS
                    </label>
                    <div class="col-sm-8">
                        <input type="text" value="<?php echo $siswa['nis']?>" placeholder="MASUKAN NIS" id="nis" class="form-control" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="form-field-1">
                        NAMA LENGKAP
                    </label>
                    <div class="col-sm-8">
                        <input type="text" value="<?php echo $siswa['nama']?>" name="nama" placeholder="MASUKAN NAMA LENGKAP" id="nama" class="form-control" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="form-field-1">
                        TEMPAT,TGL LAHIR
                    </label>
                    <div class="col-sm-5">
                        <input type="text" value="<?php echo $siswa['tempat_lahir']?>" name="tempat_lahir" placeholder="TEMPAT LAHIR" id="tempat_lahir" class="form-control" />
                    </div>
                        <div class="col-sm-3">
                        <input type="text" value="<?php echo $siswa['tanggal_lahir']?>" name="tanggal_lahir" placeholder="TANGGAL LAHIR" id="tanggal_lahir" class="form-control datepicker" style="background: white" readonly />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="form-field-1">
                        GENDER
                    </label>
                    <div class="col-sm-8">
                        <?php echo form_dropdown('gender',array('L'=>'LAKI-LAKI','P'=>'PEREMPUAN'),$siswa['gender'],"class='form-control'"); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="form-field-1">
                        AGAMA
                    </label>
                    <div class="col-sm-8">
                        <?php echo cmb_dinamis('agama','tbl_agama','nama_agama','kd_agama',$siswa['kd_agama']); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="form-field-1">
                        PILIH ROMBEL
                    </label>
                    <div class="col-sm-8">
                        <?php echo cmb_dinamis('rombel','tbl_rombel','nama_rombel','id_rombel',$siswa['id_rombel']); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="form-field-1">
                        NAMA BAPAK
                    </label>
                    <div class="col-sm-8">
                        <input type="text" value="<?php echo $siswa['nama_ayah']?>" name="nama_ayah" placeholder="MASUKAN NAMA AYAH LENGKAP" id="nama" class="form-control" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="form-field-1">
                        NAMA IBU
                    </label>
                    <div class="col-sm-8">
                        <input type="text" value="<?php echo $siswa['nama_ibu']?>" name="nama_ibu" placeholder="MASUKAN NAMA IBU LENGKAP" id="nama" class="form-control" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="form-field-1">
                        ALAMAT
                    </label>
                    <div class="col-sm-8">
                        <input type="text" value="<?php echo $siswa['alamat']?>" name="alamat" placeholder="MASUKAN ALAMAT LENGKAP" id="nama" class="form-control" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="form-field-1">
                        SEKOLAH ASAL
                    </label>
                    <div class="col-sm-8">
                        <input type="text" value="<?php echo $siswa['sekolah_asal']?>" name="sekolah_asal" placeholder="MASUKAN NAMA SEKOLAH ASAL" id="nama" class="form-control" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="form-field-1">
                    USERNAME
                    </label>
                    <div class="col-sm-8">
                        <input type="text" name="username" placeholder="MASUKAN USERNAME" id="form-field-1" class="form-control" value="<?php echo $siswa['username']?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="form-field-1">
                        PASSWORD
                    </label>
                    <div class="col-sm-8">
                        <input type="text" name="password" placeholder="MASUKAN PASSWORD" id="form-field-1" class="form-control" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="form-field-1">
                        FOTO
                    </label>
                    <div class="col-sm-8">
                        <input type="file" name="userfile" class="form-control" />
                    </div>
                </div>
                <br>
                <div class="form-group pull-right">
                    <div class="col-sm-5">
                        <button type="submit" name="submit" class="btn btn-primary btn-sm">SIMPAN</button> 
                        </div>
                        <div class="col-sm-1">
                        <?php echo anchor('siswa','KEMBALI',array('class'=>'btn btn-warning btn-sm'));?>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- end: TEXT FIELDS PANEL -->
</div>