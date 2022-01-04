<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;
class android extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
    }

    //Menampilkan data laporan
    function index_get()
    {
        $id = $this->get('id');
        if ($id == '')
        {
            $laporan = $this
                ->db
                ->get('laporan')
                ->result();
        }
        else
        {
            $this
                ->db
                ->where('id', $id);
            $laporan = $this
                ->db
                ->get('laporan')
                ->result();
        }
        $this->response($laporan, 200);
    }

}
?>