<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class laporan extends REST_Controller
{

    function __construct($config = 'rest')
    {
        parent::__construct($config);
        $this
            ->load
            ->database();
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

    //Mengirim atau menambah data kontak baru
    function index_post()
    {
        $data = array(

            'laporan' => $this->post('laporan') ,
            'personil' => $this->post('personil') ,
            'satuan' => $this->post('satuan') ,
            'waktu' => date('Y-m-d H:i:s')
        );

        $insert = $this
            ->db
            ->insert('laporan', $data);
        if ($insert)
        {
            $this->response($data, 200);
        }
        else
        {
            $this->response(array(
                'status' => 'fail',
                502
            ));
        }
    }

    //Memperbarui data kontak yang telah ada
    function index_put()
    {
        $id = $this->put('id');
        $data = array(
            'laporan' => $this->put('laporan') ,
            'personil' => $this->put('personil') ,
            'satuan' => $this->put('satuan') ,
            'waktu' => date('Y-m-d H:i:s')
        );

        $this
            ->db
            ->where('id', $id);
        $update = $this
            ->db
            ->update('laporan', $data);
        if ($update)
        {
            $this->response($data, 200);
        }
        else
        {
            $this->response(array(
                'status' => 'fail',
                502
            ));
        }
    }

    //Menghapus salah satu data kontak
    function index_delete()
    {
        $id = $this->delete('id');
        $this
            ->db
            ->where('id', $id);
        $delete = $this
            ->db
            ->delete('laporan');
        if ($delete)
        {
            $this->response(array(
                'status' => 'success'
            ) , 201);
        }
        else
        {
            $this->response(array(
                'status' => 'fail',
                502
            ));
        }
    }
}
?>
