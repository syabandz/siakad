<?php

class Ganti_password extends CI_Controller {
public function cek_aktif() {
        if ($this->session->userdata('admin_valid') == false && $this->session->userdata('admin_id') == "") {
            redirect('ganti_password');
        } 
    }
    
    public function rubah_password() {
        $this->cek_aktif();
        
        //var def session
        $a['sess_admin_id'] = $this->session->userdata('admin_id');
        $a['sess_level'] = $this->session->userdata('admin_level');
        $a['sess_user'] = $this->session->userdata('admin_user');
        $a['sess_konid'] = $this->session->userdata('admin_konid');

        //var def uri segment
        $uri2 = mysql_real_escape_string($this->uri->segment(2));
        $uri3 = mysql_real_escape_string($this->uri->segment(3));
        $uri4 = mysql_real_escape_string($this->uri->segment(4));

        //var post from json
        $p = json_decode(file_get_contents('php://input'));
        $ret = array();
        if ($uri3 == "simpan") {
            $p1_md5 = md5($p->p1);
            $p2_md5 = md5($p->p2);
            $p3_md5 = md5($p->p3);

            $cek_pass_lama = $this->db->query("SELECT password FROM tbl_user WHERE id = '".$a['sess_admin_id']."'")->row();

            if ($cek_pass_lama->password != $p1_md5) {
                $ret['status'] = "error";
                $ret['msg'] = "Password lama tidak sama...";
            } else if ($p2_md5 != $p3_md5) {
                $ret['status'] = "error";
                $ret['msg'] = "Password baru konfirmasinya tidak sama...";
            } else if (strlen($p->p2) < 6) {
                $ret['status'] = "error";
                $ret['msg'] = "Password baru minimal terdiri dari 6 huruf..";
            } else {
                $this->db->query("UPDATE m_admin SET password = '".$p3_md5."' WHERE id = '".$a['sess_admin_id']."'");
                $ret['status'] = "ok";
                $ret['msg'] = "Password berhasil diubah...";
            }
            $this->j($ret);
            exit;
        } else {
            $data = $this->db->query("SELECT id, kon_id, level, username FROM tbl_user WHERE id = '".$a['sess_admin_id']."'")->row();
            $this->j($data);
            exit;
        }
    }
        public function index() {
        $this->template->load('template','ganti_password');
    }
    
    public function act_login() {
        
        $username   = $this->bersih($_POST['username']);
        $password   = $this->bersih($_POST['password']);
        
        $password2  = md5($password);
        
        $q_data     = $this->db->query("SELECT * FROM tbl_user WHERE username = '".$username."' AND password = '$password2'");
        $j_data     = $q_data->num_rows();
        $a_data     = $q_data->row();
        
        $_log       = array();
        if ($j_data === 1) {

            $sess_nama_user = "";

            if ($a_data->level == "siswa") {
                $det_user = $this->db->query("SELECT nama FROM m_siswa WHERE id = '".$a_data->kon_id."'")->row();
                if (!empty($det_user)) {
                    $sess_nama_user = $det_user->nama;
                }
            } else if ($a_data->level == "guru") {
                $det_user = $this->db->query("SELECT nama FROM m_guru WHERE id = '".$a_data->kon_id."'")->row();
                if (!empty($det_user)) {
                    $sess_nama_user = $det_user->nama;
                }
            } else {
                $sess_nama_user = "Administrator Pusat";
            }

            $data = array(
                    'admin_id' => $a_data->id,
                    'admin_user' => $a_data->username,
                    'admin_level' => $a_data->level,
                    'admin_konid' => $a_data->kon_id,
                    'admin_nama' => $sess_nama_user,
                    'admin_valid' => true
                    );
            $this->session->set_userdata($data);
            $_log['log']['status']          = "1";
            $_log['log']['keterangan']      = "Login berhasil";
            $_log['log']['detil_admin']     = $this->session->userdata;
        } else {
            $_log['log']['status']          = "0";
            $_log['log']['keterangan']      = "Maaf, username dan password tidak ditemukan";
            $_log['log']['detil_admin']     = null;
        }
        
        $this->j($_log);
    }
}