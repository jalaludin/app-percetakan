<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class dashboard extends CI_Controller {

	function index()
	{
		if($this->session->userdata("logged_in")!="")
		{
			$d['mark_dashboard'] = "active";
			$d['mark_pelanggan'] = "";
			$d['mark_user'] = "";
			$d['mark_bahan'] = "";
			$d['mark_pemesanan'] = "";
			$d['mark_pembayaran'] = "";
			$d['mark_jenis_cetakan'] = "";
			$d['mark_jenis_satuan'] = "";
<<<<<<< HEAD
			$d['mark_belum_lunas'] = "";
=======
>>>>>>> 30b93fd26dcb762b9b13b0dde45342c45bc14713
			
 			$this->load->view($GLOBALS['site_theme']."/bg_header");
 			$this->load->view($GLOBALS['site_theme']."/bg_left",$d);
 			$this->load->view($GLOBALS['site_theme']."/bg_home");
 			$this->load->view($GLOBALS['site_theme']."/bg_footer");
		}
		else
		{
			redirect("login");
		}
	}

	function logout()
	{
		if($this->session->userdata("logged_in")!="")
		{
			$this->session->sess_destroy();
			redirect("dashboard");
		}
		else
		{
			redirect("login");
		}
	}
}
