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
                                echo form_open_multipart('siswa/add','role="form" class="form-horizontal"');
                                ?>

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
                                		 NIS
                                        </label>
                                        <div class="col-sm-2">
                                            <input type="text" name="nis" placeholder="MASUKAN NIS" id="nis" class="form-control" type="text">
                                        </div>
                                    </div>

                                     <div class="form-group">
                                        <label class="col-sm-2 control-label" for="form-field-1">
                                		 NAMA LENGKAP
                                        </label>
                                        <div class="col-sm-8">
                                            <input type="text" name="nama" placeholder="MASUKAN NAMA LENGKAP" id="nama" class="form-control" type="text">
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
                                            <input type="text" name="tanggal_lahir" placeholder="TANGGAL LAHIR" id="tanggal_lahir" onclick = "displayDatePicker('tanggal_lahir')" class="form-control" type="text">
                                        </div>
                                    </div>
                                 
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="form-field-1">
                                		GENDER
                                        </label>
                                        <div class="col-sm-2">
                                            <?php
                                            echo form_dropdown('gender',array('L'=>'LAKI-LAKI','P'=>'PEREMPUAN'),null,"class='form-control'")

                                            ?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="form-field-1">
                                        AGAMA
                                        </label>
                                        <div class="col-sm-2">
                                            <?php
                                            echo cmb_dinamis('agama','tbl_agama','nama_agama','kd_agama');

                                            ?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="form-field-1">
                                       NAMA ROMBEL
                                        </label>
                                        <div class="col-sm-2">
                                           <?php
                                            echo cmb_dinamis('rombel','tbl_rombel','nama_rombel','id_rombel')?>

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="form-field-1">
                                         NAMA BAPAK
                                        </label>
                                        <div class="col-sm-8">
                                            <input type="text" name="nama_ayah" placeholder="MASUKAN NAMA AYAH LENGKAP" id="nama" class="form-control" type="text">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="form-field-1">
                                         NAMA IBU
                                        </label>
                                        <div class="col-sm-8">
                                            <input type="text"  name="nama_ibu" placeholder="MASUKAN NAMA IBU LENGKAP" id="nama" class="form-control" type="text">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="form-field-1">
                                         ALAMAT
                                        </label>
                                        <div class="col-sm-8">
                                            <input type="text"  name="alamat" placeholder="MASUKAN ALAMAT LENGKAP" id="nama" class="form-control" type="text">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="form-field-1">
                                         SEKOLAH ASAL
                                        </label>
                                        <div class="col-sm-8">
                                            <input type="text"  name="sekolah_asal" placeholder="MASUKAN NAMA SEKOLAH ASAL" id="nama" class="form-control" type="text">
                                        </div>
                                    </div>


                                     <div class="form-group">
                                        <label class="col-sm-2 control-label" for="form-field-1">
                                	
                                        </label>
                                        <div class="col-sm-1">
                                           <button type="submit" name="submit" class="btn btn-danger btn-sm">SIMPAN</button> 
                                           </div>
                                          <div class="col-sm-1">
                                         
                                           <?php echo anchor('siswa','KEMBALI',array('class'=>'btn btn-info btn-sm'));?>
                                        </div>
                                    </div>
                                   
                                   
                                   
                                   
                                </form>
                            </div>
                        </div>
                        <!-- end: TEXT FIELDS PANEL -->
                    </div>