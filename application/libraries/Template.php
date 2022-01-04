<?php
class Template {
	protected $_ci;

	function __construct()
	{
		$this->_ci =&get_instance();
	}

	function admin($template,$data=null)
	{
		$data['_content']=$this->_ci->load->view($template,$data, true);
		$this->_ci->load->view('templateadmin.php',$data);
	}
	function beranda($template,$data=null)
	{
		$data['_content']=$this->_ci->load->view($template,$data, true);
		$this->_ci->load->view('templatev2.php',$data);
	}
	function satuan($template,$data=null)
	{
		$data['_content']=$this->_ci->load->view($template,$data, true);
		$this->_ci->load->view('templatesatuan.php',$data);
	}
}