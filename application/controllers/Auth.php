<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function login()
	{
        $cek = $this->db->get_where('antrian',['email' => $_POST['email']])->result_array();

        if(count($cek)==1){
            if(password_verify($_POST['password'],$cek[0]['password'])){
                $this->session->set_userdata('session_id', $cek[0]['id']);
                redirect(base_url('home'));
            }
            else{
                $this->session->set_flashdata('failed','Akun tidak ditemukan');
                redirect(base_url());        
            }
        }
        else{
            $this->session->set_flashdata('failed','Password salah !');
            redirect(base_url());        
        }
	}
    public function daftar()
    {
        $cek = $this->db->get_where('antrian',['email' => $_POST['email']])->result_array();
        if(count($cek)==1){
            $this->session->set_flashdata('failed','Email Sudah Terdaftar');
            redirect(base_url().'daftar');
        }
        else{
            $perusahaan = implode(',',$_POST['perusahaan']);
            $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
            unset($_POST['perusahaan']);
            unset($_POST['password']);
            $post = $_POST;
            $post['perusahaan'] = $perusahaan;
            $post['password'] = $password;
            $this->db->select('no_antrian');
            $this->db->order_by('id','desc');
            $this->db->limit(1);
            $getLastNo = $this->db->get('antrian')->result_array();
            $post['no_antrian'] = count($getLastNo)==0 ? 1 : $getLastNo[0]['no_antrian']+1;

            $this->load->library('ciqrcode'); //pemanggilan library QR CODE
 
            $config['cacheable']    = true; //boolean, the default is true
            $config['cachedir']     = 'assets/'; //string, the default is application/cache/
            $config['errorlog']     = 'assets/'; //string, the default is application/logs/
            $config['imagedir']     = 'assets/img/qr_code/'; //direktori penyimpanan qr code
            $config['quality']      = true; //boolean, the default is true
            $config['size']         = '1024'; //interger, the default is 1024
            $config['black']        = array(224,255,255); // array, default is array(255,255,255)
            $config['white']        = array(70,130,180); // array, default is array(0,0,0)
            $this->ciqrcode->initialize($config);
            
            $image_name = $params['no_antrian'].time(); //buat name dari qr code sesuai dengan nim
     
            $params['data'] = base_url()."nomor/".$params['no_antrian'].time(); //data yang akan di jadikan QR CODE
            $params['level'] = 'H'; //H=High
            $params['size'] = 10;
            $params['savename'] = FCPATH.$config['imagedir'].$image_name.'.png'; //simpan image QR CODE ke folder assets/images/
            $this->ciqrcode->generate($params); // fungsi untuk generate QR CODE

            $post['qr_code'] = $image_name;
            $this->db->insert('antrian',$post);
            $this->session->set_flashdata('success','Daftar Berhasil');
            redirect(base_url());        
        }
    }
}
