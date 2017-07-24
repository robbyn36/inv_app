<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_user extends CI_Controller {
    // class index in hanya untuk index saja,
	 public function __construct()
    {
		
	}
	public function index(){
		var_dump("welcome to user controller");
	}