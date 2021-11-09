<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
        if(isset($_SESSION['session_id'])){
            redirect(base_url().'home');
        }
		$this->load->view('login');
	}
	public function daftar()
	{
		$data['perusahaan'] = $this->db->get('perusahaan')->result();
		$this->load->view('daftar',$data);
	}
	public function home()
	{
		$data['antrian'] = $this->db->get_where('antrian',['id' => $_SESSION['session_id']])->row();
		$this->load->view('kartu_antrian',$data);
	}
	public function nomor($nomor)
	{
		$data['antrian'] = $this->db->get_where('antrian',['qr_code' => $nomor])->row();
		$this->load->view('kartu_antrian',$data);
	}
	function logout(){
		session_destroy();
		redirect(base_url());
	}
}
