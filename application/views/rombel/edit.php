<div class="col-sm-12">
                        <!-- start: TEXT FIELDS PANEL -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-external-link-square"></i> Edit Rombel
                                <div class="panel-tools">
                                    

                                </div>
                            </div>
                            <div class="panel-body">
                         
                                <?php
                                echo form_open_multipart('rombel/edit','role="form" class="form-horizontal"');
                                echo form_hidden('id_rombel',$rombel['id_rombel']);
                                ?>

                                     <div class="form-group">
                                        <label class="col-sm-2 control-label" for="form-field-1">
                                        NAMA ROMBEL
                                        </label>
                                        <div class="col-sm-2">
                                            <input type="text" value="<?php echo $rombel['nama_rombel'];?>" name="nama_rombel"placeholder="NAMA ROMBEL" id="nama_rombel" class="form-control" type="text">
                                        </div>
                                    </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="form-field-1">
                                        JURUSAN
                                    </label>
                                    <div class="col-sm-9">
                                        <?php echo cmb_dinamis('jurusan', 'tbl_jurusan', 'nama_jurusan', 'kd_jurusan',$rombel['kd_jurusan']) ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="form-field-1">
                                        KELAS
                                    </label>
                                    <div class="col-sm-9">
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
                                   
                                   
                                    

                                     <div class="form-group">
                                        <label class="col-sm-2 control-label" for="form-field-1">
                                	
                                        </label>
                                        <div class="col-sm-1">
                                           <button type="submit" name="submit" class="btn btn-danger btn-sm">SIMPAN</button> 
                                           </div>
                                          <div class="col-sm-1">
                                         
                                           <?php echo anchor('rombel','KEMBALI',array('class'=>'btn btn-info btn-sm'));?>
                                        </div>
                                    </div>
                                   
                                   
                                   
                                   
                                </form>
                            </div>
                        </div>
                        <!-- end: TEXT FIELDS PANEL -->
                    </div>