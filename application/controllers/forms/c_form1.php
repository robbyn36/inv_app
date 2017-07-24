<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_form1 extends CI_Controller {
	public function __construct()
	    {
	        parent::__construct();
	        $this->load->model('form_model');
	    }
    // di sini harus di pastkan semua data sudah siap untuk di gunakan, mulai dari jenis form
    public function index()
		{
			// di sini untuk menampilkan data form 1 yang sudah dan belum selesai di kerjakan
			$this->load->view('forms/form1');
		}
	public function tambah_form()
		{
			// di sini harus di cek
			// echo $this->uri->segment(2);
			// $this->load->view('admin');
			
			// melakukan pengecekan dan pengambilan nomor series
			$cek = $this->form_model->CekNoForm();
			$no_urut_f = $cek[0]['nomor']+1;
			$tambah = $this->form_model->create_form($no_urut_f);
			// jika sukses dan redirect ke controler lain
			if ($tambah) {
				redirect('forms/c_form1/edit_form/'.$cek[0]['jenis'].'/'.$no_urut_f);
			}

			//di sinikan hanya untuk proses add, jika berhasil arahkan di ke form untuk penambahan item" yang akan di gunakan
			// $this->load->view('forms/form1');
		}
	public function CekNoForm()
		{
			$cek = $this->form_model->CekNoForm();
			var_dump($cek[0]['nomor']+1);

		}	
	public function read_form()
		{
			// di sini harus di cek

		}
	public function edit_form()
		{
			// di sini harus di cek
			// mengambil data dari temp_tabel_inv
			$jenis_form = $this->uri->segment(4);
			$nomor_form = $this->uri->segment(5);
			$data2 = array('jenis_form' => $jenis_form,'nomor_form' => $nomor_form);
			// mengambil data dari modal
			$data['item_temp'] = $this->form_model->item_temp($data2);
			$this->load->view('forms/edit_form',$data);
			
		}
	public function delete_form()
		{
			// di sini harus di cek
			
		}
}