<div class="col-sm-12">
                        <!-- start: TEXT FIELDS PANEL -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-external-link-square"></i> Tambah mata pelajaran
                                <div class="panel-tools">
                                   
                                </div>
                            </div>
                            <div class="panel-body">
                         
                                <?php
                                echo form_open('mapel/add','role="form" class="form-horizontal"');
                                ?>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="form-field-1">
                                         KODE MAPEL
                                        </label>
                                        <div class="col-sm-2">
                                            <input type="text" name="kd_mapel"placeholder="KODE MAPEL" id="kd_mapel" class="form-control" type="text">
                                        </div>
                                    </div>

                                     <div class="form-group">
                                        <label class="col-sm-3 control-label" for="form-field-1">
                                         NAMA MATA PELAJARAN
                                        </label>
                                        <div class="col-sm-8">
                                            <input type="text"  name="nama_mapel" placeholder="MASUKAN NAMA MATA PELAJARAN" id="nama_mapel" class="form-control" type="text">
                                        </div>
                                    </div>
                                   
                                   

                                     <div class="form-group">
                                        <label class="col-sm-2 control-label" for="form-field-1">
                                    
                                        </label>
                                        <div class="col-sm-1">
                                           <button type="submit" name="submit" class="btn btn-danger btn-sm">SIMPAN</button> 
                                           </div>
                                          <div class="col-sm-1">
                                         
                                           <?php echo anchor('mapel','KEMBALI',array('class'=>'btn btn-info btn-sm'));?>
                                        </div>
                                    </div>
                                   
                                   
                                </form>
                            </div>
                        </div>
                        <!-- end: TEXT FIELDS PANEL -->
                    </div>