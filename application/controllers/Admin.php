<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('template');
		$this->load->model('Mwebsite');
		$this->load->model('Mreview');
		$this->load->model('Mslider');
		$this->load->model('Mkategoriblog');
		$this->load->model('Mblog'); 
		$this->load->model('Mlaporan');
		$this->load->model('Mlaporandivhumas');
		$this->load->model('Mhitunglaporandivhumas');
		$this->load->model('Mhalaman');
		$this->load->model('Mkategorigallery');
		$this->load->model('Mgallery');
		$this->load->model('Mvideo');
		$this->load->model('Mstaff');
		$this->load->model('Magenda');
		$this->load->model('Mdownload');
		$this->load->model('Mmenu');
		$this->load->model('Mlaphar');
		$this->load->model('Mlaphardivhumas');
		$this->load->model('Mfacebook');
		$this->load->model('Mtwitter');
		$this->load->model('Minstagram');
		$this->load->model('Msubmenu');
		$this->load->model('Mlinkterkait');
		$this->load->model('Mourservice');
		$this->load->model('Mexport');

		include APPPATH.'views/tool/function.php';
	}
	public function index(){
		$d['website']= $this->Mwebsite->identitas();
		redirect(base_url('admin/review'));;
	}
	public function logout(){
		$this->session->unset_userdata('id_admin');
		$this->session->unset_userdata('nama_admin');
		$this->session->unset_userdata('role');
		redirect(base_url('welcome'));
	}

// FUNCTION PROFIL ADMIN

//	public function profil(){
//		$d['website']= $this->Mwebsite->identitas();
//		$this->template->admin('admin/website/profil',$d);
//	}
//	public function prosesprofil(){
//		if($this->input->post('password_admin')!=null){
//			if(md5($this->input->post('password_admin'))==md5($this->input->post('ulangi_password'))){
//				$this->Mwebsite->profildenganpassword();
//				$this->session->set_flashdata('msg','edit');
//				redirect(base_url('admin/profil'));
//				//echo "1";
//			}
//			else{
//				$this->session->set_flashdata('msg','passsalah');
//				redirect(base_url('admin/profil'));
//				//echo "2";
//			}
//		}
//		else{
//			$this->session->set_flashdata('msg','edit');
//			$this->Mwebsite->editprofil();
//			redirect(base_url('admin/profil'));
//			//echo "3";
//		}
//	}

//website
	public function website(){
		$d['website']= $this->Mwebsite->identitas();
		$this->template->admin('admin/website/identitas',$d);
	}
//slider

