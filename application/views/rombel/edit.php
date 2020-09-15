<!-- start: PAGE HEADER -->
<div class="row">
    <div class="col-sm-12">
        <!-- start: PAGE TITLE & BREADCRUMB -->
        <ol class="breadcrumb">
            <li>
                <a href="<?php echo base_url()?>mapel">Data Rombel</a>
            </li>
            <li class="active">
                Ubah Data Rombel
            </li>
        </ol>
        <div class="page-header">
            <h2> Data Rombongan Belajar </h2>
        </div>
        <!-- end: PAGE TITLE & BREADCRUMB -->
    </div>
</div>
<!-- end: PAGE HEADER -->
<div class="col-sm-12">
    <!-- start: TEXT FIELDS PANEL -->
    <div class="panel panel-default">
    <div class="panel-heading">
            <i class="fa fa-external-link-square"></i> Ubah Data Rombongan Belajar
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
            echo form_open_multipart('rombel/edit','role="form" class="form-horizontal"');
            echo form_hidden('id_rombel',$rombel['id_rombel']);
            ?>
            <div class="form-group">
            <label class="col-sm-3 control-label" for="form-field-1">
                NAMA ROMBEL
                </label>
                <div class="col-sm-8">
                    <input type="text" value="<?php echo $rombel['nama_rombel'];?>" name="nama_rombel" placeholder="NAMA ROMBEL" id="nama_rombel" class="form-control" />
                </div>
            </div>
            <div class="form-group">
            <label class="col-sm-3 control-label" for="form-field-1">
                    JURUSAN
                </label>
                <div class="col-sm-8">
                    <?php echo cmb_dinamis('jurusan', 'tbl_jurusan', 'nama_jurusan', 'kd_jurusan',$rombel['kd_jurusan']) ?>
                </div>
            </div>
            <div class="form-group">
            <label class="col-sm-3 control-label" for="form-field-1">
                    KELAS
                </label>
                <div class="col-sm-8">
                    <select name="kelas" class="form-control">
                        <?php
                        for ($i = 1; $i <= $info['jumlah_kelas']; $i++) {
                            echo "<option value='$i' ";
                            echo $rombel['kelas']==$i?'selected':'';
                            echo ">Kelas $i</option>";
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group pull-right">
                <div class="col-sm-5">
                    <button type="submit" name="submit" class="btn btn-primary btn-sm">SIMPAN</button> 
                    </div>
                    <div class="col-sm-1">
                    <?php echo anchor('rombel','KEMBALI',array('class'=>'btn btn-warning btn-sm'));?>
                </div>
            </div>
            </form>
        </div>
    </div>
    <!-- end: TEXT FIELDS PANEL -->
</div>