<div class="col-sm-12">
                        <!-- start: TEXT FIELDS PANEL -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-external-link-square"></i> Tambah Jurusan
                                <div class="panel-tools">
                                    

                                </div>
                            </div>
                            <div class="panel-body">
                         
                                <?php
                                echo form_open('jurusan/add','role="form" class="form-horizontal"');
                                ?>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="form-field-1">
                                         KODE JURUSAN
                                        </label>
                                        <div class="col-sm-2">
                                            <input type="text" name="kd_jurusan"placeholder="KODE JURUSAN" id="kd_jurusan" class="form-control" type="text">
                                        </div>
                                    </div>

                                     <div class="form-group">
                                        <label class="col-sm-2 control-label" for="form-field-1">
                                         NAMA JURUSAN
                                        </label>
                                        <div class="col-sm-8">
                                            <input type="text"  name="nama_jurusan" placeholder="MASUKAN NAMA JURUSAN" id="nama_jurusan" class="form-control" type="text">
                                        </div>
                                    </div>
                                   
                                   

                                     <div class="form-group">
                                        <label class="col-sm-2 control-label" for="form-field-1">
                                    
                                        </label>
                                        <div class="col-sm-1">
                                           <button type="submit" name="submit" class="btn btn-danger btn-sm">SIMPAN</button> 
                                           </div>
                                          <div class="col-sm-1">
                                         
                                           <?php echo anchor('jurusan','KEMBALI',array('class'=>'btn btn-info btn-sm'));?>
                                        </div>
                                    </div>
                                   
                                   
                                </form>
                            </div>
                        </div>
                        <!-- end: TEXT FIELDS PANEL -->
                    </div>