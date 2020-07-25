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
                                echo form_open('kurikulum/add','role="form" class="form-horizontal"');
                                ?>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="form-field-1">
                                         NAMA KURIKULUM
                                        </label>
                                        <div class="col-sm-2">
                                            <input type="text" name="nama_kurikulum"placeholder="NAMA KURIKULUM" id="nama_kurikulum" class="form-control" type="text">
                                        </div>
                                    </div>

                                     <div class="form-group">
                                        <label class="col-sm-2 control-label" for="form-field-1">
                                        AKTIF
                                        </label>
                                        <div class="col-sm-2">
                                            <?php
                                            echo form_dropdown('is_aktif',array('y'=>'Aktif','n'=>'Tidak Aktif'),null,"class='form-control'")

                                            ?>
                                        </div>
                                    </div>
                                   
                                   

                                     <div class="form-group">
                                        <label class="col-sm-2 control-label" for="form-field-1">
                                    
                                        </label>
                                        <div class="col-sm-1">
                                           <button type="submit" name="submit" class="btn btn-danger btn-sm">SIMPAN</button> 
                                           </div>
                                          <div class="col-sm-1">
                                         
                                           <?php echo anchor('kurikulum','KEMBALI',array('class'=>'btn btn-info btn-sm'));?>
                                        </div>
                                    </div>
                                   
                                   
                                </form>
                            </div>
                        </div>
                        <!-- end: TEXT FIELDS PANEL -->
                    </div>