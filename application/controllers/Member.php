<?php

class Member extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('Mcrud');
		$this->load->library("session");
	}

	public function index(){
		$data['costumer']=$this->Mcrud->get_all_data('costumer')->result();
		$this->template->load('layout_admin','admin/member/index', $data);
	}

	public function aktif($id){
		$dataUpdate=array('statusAktif'=>'Y');
		$this->Mcrud->update('costumer',$dataUpdate,'id_costumer',$id);
		redirect('costumer');
	}

	public function non_aktif($id){
		$dataUpdate=array('statusAktif'=>'N');
		$this->Mcrud->update('costumer',$dataUpdate,'id_costumer',$id);
		redirect('costumer');
	}
}