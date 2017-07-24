<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_user extends CI_Controller {
    // class index in hanya untuk index saja,
	 public function __construct()
    {
		
	}
	public function index(){
		var_dump("welcome to user controller");
	}
	public function add_user(){
		var_dump("function  untuk add user nantinya");
	}
	public function delete_user(){
		var_dump("function untuk delete user");
	}
	public function edit_user_non_aktif(){
		//fungsi untuk edit
		var_dump("function untuk mengedit user yang ada");
	}