public function review(){
	$satuan = $this->session->userdata('satuan');
	$d['website']= $this->Mwebsite->identitas();
	$d['reviewblog'] = $this->Mreview->reviewblog($satuan);
	$d['reviewmedon'] = $this->Mreview->reviewmedon($satuan);
	$d['reviewdivhumas'] = $this->Mreview->reviewdivhumas($satuan);
	$d['jumlahreviewblog'] = $this->Mreview->hitungreviewblog($satuan);
	$d['jumlahreviewmedon'] = $this->Mreview->hitungreviewmedon($satuan);
	$d['jumlahreviewdivhumas'] = $this->Mreview->hitungreviewdivhumas($satuan);
	$this->template->admin('admin/review/laphar_list',$d);
}
	public function laporan(){
		$d['website']= $this->Mwebsite->identitas();
		$d['laporan']= $this->Mlaporan->get_all();
		$d['lapblog']= $this->Mlaporan->get_blog();

		$this->template->admin('admin/laporan/laphar_list',$d);
	}

	public function laporandivhumas(){
		$d['website']= $this->Mwebsite->identitas();
		$d['laporanpolreslandak'] = $this->Mlaporandivhumas->polreslandak();
		$d['laporanpolsekngabang'] = $this->Mlaporandivhumas->polsekngabang();
		$d['laporanpolsekairbesar'] = $this->Mlaporandivhumas->polsekairbesar();
		$d['laporanpolsekmeranti'] = $this->Mlaporandivhumas->polsekmeranti();
		$d['laporanpolseksebangki'] = $this->Mlaporandivhumas->polseksebangki();
		$d['laporanpolsekkualabehe'] = $this->Mlaporandivhumas->polsekkualabehe();
		$d['laporanpolsekmenjalin'] = $this->Mlaporandivhumas->polsekmenjalin();
		$d['laporanpolsekmempawahhulu'] = $this->Mlaporandivhumas->polsekmempawahhulu();
		$d['laporanpolseksengahtemila'] = $this->Mlaporandivhumas->polseksengahtemila();
		$d['laporanpolsekmandor'] = $this->Mlaporandivhumas->polsekmandor();
		$d['laporanpolsekmenyuke'] = $this->Mlaporandivhumas->polsekmenyuke();
	
		$d['polreslandak'] = $this->Mhitunglaporandivhumas->polreslandak();
		$d['polsekngabang'] = $this->Mhitunglaporandivhumas->polsekngabang();
		$d['polsekairbesar'] = $this->Mhitunglaporandivhumas->polsekairbesar();
		$d['polsekmeranti'] = $this->Mhitunglaporandivhumas->polsekmeranti();
		$d['polseksebangki'] = $this->Mhitunglaporandivhumas->polseksebangki();
		$d['polsekkualabehe'] = $this->Mhitunglaporandivhumas->polsekkualabehe();
		$d['polsekmenjalin'] = $this->Mhitunglaporandivhumas->polsekmenjalin();
		$d['polsekmempawahhulu'] = $this->Mhitunglaporandivhumas->polsekmempawahhulu();
		$d['polseksengahtemila'] = $this->Mhitunglaporandivhumas->polseksengahtemila();
		$d['polsekmandor'] = $this->Mhitunglaporandivhumas->polsekmandor();
		$d['polsekmenyuke'] = $this->Mhitunglaporandivhumas->polsekmenyuke();
		$d['laporanxx']= $this->Mlaporan->get_all();
		$d['lapblog']= $this->Mlaporan->get_blog();
		
		$this->template->admin('admin/laporandivhumas/laphar_list',$d);
	}


	//lapviralisasi
	public function viralisasi(){
		$d['website']= $this->Mwebsite->identitas();
		$d['lapig']= $this->Mexport->getig();
		$d['lapfb']= $this->Mexport->getfb();
		$d['laptw']= $this->Mexport->gettw();

		$this->template->admin('admin/export/list',$d);
	}
	public function getviralisasi(){
		$d['getig']= $this->Mexport->getig();
		$d['getfb']= $this->Mexport->getfb();
		$d['gettw']= $this->Mexport->gettw();

		$this->template->admin('admin/export/get',$d);
	}
	
	public function slider(){
		$d['website']= $this->Mwebsite->identitas();
		$d['slider']= $this->Mslider->data();
		$this->template->admin('admin/slider/data',$d);
	}
	public function tambahslider(){
		include APPPATH.'views/admin/slider/tambah.php';
	}
	public function editslider(){
		$slider= $this->Mslider->detailslider();
		include APPPATH.'views/admin/slider/edit.php';
	}
//kategoriblog
	public function kategoriblog(){
		$d['website']= $this->Mwebsite->identitas();
		$d['kategoriblog']= $this->Mkategoriblog->data();
		$this->template->admin('admin/kategoriblog/data',$d);
	}
	public function tambahkategoriblog(){
		include APPPATH.'views/admin/kategoriblog/tambah.php';
	}
	public function editkategoriblog(){
		$kategoriblog= $this->Mkategoriblog->detailkategoriblog();
		include APPPATH.'views/admin/kategoriblog/edit.php';
	}
