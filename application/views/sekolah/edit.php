<div class="col-sm-12">
                        <!-- start: TEXT FIELDS PANEL -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-external-link-square"></i> Text Fields
                                <div class="panel-tools">
                                    <a class="btn btn-xs btn-link panel-collapse collapses" href="#">
                                    </a>
                                    <a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal">
                                        <i class="fa fa-wrench"></i>
                                    </a>
                                    <a class="btn btn-xs btn-link panel-refresh" href="#">
                                        <i class="fa fa-refresh"></i>
                                    </a>
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
                                        <div class="col-sm-6">
                                            <input type="text" value="<?php echo $sekolah['nama_sekolah']?>"  id="kd_sekolah" class="form-control" type="text">
                                        </div>
                                    </div>

                                     <div class="form-group">
                                        <label class="col-sm-3 control-label" for="form-field-1">
                                		 NAMA KEPALA SEKOLAH
                                        </label>
                                        <div class="col-sm-6">
                                            <input type="text" value="<?php echo $sekolah['nama_kepsek']?>" name="nama_sekolah"  id="nama_sekolah" class="form-control" type="text">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="form-field-1">
                                         KURIKULUM
                                        </label>
                                        <div class="col-sm-6">
                                            <input type="text" value="<?php echo $sekolah['kurikulum']?>" id="kd_sekolah" class="form-control" type="text">
                                        </div>
                                    </div>

                                     <div class="form-group">
                                        <label class="col-sm-3 control-label" for="form-field-1">
                                         STATUS AKREDITASI
                                        </label>
                                        <div class="col-sm-6">
                                            <input type="text" value="<?php echo $sekolah['status_akreditasi']?>" name="nama_sekolah" id="nama_sekolah" class="form-control" type="text">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="form-field-1">
                                         NO STATISTIK SEKOLAH
                                        </label>
                                        <div class="col-sm-6">
                                            <input type="text" value="<?php echo $sekolah['nss']?>"   id="kd_sekolah" class="form-control" type="text">
                                        </div>
                                    </div>

                                     <div class="form-group">
                                        <label class="col-sm-3 control-label" for="form-field-1">
                                         NPSN LAMA
                                        </label>
                                        <div class="col-sm-6">
                                            <input type="text" value="<?php echo $sekolah['npsn_lama']?>"  placeholder="MASUKAN NAMA MATA PELAJARAN" id="nama_sekolah" class="form-control" type="text">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="form-field-1">
                                         KODE SEKOLAH
                                        </label>
                                        <div class="col-sm-6">
                                            <input type="text" value="<?php echo $sekolah['kode_sekolah']?>"  id="kd_sekolah" class="form-control" type="text">
                                        </div>
                                    </div>

                                     <div class="form-group">
                                        <label class="col-sm-3 control-label" for="form-field-1">
                                         ALAMAT SEKOLAH
                                        </label>
                                        <div class="col-sm-6">
                                        <textarea class="form-control" rows="3">.<?php echo $sekolah['alamat_sekolah']?>.</textarea>
                                            
                                        </div>
                                    </div>

                                   <div class="form-group">
                                        <label class="col-sm-3 control-label" for="form-field-1">
                                         LUAS TANAH
                                        </label>
                                        <div class="col-sm-6">
                                            <input type="text" value="<?php echo $sekolah['luas_tanah']?>" name="nama_sekolah"  id="nama_sekolah" class="form-control" type="text">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="form-field-1">
                                         LUAS BANGUNAN
                                        </label>
                                        <div class="col-sm-6">
                                            <input type="text" value="<?php echo $sekolah['luas_bangunan']?>"  id="kd_sekolah" class="form-control" type="text">
                                        </div>
                                    </div>

                                     <div class="form-group">
                                        <label class="col-sm-3 control-label" for="form-field-1">
                                         TANGGAL PENDIRIAN
                                        </label>
                                        <div class="col-sm-6">
                                            <input type="textarea" value="<?php echo $sekolah['tanggal_pendirian']?>"name="nama_sekolah"  id="nama_sekolah" class="form-control" type="textarea">
                                        </div>
                                    </div>

                                     <div class="form-group">
                                        <label class="col-sm-3 control-label" for="form-field-1">
                                         LATITUDE
                                        </label>
                                        <div class="col-sm-6">
                                            <input type="text" value="<?php echo $sekolah['latitude']?>" id="nama_sekolah" class="form-control" type="text">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="form-field-1">
                                         LONGITUDE
                                        </label>
                                        <div class="col-sm-6">
                                            <input type="text" value="<?php echo $sekolah['longitude']?>" id="kd_sekolah" class="form-control" type="text">
                                        </div>
                                    </div>

                                     <div class="form-group">
                                        <label class="col-sm-3 control-label" for="form-field-1">
                                         JUMLAH ROMBEL
                                        </label>
                                        <div class="col-sm-6">
                                            <input type="text" value="<?php echo $sekolah['jumlah_rombel']?>"id="nama_sekolah" class="form-control" type="text">
                                        </div>
                                    </div>
                                   
                                </form>
                            </div>
                        </div>
                        <!-- end: TEXT FIELDS PANEL -->
                    </div>