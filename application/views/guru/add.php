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
                                echo form_open('guru/add','role="form" class="form-horizontal"');
                                ?>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="form-field-1">
                                        NUPTK
                                        </label>
                                        <div class="col-sm-4">
                                            <input type="text" name="nuptk"placeholder="NUPTK" id="nuptk" class="form-control" type="text">
                                        </div>
                                    </div>

                                     <div class="form-group">
                                        <label class="col-sm-2 control-label" for="form-field-1">
                                         NAMA GURU
                                        </label>
                                        <div class="col-sm-8">
                                            <input type="text"  name="nama_guru" placeholder="MASUKAN NAMA GURU" id="nama_guru" class="form-control" type="text">
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
                                            <input type="text" name="tanggal_lahir" placeholder="TANGGAL LAHIR" id="tanggal_lahir" onclick = "displayDatePicker('tanggal_lahir')" class="form-control" >
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="form-field-1">
                                        GENDER
                                        </label>
                                        <div class="col-sm-2">
                                            <?php
                                            echo form_dropdown('gender',array('p'=>'LAKI-LAKI','w'=>'PEREMPUAN'),null,"class='form-control'")

                                            ?>
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
                                            <input type="text" name="password" placeholder="MASUKAN PASSWORD" id="form-field-1" class="form-control" type="text">
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
                                         
                                           <?php echo anchor('guru','KEMBALI',array('class'=>'btn btn-info btn-sm'));?>
                                        </div>
                                    </div>
                                   
                                   
                                </form>
                            </div>
                        </div>
                        <!-- end: TEXT FIELDS PANEL -->
                    </div>