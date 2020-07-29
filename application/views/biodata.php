<!-- start: PAGE HEADER -->
<div class="row">
    <div class="col-sm-12">
        <!-- start: PAGE TITLE & BREADCRUMB -->
        <ol class="breadcrumb">
            <li>
                <i class="clip-home-3"></i>&nbsp;&nbsp;
                <a href="<?php echo base_url()?>welcome">Dashboard</a>
            </li>
            <li class="active">
                User Profil
            </li>
        </ol>
        <div class="page-header">
            <h2> User Profil </h2>
        </div>
        <!-- end: PAGE TITLE & BREADCRUMB -->
    </div>
</div>
<!-- end: PAGE HEADER -->
<div class="col-sm-12"><br>
    <!-- start: TEXT FIELDS PANEL -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <i class="fa fa-external-link-square"></i>
            User Profil
        </div>
        <div class="panel-body">
            <?php
            echo form_open_multipart('user/edit','role="form" class="form-horizontal"');
            ?>
                <div class="form-group">
                    <div class="col-sm-4">
                        <img class="" width='250px'src="<?php echo base_url('/uploads/foto_user/'.$this->session->userdata('foto'));?>"/>
                    </div>
                    <div class="col-sm-8">
                        <table class="table table-bordered">
                            <tr>
                                <td width='180px'>No Identitas </td>
                                <td><?php echo $this->session->userdata['no_identitas']; ?></td>
                            </tr>   
                            <tr>
                                <td width='180px'>Nama Lengkap</td>
                                <td><?php echo $this->session->userdata['nama_lengkap']; ?></td>
                            </tr>     
                            <tr>
                                <td>Tempat dan Tanggal Lahir </td>
                                <td><?php echo $this->session->userdata['tempat_lahir'] . ', ' . $this->session->userdata['tanggal_lahir']; ?></td>
                            </tr>
                            <tr>
                                <td width='180px'>gender</td>
                                <td><?php echo $this->session->userdata['gender']; ?></td>
                            </tr>  
                            <tr>
                                <td width='180px'>Agama</td>
                                <td><?php echo $this->session->userdata['kd_agama']; ?></td>
                            </tr>     
                            <tr>
                                <td>Alamat </td>
                                <td><?php echo $this->session->userdata['alamat']; ?></td>
                            </tr>
                            <tr>
                                <td>No HP</td>
                                <td><?php echo $this->session->userdata['no_hp']; ?></td>
                            </tr>   
                            <tr>
                                <td>Email</td>
                                <td><?php echo $this->session->userdata['email']; ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>