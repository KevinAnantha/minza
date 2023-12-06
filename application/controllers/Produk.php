<?php

class produk extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('Mcrud');
		$this->load->library('session');
		$this->load->library('upload');
	}

	public function index(){
		// $data['vbiayakirim']=$this->Mcrud->get_view('vbiayakirim')->result();
		$data = $this->Mcrud->get_all_data('produk')->result();
			if($data!=NULL){
				$i = 0;
	            foreach($data as $o){
	                $data['produk'][$i] = array(
	                    'id_produk' => $o->id_produk,
	                    'nama_produk' => $o->nama_produk,
	                    'harga_produk' => $o->harga_produk,
	                    'deskripsi' => $o->deskripsi,
	                    'qty' => $o->qty,
	                    'gambar' => $o->gambar
	                );
	                $data['produk'][$i] = (object)$data['produk'][$i];
	                $i++;
	            }
	        }else{
	        	$data['produk']=array();
	        }
		$this->template->load('layout_admin','admin/produk/index', $data);
	}

	public function add(){
		$data['kategori']=$this->Mcrud->get_all_data('produk')->result();
    	$this->template->load('layout_admin','admin/produk/form_add',$data);
	}

	public function save(){
		$data = $this->input->post();
		$target_dir = "./uploads/";
        $extension  = pathinfo( $_FILES["gambar"]["name"], PATHINFO_EXTENSION );
        $target_name = $data['nama_produk']."-gambar.".$extension;
        $_FILES["gambar"]["name"] = $target_name;

        // var_dump($foto);
        $target_file = $target_dir . basename($_FILES["gambar"]["name"]);
        move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file);

        $data['gambar'] = $target_name;
        $status = $this->Mcrud->insert('produk', $data);
		
        

        if($status != NULL ){
                // $this->session->set_flashdata('success', "Registrasi Berhasil, Silahkan Login"); 
                redirect('produk');
            } else {
                // $this->session->set_flashdata('error', "Registrasi Gagal, Silahkan Ulangi Kembali");
                redirect('produk');
            }

	}
		
	public function getid($id){
		$dataWhere=array('id_produk'=>$id);
		$result = $this->Mcrud->get_by_id('produk', $dataWhere)->row_object();
        $data['produk'] = array(
        	'id_produk' => $result->id_produk,
	        'nama_produk' => $result->nama_produk,
	        'harga_produk' => $result->harga_produk,
	        'deskripsi' => $result->deskripsi,
	        'qty' => $result->qty,
	        'gambar' => $result->gambar

        );
        $data['produk'] = (object)$data['produk'];
		$this->template->load('layout_admin','admin/produk/form_edit', $data);
	}

	public function edit(){
		$id = $this->input->post('id_produk');
		$data = $this->input->post();
		$target_dir = "./uploads/";
        $extension  = pathinfo( $_FILES["gambar"]["name"], PATHINFO_EXTENSION );
        $target_name = $data['nama_produk']."-gambar.".$extension;
        $_FILES["gambar"]["name"] = $target_name;

        // var_dump($foto);
        $target_file = $target_dir . basename($_FILES["gambar"]["name"]);
        move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file);

        $data['gambar'] = $target_name;
        $this->Mcrud->updatee('produk', $data, 'id_produk', $id);   
        redirect('produk');

        // if($status != NULL ){
        //         // $this->session->set_flashdata('success', "Registrasi Berhasil, Silahkan Login"); 
        //         redirect('produk');
        //     } else {
        //         // $this->session->set_flashdata('error', "Registrasi Gagal, Silahkan Ulangi Kembali");
        //         redirect('produk');
        //     }
	}

	public function delete($id){
		$dataDelete=array('id_produk'=>$id);
		$this->Mcrud->delete($dataDelete,'produk');
		$this->session->set_flashdata('success', 'produk berhasil dihapus');
		$this->session->set_flashdata('error', 'produk gagal dihapus');
		redirect('produk');
	}
}