<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Spinwheel extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_Spinwheel', 'mod');
	}

	public function index()
	{
		$this->load->view('V_Spinwheel');
	}

	public function getHadiah()
	{
		$query = $this->db->get('tb_hadiah')->result_array();
		$range = count($query);
		for ($i=0; $i<$range; $i++) {
			$data[] = [
				'image'		=> 'assets/'.$query[$i]['gambar'],
				'caption'	=> $query[$i]['keterangan']
			];
		}
		echo json_encode($data);
	}
}
?>