//blog
	public function inputblog(){
		$d['website']= $this->Mwebsite->identitas();
		$d['kategoriblog']= $this->Mkategoriblog->data();
		$this->template->admin('admin/blog/inputblog',$d);
	}
	public function blog(){
		$d['website']= $this->Mwebsite->identitas();
		$d['blog']= $this->Mblog->data();
		$this->template->admin('admin/blog/data',$d);
	}


	public function editblog(){
		$d['website']= $this->Mwebsite->identitas();
		$d['kategoriblog']= $this->Mkategoriblog->data();
		$d['blog']= $this->Mblog->detailblog();
		$this->template->admin('admin/blog/editblog',$d);
	}

//laphar
	public function inputlaphar(){
		$d['website']= $this->Mwebsite->identitas();
		$this->template->admin('admin/laphar/add',$d);
	}
	public function laphar(){
		$d['website']= $this->Mwebsite->identitas();
		$d['laphar']= $this->Mlaphar->data();
		$this->template->admin('admin/laphar/index',$d);
	}


//laphardivhumas
public function inputlaphardivhumas(){
	$d['website']= $this->Mwebsite->identitas();
	$this->template->admin('admin/laphardivhumas/add',$d);
}
public function laphardivhumas(){
	$d['website']= $this->Mwebsite->identitas();
	$d['laphardivhumas']= $this->Mlaphardivhumas->data();
	$this->template->admin('admin/laphardivhumas/index',$d);
}

	//facebook
	public function inputfacebook(){
		$d['website']= $this->Mwebsite->identitas();
		$this->template->admin('admin/facebook/add',$d);
	}
	public function facebook(){
		$d['website']= $this->Mwebsite->identitas();
		$d['facebook']= $this->Mfacebook->data();
		$this->template->admin('admin/facebook/index',$d);
	}

	//twitter
	public function inputtwitter(){
		$d['website']= $this->Mwebsite->identitas();
		$this->template->admin('admin/twitter/add',$d);
	}
	public function twitter(){
		$d['website']= $this->Mwebsite->identitas();
		$d['twitter']= $this->Mtwitter->data();
		$this->template->admin('admin/twitter/index',$d);
	}

	//instagram
	public function inputinstagram(){
		$d['website']= $this->Mwebsite->identitas();
		$this->template->admin('admin/instagram/add',$d);
	}
	public function instagram(){
		$d['website']= $this->Mwebsite->identitas();
		$d['instagram']= $this->Minstagram->data();
		$this->template->admin('admin/instagram/index',$d);
	}
		
//halaman
	public function halaman(){
		$d['website']= $this->Mwebsite->identitas();
		$d['halaman']= $this->Mhalaman->data();
		$this->template->admin('admin/halaman/data',$d);
	}
	public function inputhalaman(){
		$d['website']= $this->Mwebsite->identitas();
		$this->template->admin('admin/halaman/inputhalaman',$d);
	}
	public function edithalaman(){
		$d['website']= $this->Mwebsite->identitas();
		$d['halaman']= $this->Mhalaman->detailhalaman();
		$this->template->admin('admin/halaman/edithalaman',$d);
	}
//kategorigallery
	public function kategorigallery(){
		$d['website']= $this->Mwebsite->identitas();
		$d['kategorigallery']= $this->Mkategorigallery->data();
		$this->template->admin('admin/kategorigallery/data',$d);
	}
	public function tambahkategorigallery(){
		include APPPATH.'views/admin/kategorigallery/tambah.php';
	}
	public function editkategorigallery(){
		$kategorigallery= $this->Mkategorigallery->detailkategorigallery();
		include APPPATH.'views/admin/kategorigallery/edit.php';
	}
//gallery
	public function gallery(){
		$d['website']= $this->Mwebsite->identitas();
		$d['gallery']= $this->Mgallery->data();
		$this->template->admin('admin/gallery/data',$d);
	}
	public function tambahgallery(){
		$kategorigallery= $this->Mkategorigallery->data();
		include APPPATH.'views/admin/gallery/tambah.php';
	}
	public function editgallery(){
		$gallery= $this->Mgallery->detailgallery();
		include APPPATH.'views/admin/gallery/edit.php';
	}
