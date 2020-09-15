<!-- start: PAGE HEADER -->
<div class="row">
    <div class="col-sm-12">
        <!-- start: PAGE TITLE & BREADCRUMB -->
        <ol class="breadcrumb">
            <li>
                <a href="<?php echo base_url()?>siswa">Data Siswa</a>
            </li>
            <li class="active">
                Tambah Data Siswa
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
            <i class="fa fa-external-link-square"></i> Tambah Data Siswa
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
            echo form_open_multipart('users/add','role="form" class="form-horizontal"');
            ?>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="form-field-1">
                        NO IDENTITAS
                    </label>
                    <div class="col-sm-8">
                        <input type="text" name="no_identitas" placeholder="MASUKAN NAMA LENGKAP" id="form-field-1" class="form-control" type="text">
                    </div>
                </div>

                    <div class="form-group">
                    <label class="col-sm-2 control-label" for="form-field-1">
                        NAMA LENGKAP
                    </label>
                    <div class="col-sm-8">
                        <input type="text" name="nama_lengkap" placeholder="MASUKAN NAMA LENGKAP" id="form-field-1" class="form-control" type="text">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label" for="form-field-1">
                        TEMPAT,TGL LAHIR
                    </label>
                    <div class="col-sm-5">
                        <input type="text" name="tempat_lahir" placeholder="TEMPAT LAHIR" id="tempat_lahir" class="form-control" type="text">
                    </div>
                        <div class="col-sm-3">
                        <input type="date" name="tanggal_lahir" placeholder="TANGGAL LAHIR" id="tanggal_lahir" class="form-control" type="text">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label" for="form-field-1">
                    GENDER
                    </label>
                    <div class="col-sm-2">
                        <?php
                        echo form_dropdown('gender',array('Laki-laki'=>'LAKI-LAKI','Wanita'=>'Wanita'),null,"class='form-control'")

                        ?>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label" for="form-field-1">
                    AGAMA
                    </label>
                    <div class="col-sm-2">
                            <?php
                        echo form_dropdown('kd_agama',array('Islam'=>'Islam','Kristen'=>'Kristen','Khatolik'=>'Khatolik'
                            ,'Hindu'=>'Hindu','Budha'=>'Budha','Lain-lain'=>'Lain-lain'),null,"class='form-control'")

                        ?>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label" for="form-field-1">
                    ALAMAT
                    </label>
                    <div class="col-sm-8">
                        <input type="text" name="alamat" placeholder="MASUKAN NAMA LENGKAP" id="form-field-1" class="form-control" type="text">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label" for="form-field-1">
                    NO HP
                    </label>
                    <div class="col-sm-8">
                        <input type="text" name="no_hp" placeholder="MASUKAN NAMA LENGKAP" id="form-field-1" class="form-control" type="text">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label" for="form-field-1">
                    EMAIL
                    </label>
                    <div class="col-sm-8">
                        <input type="text" name="email" placeholder="MASUKAN NAMA LENGKAP" id="form-field-1" class="form-control" type="text">
                    </div>
                </div>


                <div class="form-group">
                    <label class="col-sm-2 control-label" for="form-field-1">
                    USERNAME
                    </label>
                    <div class="col-sm-8">
                        <input type="text" name="username" placeholder="MASUKAN USERNAME" id="form-field-1" class="form-control" type="text">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label" for="form-field-1">
                        PASSWORD
                    </label>
                    <div class="col-sm-8">
                        <input type="password" name="password" placeholder="MASUKAN PASSWORD" id="form-field-1" class="form-control" type="text">
                    </div>
                </div>
                
                
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="form-field-1">
                    LEVEL USER
                    </label>
                    <div class="col-sm-2">
                        <?php
                        echo cmb_dinamis('id_level_user','tbl_level_user','nama_level','id_level_user');

                        ?>
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

        


                    <div class="form-group">
                    <label class="col-sm-2 control-label" for="form-field-1">
                
                    </label>
                    <div class="col-sm-1">
                        <button type="submit" name="submit" class="btn btn-danger btn-sm">SIMPAN</button> 
                        </div>
                        <div class="col-sm-1">
                        
                        <?php echo anchor('users','KEMBALI',array('class'=>'btn btn-info btn-sm'));?>
                    </div>
                </div>
                
                
                
                
            </form>
        </div>
    </div>
    <!-- end: TEXT FIELDS PANEL -->
</div>