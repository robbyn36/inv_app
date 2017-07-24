<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_index extends CI_Controller {
    // class index in hanya untuk index saja,
	 public function __construct()
    {
        parent::__construct();
        // $this->load->library('Datatables');
        // $this->load->library('table');
        // $this->load->database();
    }
    //
    public function index(){
        $this->load->view('admin');   
    }
    public function admin()
    {
        $this->load->view('admin');
    }
}
