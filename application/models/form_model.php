<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Form_model extends CI_Model {
	public function CekNoForm(){
		// aku perlu ambil dulu data yang terdahulu
		$limit = '1';
		$offset = '0';
		$aturan = array(
			'jenis' => 'fk',
			'site' => 'mkk',
			'status' => '0'
			);
        $query = $this->db->order_by('id','DESC')->get_where('no_inv', array('jenis' => $aturan['jenis'],'site' => $aturan['site'],'status' => $aturan['status']), $limit, $offset);
        // $query = $this->db->order_by('birth_date', 'ASC')->get_where($this->tbl_name, $where);
        return $query->result_array();

        // $no_urut = $query[0]['nomor']+1;
        // return $no_urut;
	}
	public function create_form($no_urut_f)
	{
		$data_form = array(
			'nomor' => $no_urut_f ,
			'jenis' => 'fk' ,
			'tipe_form' => '1',
			'site' => 'mkk'
		);
		$tambah = $this->db->insert('no_inv', $data_form);
		
		if (!$tambah) {
			return $error = $this->db->error();
		}else{
			return $tambah;
		}
	}
	public function item_temp($data)
	{
		// $item = $this->db->get();
		// angkaplah ini session dia yang ada di CI
		$session_user = 'tpi';
		$form = array(
			'jenis_form' => $data['jenis_form'],
			'nomor_form' => $data['nomor_form'],
			'lokasi' => $session_user
			);
		$item = $this->db->get_where('temp_barang_out',array('jenis_form' => $form['jenis_form'],'no_form' => $form['nomor_form'],'lokasi' => $form['lokasi']));
		return $item -> result_array();
	}

}