//video
	public function video(){
		$d['website']= $this->Mwebsite->identitas();
		$d['video']= $this->Mvideo->data();
		$this->template->admin('admin/video/data',$d);
	}
	public function tambahvideo(){
		include APPPATH.'views/admin/video/tambah.php';
	}
	public function editvideo(){
		$video= $this->Mvideo->detailvideo();
		include APPPATH.'views/admin/video/edit.php';
	}
//staff
	public function staff(){
		$d['website']= $this->Mwebsite->identitas();
		$d['staff']= $this->Mstaff->data();
		$this->template->admin('admin/staff/data',$d);
	}
	public function tambahstaff(){
		include APPPATH.'views/admin/staff/tambah.php';
	}
	public function editstaff(){
		$staff= $this->Mstaff->detailstaff();
		include APPPATH.'views/admin/staff/edit.php';
	}
//agenda
	public function inputagenda(){
		$d['website']= $this->Mwebsite->identitas();
		$this->template->admin('admin/agenda/inputagenda',$d);
	}
	public function agenda(){
		$d['website']= $this->Mwebsite->identitas();
		$d['agenda']= $this->Magenda->data();
		$this->template->admin('admin/agenda/data',$d);
	}
	public function editagenda(){
		$d['website']= $this->Mwebsite->identitas();
		$d['agenda']= $this->Magenda->detailagenda();
		$this->template->admin('admin/agenda/editagenda',$d);
	}
//download
	public function download(){
		$d['website']= $this->Mwebsite->identitas();
		$d['download']= $this->Mdownload->data();
		$this->template->admin('admin/download/data',$d);
	}
	public function tambahdownload(){
		include APPPATH.'views/admin/download/tambah.php';
	}
	public function editdownload(){
		$download= $this->Mdownload->detaildownload();
		include APPPATH.'views/admin/download/edit.php';
	}
//menu
	public function menu(){
		$d['website']= $this->Mwebsite->identitas();
		$this->template->admin('admin/menu/data',$d);
	}
	public function tambahmenu(){
		$halaman= $this->Mhalaman->data();
		$blog= $this->Mblog->data();
		include APPPATH.'views/admin/menu/tambah.php';
	}
	public function editmenu(){
		$menu= $this->Mmenu->detailmenu();
		include APPPATH.'views/admin/menu/edit.php';
	}
//submenu
	public function submenu(){
		$d['website']= $this->Mwebsite->identitas();
		$d['menu']= $this->Mmenu->getone($this->uri->segment(3));
		$this->template->admin('admin/submenu/data',$d);
	}
	public function tambahsubmenu(){
		$halaman= $this->Mhalaman->data();
		$blog= $this->Mblog->data();
		include APPPATH.'views/admin/submenu/tambah.php';
	}
	public function editsubmenu(){
		$submenu= $this->Msubmenu->detailsubmenu();
		include APPPATH.'views/admin/submenu/edit.php';
	}
//linkterkait
	public function linkterkait(){
		$d['website']= $this->Mwebsite->identitas();
		$d['linkterkait']= $this->Mlinkterkait->data();
		$this->template->admin('admin/linkterkait/data',$d);
	}
	public function tambahlinkterkait(){
		include APPPATH.'views/admin/linkterkait/tambah.php';
	}
	public function editlinkterkait(){
		$linkterkait= $this->Mlinkterkait->detaillinkterkait();
		include APPPATH.'views/admin/linkterkait/edit.php';
	}
//ourservice
	public function ourservice(){
		$d['website']= $this->Mwebsite->identitas();
		$d['ourservice']= $this->Mourservice->data();
		$this->template->admin('admin/ourservice/data',$d);
	}
	public function tambahourservice(){
		include APPPATH.'views/admin/ourservice/tambah.php';
	}
	public function editourservice(){
		$ourservice= $this->Mourservice->detailourservice();
		include APPPATH.'views/admin/ourservice/edit.php';
	}

}