<!-- start: PAGE HEADER -->
<div class="row">
    <div class="col-sm-12">
        <!-- start: PAGE TITLE & BREADCRUMB -->
        <ol class="breadcrumb">
            <li>
                <a href="<?php echo base_url()?>mapel">Data Menu</a>
            </li>
            <li class="active">
                Tambah Data Menu
            </li>
        </ol>
        <div class="page-header">
            <h2> Data Menu </h2>
        </div>
        <!-- end: PAGE TITLE & BREADCRUMB -->
    </div>
</div>
<!-- end: PAGE HEADER -->
<div class="col-sm-12">
    <!-- start: TEXT FIELDS PANEL -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <i class="fa fa-external-link-square"></i> Tambah Data Menu
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
            echo form_open('menu/add','role="form" class="form-horizontal"');
            ?>
            <div class="form-group">
                <label class="col-sm-3 control-label" for="form-field-1">
                NAMA MENU
                </label>
                <div class="col-sm-8">
                    <input type="text" name="nama_menu"placeholder="NAMA MENU" id="form-field-1" class="form-control" />
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label" for="form-field-1">
                LINK
                </label>
                <div class="col-sm-8">
                    <input type="text"  name="link" placeholder="MASUKAN LINK MENU" id="form-field-1" class="form-control" />
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label" for="form-field-1">
                ICON
                </label>
                <div class="col-sm-8">
                    <input type="text" name="icon"placeholder="ICON" id="form-field-1" class="form-control" />
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label" for="form-field-1">
                IS MAIN MENU
                </label>
                <div class="col-sm-8">
                <select name="is_main_menu" class="form-control">
                        <option value="0">MAIN MENU</option>
                    <?php
                    $menu = $this->db->get('tabel_menu');
                    foreach ($menu->result() as $row){
                        echo "<option value='$row->id'>$row->nama_menu</option>";
                    }
                    ?>
                </select>
                </div>
            </div>
            <br>
            <div class="form-group pull-right">
                <div class="col-sm-5">
                    <button type="submit" name="submit" class="btn btn-primary btn-sm">SIMPAN</button> 
                    </div>
                    <div class="col-sm-1">
                    <?php echo anchor('menu','KEMBALI',array('class'=>'btn btn-warning btn-sm'));?>
                </div>
            </div>
            </form>
        </div>
    </div>
    <!-- end: TEXT FIELDS PANEL -->
</div>