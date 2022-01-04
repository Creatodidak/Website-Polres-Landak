<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Blog extends CI_Controller{
	public function __construct(){
		parent:: __construct();
		$this->load->model('Mblog');
		$this->load->library('Supload');
		include APPPATH.'views/tool/function.php';
	}
     public function tambah()  
      {  
           // Lokasi path untuk upload
     $uploadPath = "./media/fotoblog/";
     // ketika melakukan submit file
     $status = $statusMsg = '';
	 $temp = explode(".", $_FILES['fileblog']['name']);
		$new_name = time().'.'.end($temp);
     if(isset($_FILES["fileblog"]["name"])){
         $status = 'error';
         if(!empty($_FILES["fileblog"]["name"])) {
             // File info
             $fileName = $new_name;
             $imageUploadPath = $uploadPath . $fileName;
             $fileType = pathinfo($imageUploadPath, PATHINFO_EXTENSION);
             // Syarat format yang diperbolehkan
             $allowTypes = array('jpg','png','jpeg','gif');
             if(in_array($fileType, $allowTypes)){
                 // array gambar sementara
                 $imageTemp = $_FILES["fileblog"]["tmp_name"];
                                               // Kompres dan upload data
                 $compressedImage = $this->supload->gasken($imageTemp, $imageUploadPath, 30);
                 if($compressedImage){
                    $foto_blog= 'media/fotoblog/'.$new_name;
	   	$this->Mblog->tambah($foto_blog);
			$this->session->set_flashdata('msg','simpan');
			redirect(base_url('admin/inputblog'));
                 }else{
                     $statusMsg = "Kompres gambar gagal!";
                 }
             }else{
                 $statusMsg = 'Maaf, hanya JPG, JPEG, PNG, & GIF yang diperbolehkan.';
             }
         }else{
             $statusMsg = 'Pilih gambar untuk diupload.';
			 echo $_FILES["fileblog"]["name"];
         }
     }
     // Mencetak pesan status
     echo $statusMsg;
      }  
	public function edit(){
		$id_blog= $this->uri->segment(3);
		$temp = explode(".", $_FILES['fileblog']['name']);
		$new_name = time().'.'.end($temp);
		$config['upload_path'] = '/media/fileblog/';
	   $config['file_name'] = $new_name;
	   $config['allowed_types'] = 'png|jpg|jpeg';
	   $this->load->library('upload');
	   $this->upload->initialize($config);
	   if (!$this->upload->do_upload('fileblog')){
	   	$this->session->set_flashdata('msg','gagal');
			redirect(base_url('admin/editblog/'.$id_blog));
	   }
	   else{
	   	$media = $this->upload->data('fileblog');
	   	$blog= $this->Mblog->detailblog(); foreach($blog->result() as $p);
			unlink('./'.$p->foto_blog);
	   	$foto_blog= 'media/fileblog/'.$new_name;
	   	$this->Mblog->edit($foto_blog);
			$this->session->set_flashdata('msg','edit');
			redirect(base_url('admin/editblog/'.$id_blog));
	   }
	}
	public function hapus(){
		$blog= $this->Mblog->detailblog(); foreach($blog->result() as $p);
		unlink('./'.$p->foto_blog);
		$this->Mblog->hapus();
		$this->session->set_flashdata('msg','hapus');
		echo "oke";
		//redirect(base_url('admin/blog'));
	}
	public function offkan(){
		$this->Mblog->offkan();
		redirect(base_url('admin/blog'));
	}
	public function onkan(){
		$this->Mblog->onkan();
		redirect(base_url('admin/blog'));
	}
}