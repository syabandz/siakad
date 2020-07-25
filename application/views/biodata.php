<div class="col-sm-12">
   
    <!-- start: TEXT FIELDS PANEL -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <i class="fa fa-external-link-square"></i>
            BIODATA 
            <div class="panel-tools">
               
            </div>
        </div>
        <div class="panel-body">

            <?php
                                echo form_open_multipart('user/edit','role="form" class="form-horizontal"');
                                ?>
               
           
           <div class="form-group">
            
            <div class="col-sm-4">
           
                <img class="" width='250px'src="<?php echo base_url('/uploads/foto_user/'.$this->session->userdata('foto'));?>"/>
                
               
            </div>
             <div class="col-sm-6">
              <table class="table table-bordered">
             <tr>
                <td width='180px'>No Identitas </td>
                <td><?php echo inputan('text', 'nama','col-sm-12','NO IDENTITAS ..', 1, $this->session->userdata['no_identitas'],'');?></td>

            </tr>   
            <tr>
                <td width='180px'>Nama Lengkap</td>
              
                 <td><?php echo inputan('text', 'nama','col-sm-12','Nama Lengkap ..', 1, $this->session->userdata['nama_lengkap'],'');?></td>
            </tr>     
            <tr>
                <td>Tempat lahir </td>
               
                <td><?php echo inputan('text', 'nama','col-sm-12','TAMPAT LAHIR ..', 1, $this->session->userdata['tempat_lahir'],'');?></td>
            </tr>

            <tr>
                <td> tanggal_lahir </td>
                
                <td><?php echo inputan('text', 'nama','col-sm-12','TANGGAL LAHIR ..', 1, $this->session->userdata['tanggal_lahir'],'');?></td>
            </tr>

            <tr>
                <td width='180px'>gender</td>
               
                <td><?php echo inputan('text', 'nama','col-sm-12','GENDER ..', 1, $this->session->userdata['gender'],'');?></td>

            </tr>  
            
            <tr>
                <td width='180px'>Agama</td>
                
                <td><?php echo inputan('text', 'nama','col-sm-12','AGAMA ..', 1, $this->session->userdata['kd_agama'],'');?></td>

            </tr>     
            <tr>
                <td>Alamat </td>
                <td><?php echo textarea('alamat', '', 'col-sm-12', 2, $this->session->userdata['alamat'],'');?></td>
                
            </tr>

            <tr>
                <td>No HP</td>
                
                <td><?php echo inputan('text', 'nama','col-sm-12','NO HP ..', 1, $this->session->userdata['no_hp'],'');?></td>
            </tr>   
            <tr>
                <td>Email</td>
               
                <td><?php echo inputan('text', 'nama','col-sm-12','EMAIL ..', 1, $this->session->userdata['email'],'');?></td>
            </tr>

            
            </table>
              
            
            
            </div>
        </div>
            
            </form>
        </div>
    </div>
    <!-- end: TEXT FIELDS PANEL -->
</div>