<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Twitter extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Mtwitter');
    }

    /*
     * Adding a new twitter
     */
    function add()
    {// Ambil data yang dikirim dari form
    $link = $_POST['link'];
    $hashtag = strtolower($_POST['hashtag']);
    $tanggal = date('Y-m-d');
    $date = $this->session->userdata(satuan); // Ambil data link dan masukkan ke variabel link
    $data = array();
    
    $index = 0; // Set index array awal dengan 0
    foreach($link as $datalink){ // Kita buat perulangan berdasarkan link sampai data terakhir
      array_push($data, array(
        'link'=>$datalink,
        'satuan' => $date,
        'hashtag' => $hashtag,
        'date' => $tanggal
      ));
      
      $index++;
    }



           // $params = array(
			//	'hashtag' => $this->input->post('hashtag'),
			//	'satuan' => $this->session->userdata('satuan'),
			//	'link' => $this->input->post('link'),
            //);
            
            //$twitter_id = $this->Mtwitter->add_twitter($params);
            //$this->session->set_flashdata('msg','simpan');
            //echo $this->db->last_query();
        
    $sql = $this->Mtwitter->add_twitter($data); // Panggil fungsi save_batch yang ada di model siswa (Mtwitter.php)
    
    // Cek apakah query insert nya sukses atau gagal
    if($sql){ // Jika sukses
      echo "<script>alert('Data disimpan');window.location = '".base_url('admin/inputtwitter')."';</script>";
    }else{ // Jika gagal
      echo "<script>alert('Data gagal disimpan');window.location = '".base_url('admin/inputtwitter')."';</script>";
    }
    }

      
  }

?>
