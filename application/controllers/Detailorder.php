<?php

class Detailorder extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('Mcrud');
		$this->load->library('session');
		$this->load->library('upload');
	}

	public function index(){
		$data = $this->Mcrud->get_all_data('detail_beli')->result();
			if($data!=NULL){
				$i = 0;
	            foreach($data as $o){
	                $data['detail_beli'][$i] = array(
	                    'id_detail_beli' => $o->id_detail_beli,
	                    'id_beli' => $this->Mcrud->get_detail('dibeli','id_beli',$o->id_beli,'id_beli'),
	                    'nama_produk' => $this->Mcrud->get_detail('produk','id_produk',$o->id_produk,'nama_produk'),
	                    'harga_produk' => $this->Mcrud->get_detail('produk','id_produk',$o->id_produk,'harga_produk'),
	                    'jml_beli' => $o->jml_beli,
	                    'sub_total' => $o->sub_total
	                );
	                $data['detail_beli'][$i] = (object)$data['detail_beli'][$i];
	                $i++;
	            }
	        }else{
	        	$data['detail_beli']=array();
	        }
		$this->template->load('layout_admin','admin/detailorder/index', $data);
	}
}