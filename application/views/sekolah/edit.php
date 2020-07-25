<div class="col-sm-12">
    <!-- start: TEXT FIELDS PANEL -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <i class="fa fa-external-link-square"></i> Info Sekolah
            <div class="panel-tools">
                <a class="btn btn-xs btn-link panel-expand" href="#">
                    <i class="fa fa-resize-full"></i>
                </a>
                <a class="btn btn-xs btn-link panel-close" href="#">
                    <i class="fa fa-times"></i>
                </a>
            </div>
        </div>
        <div class="panel-body">
        <?php
        echo form_open_multipart('sekolah/edit','role="form" class="form-horizontal"');
        echo form_hidden('id_sekolah',$sekolah['id_sekolah']);
        ?>
            <div class="form-group">
                <label class="col-sm-3 control-label" for="form-field-1">
                    NAMA SEKOLAH
                </label>
                <div class="col-sm-8">
                    <input type="text"  id="kd_sekolah" class="form-control"  value="SMAIT Thariq Bin Ziyad" disabled>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label" for="form-field-1">
                    NAMA KEPALA SEKOLAH
                </label>
                <div class="col-sm-8">
                <input type="text"  id="kd_sekolah" class="form-control"  value="Sri Widianti, S.Kom, S.Th.I" disabled>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label" for="form-field-1">
                    KURIKULUM
                </label>
                <div class="col-sm-8">
                <input type="text"  id="kd_sekolah" class="form-control"  value="Kurikulum nasional & Kurikulum Islam yang disebut sebagai Kurikulum Islam Terpadu" disabled>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label" for="form-field-1">
                    STATUS AKREDITASI
                </label>
                <div class="col-sm-8">
                    <input type="text"  id="kd_sekolah" class="form-control"  value="BAN (Badan Akreditasi Nasional) provinsi dengan predikat A" disabled>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label" for="form-field-1">
                    NPSN LAMA
                </label>
                <div class="col-sm-8">
                    <input type="text"  id="kd_sekolah" class="form-control"  value="20257102" disabled>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label" for="form-field-1">
                    ALAMAT SEKOLAH
                </label>
                <div class="col-sm-8">
                    <textarea class="form-control" rows="3" disabled>Jl. Toyogiri Sel., Jatimulya, Kec. Bekasi Tim., Bekasi, Jawa Barat 17510</textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label" for="form-field-1">
                    TAHUN DIDIRIKAN
                </label>
                <div class="col-sm-8">
                    <input type="text"  id="kd_sekolah" class="form-control"  value="2008" disabled>
                </div>
            </div>
            <!-- <div class="form-group">
                <label class="col-sm-3 control-label" for="form-field-1">
                    NO STATISTIK SEKOLAH
                </label>
                <div class="col-sm-8">
                    <input type="text" value="<?php echo $sekolah['nss']?>"   id="kd_sekolah" class="form-control" type="text">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label" for="form-field-1">
                    KODE SEKOLAH
                </label>
                <div class="col-sm-8">
                    <input type="text" value="<?php echo $sekolah['kode_sekolah']?>"  id="kd_sekolah" class="form-control" type="text">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label" for="form-field-1">
                    LUAS TANAH
                </label>
                <div class="col-sm-8">
                    <input type="text" value="<?php echo $sekolah['luas_tanah']?>" name="nama_sekolah"  id="nama_sekolah" class="form-control" type="text">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label" for="form-field-1">
                    LUAS BANGUNAN
                </label>
                <div class="col-sm-8">
                    <input type="text" value="<?php echo $sekolah['luas_bangunan']?>"  id="kd_sekolah" class="form-control" type="text">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label" for="form-field-1">
                    LATITUDE
                </label>
                <div class="col-sm-8">
                    <input type="text" value="<?php echo $sekolah['latitude']?>" id="nama_sekolah" class="form-control" type="text">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label" for="form-field-1">
                    LONGITUDE
                </label>
                <div class="col-sm-8">
                    <input type="text" value="<?php echo $sekolah['longitude']?>" id="kd_sekolah" class="form-control" type="text">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label" for="form-field-1">
                    JUMLAH ROMBEL
                </label>
                <div class="col-sm-8">
                    <input type="text" value="<?php echo $sekolah['jumlah_rombel']?>"id="nama_sekolah" class="form-control" type="text">
                </div>
            </div>             -->
            </form>
        </div>
    </div>
    <!-- end: TEXT FIELDS PANEL -->
</div>