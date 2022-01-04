<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
class Sp2hp extends CI_Controller
{
function __construct()
{
parent::__construct();
$this->load->model('Msp2hp');
$this->load->library('form_validation');
}
public function admin()
{
$q = urldecode($this->input->get('q', TRUE));
$start = intval($this->input->get('start'));
if ($q <> '') {
$config['base_url'] = base_url() . 'sp2hp/?q=' . urlencode($q);
$config['first_url'] = base_url() . 'sp2hp/?q=' . urlencode($q);
} else {
$config['base_url'] = base_url() . 'sp2hp/';
$config['first_url'] = base_url() . 'sp2hp/';
}
$config['per_page'] = 10;
$config['page_query_string'] = TRUE;
$config['total_rows'] = $this->Msp2hp->total_rows($q);
$sp2hp = $this->Msp2hp->get_limit_data($config['per_page'], $start, $q);
$config['first_link']       = 'First';
$config['last_link']= 'Last';
$config['next_link']= 'Next';
$config['prev_link']= 'Prev';
$config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
$config['full_tag_close']   = '</ul></nav></div>';
$config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
$config['num_tag_close']    = '</span></li>';
$config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
$config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
$config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
$config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
$config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
$config['prev_tagl_close']  = '</span>Next</li>';
$config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
$config['first_tagl_close'] = '</span></li>';
$config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
$config['last_tagl_close']  = '</span></li>';
$this->load->library('pagination');
$this->pagination->initialize($config);
$data = array(
'sp2hp_data' => $sp2hp,
'q' => $q,
'pagination' => $this->pagination->create_links(),
'total_rows' => $config['total_rows'],
'start' => $start,
);
$this->load->view('sp2hp/sp2hp_list', $data);
}
public function read($id)
{
$row = $this->Msp2hp->get_by_id($id);
if ($row) {
$data = array(
'id' => $row->id,
'kode' => $row->kode,
'lp' => $row->lp,
'tgl' => $row->tgl,
'ttg' => $row->ttg,
'tsk' => $row->tsk,
'a1' => $row->a1,
'a2' => $row->a2,
'a3' => $row->a3,
'a4' => $row->a4,
'a5' => $row->a5,
'last' => $row->last,
'qr' => $row->qr,
);
$this->load->view('sp2hp/sp2hp_read', $data);
} else {
$this->session->set_flashdata('message', 'Record Not Found');
redirect(site_url('sp2hp'));
}
}
public function create()
{
$data = array(
'button' => 'Create',
'action' => site_url('sp2hp/create_action'),
'id' => set_value('id'),
'kode' => set_value('kode'),
'lp' => set_value('lp'),
'tgl' => set_value('tgl'),
'ttg' => set_value('ttg'),
'tsk' => set_value('tsk'),
'a1' => set_value('a1'),
'a2' => set_value('a2'),
'a3' => set_value('a3'),
'a4' => set_value('a4'),
'a5' => set_value('a5'),
'last' => set_value('last'),
'qr' => set_value('qr'),
);
$this->load->view('sp2hp/sp2hp_form', $data);
}
public function create_action()
{
$this->_rules();
if ($this->form_validation->run() == FALSE) {
$this->create();
} else {
$data = array(
'kode' => $this->input->post('kode',TRUE),
'lp' => $this->input->post('lp',TRUE),
'tgl' => $this->input->post('tgl',TRUE),
'ttg' => $this->input->post('ttg',TRUE),
'tsk' => $this->input->post('tsk',TRUE),
'a1' => $this->input->post('a1',TRUE),
'a2' => $this->input->post('a2',TRUE),
'a3' => $this->input->post('a3',TRUE),
'a4' => $this->input->post('a4',TRUE),
'a5' => $this->input->post('a5',TRUE),
'last' => $this->input->post('last',TRUE),
'qr' => $this->input->post('qr',TRUE),
);
$kode = $this->input->post('kode');
$this->Msp2hp->insert($data);
$this->session->set_flashdata('kode', $kode);
redirect(site_url('sp2hp/admin'));
}
}
public function update($id)
{
$row = $this->Msp2hp->get_by_id($id);
if ($row) {
$data = array(
'button' => 'Update',
'action' => site_url('sp2hp/update_action'),
'id' => set_value('id', $row->id),
'kode' => set_value('kode', $row->kode),
'lp' => set_value('lp', $row->lp),
'tgl' => set_value('tgl', $row->tgl),
'ttg' => set_value('ttg', $row->ttg),
'tsk' => set_value('tsk', $row->tsk),
'a1' => set_value('a1', $row->a1),
'a2' => set_value('a2', $row->a2),
'a3' => set_value('a3', $row->a3),
'a4' => set_value('a4', $row->a4),
'a5' => set_value('a5', $row->a5),
'last' => set_value('last', $row->last),
'qr' => set_value('qr', $row->qr),
);
$this->load->view('sp2hp/sp2hp_form', $data);
} else {
$this->session->set_flashdata('message', 'Record Not Found');
redirect(site_url('sp2hp'));
}
}
public function update_action()
{
$this->_rules();
if ($this->form_validation->run() == FALSE) {
$this->update($this->input->post('id', TRUE));
} else {
$data = array(
'a1' => $this->input->post('a1',TRUE),
'a2' => $this->input->post('a2',TRUE),
'a3' => $this->input->post('a3',TRUE),
'a4' => $this->input->post('a4',TRUE),
'a5' => $this->input->post('a5',TRUE),
'last' => $this->input->post('last',TRUE),
);
$this->Msp2hp->update($this->input->post('id', TRUE), $data);
$this->session->set_flashdata('message', 'Update Record Success');
redirect(site_url('sp2hp/admin'));
}
}
public function delete($id)
{
$row = $this->Msp2hp->get_by_id($id);
if ($row) {
$this->Msp2hp->delete($id);
$this->session->set_flashdata('message', 'Data Berhasil Dihapus');
redirect(site_url('sp2hp/admin#datasp'));
} else {
$this->session->set_flashdata('message', 'Record Not Found');
redirect(site_url('sp2hp/admin'));
}
}
public function _rules()
{
$this->form_validation->set_rules('kode', 'kode', 'trim|required');
$this->form_validation->set_rules('lp', 'lp', 'trim|required');
$this->form_validation->set_rules('tgl', 'tgl', 'trim|required');
$this->form_validation->set_rules('ttg', 'ttg', 'trim|required');
$this->form_validation->set_rules('tsk', 'tsk', 'trim|required');
$this->form_validation->set_rules('a1', 'a1', 'trim|required');
$this->form_validation->set_rules('a2', 'a2', 'trim|required');
$this->form_validation->set_rules('a3', 'a3', 'trim|required');
$this->form_validation->set_rules('a4', 'a4', 'trim|required');
$this->form_validation->set_rules('a5', 'a5', 'trim|required');
$this->form_validation->set_rules('last', 'last', 'trim|required');
$this->form_validation->set_rules('qr', 'qr', 'trim|required');
$this->form_validation->set_rules('id', 'id', 'trim');
$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
}
function simpan()
{       $angka=range(0,9); //code dibuat dari angka 0-9
shuffle($angka); //untuk mengacak angka
$ambilangka=array_rand($angka,6); //pengambilan angka sebanyak 6 digit
$angkastring=implode('',$ambilangka); //membuat angka-angka yang digenerate dipisahkan dengan -
$code=$angkastring;
$kode= $code;
$lp= $this->input->post('lp');
$tgl= $this->input->post('tanggal');
$ttg= $this->input->post('tentang');
$tsk= $this->input->post('tersangka');
$last= date('Y-m-d H:i:s');
$temp = explode(".", $_FILES['a1file']['name']);
$new_name = time().'.'.end($temp);
$config['upload_path'] = './media/sp2hp/';
$config['file_name'] = $new_name;
$config['allowed_types'] = 'pdf';
$a1= 'media/sp2hp/'.$new_name;
$qr = 'a1';
$this->load->library('upload');
$this->upload->initialize($config);
$this->upload->do_upload('a1file');
$this->Msp2hp->simpan($kode, $lp, $tgl, $ttg, $tsk, $a1, $last, $qr);
redirect('/sp2hp/admin#datasp');
}

function insertformat()
{
$temp = explode(".", $_FILES['file']['name']);
$new_name = time().'.'.end($temp);
$config['upload_path'] = './media/sp2hp/';
$config['file_name'] = $new_name;
$config['allowed_types'] = 'pdf';
$isi = 'media/sp2hp/'.$new_name;
$format = $this->input->post('format');
$nama = $this->input->post('nama');
$last = date('Y-m-d H:i:s');
$this->load->library('upload');
$this->upload->initialize($config);
$this->upload->do_upload('file');
$this->Msp2hp->excupdate($nama, $format, $isi, $last);
$this->session->set_flashdata('message', 'File Diupload');
redirect('/sp2hp/admin#datasp');

/*redirect('/sp2hp');*/
}


function login()
{
    $this->load->view('sp2hp/login');


}

function index()
{
    $this->load->view('sp2hp/login');


}

function masuk(){

        $nama = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array('username_admin' => $nama, 'password_admin' => md5($password));
        $cek = $this->Msp2hp->masuk('admin',$where);
        if($cek ->num_rows() > 0){   
                        foreach($cek->result() as $r);
                        $this->session->set_userdata('nama_admin',$r->nama_admin);
                        $this->session->set_userdata('id_admin',$r->id_admin);
                        $this->session->set_userdata('role',$r->role);
                        $this->session->set_userdata('satuan',$r->satuan);
                        redirect('sp2hp/admin');

                    }else{

                    echo $this->session->set_flashdata('login', 'Username dan Password Salah!');
                    redirect('sp2hp/login');
                }
    }


function cari(){
            $kode= $this->input->post('kode');
            $data['sp2hp'] = $this->Msp2hp->cari($kode);
          
            $this->load->view('sp2hp/read',$data);
    }


}
/* End of file Sp2hp.php */
/* Location: ./application/controllers/Sp2hp.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2020-05-09 06:57:54 */
/* http://harviacode.com */