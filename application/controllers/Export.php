<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Export extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Mexport');
        $this->load->library('form_validation');
    }


    public function excel()
    {
        echo'<!DOCTYPE html>
<html>
<head>
    <title>Export Data Ke Excel - www.riza.us</title>
</head>
<body>

    <table cellspacing="0" border="0">

    <colgroup width="127"></colgroup>
    <colgroup width="83"></colgroup>
    <colgroup span="3" width="530"></colgroup>
    <tr>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=5 height="47" align="left" valign=middle bgcolor="#C0C0C0"><b><font size=6>POLRES LANDAK</font></b></td>
        </tr>
    <tr>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=5 height="22" align="left" valign=middle bgcolor="#FFFF00"><b><font size=4>Hari : Selasa, 14 April 2020</font></b></td>
        </tr>
    <tr>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=5 height="23" align="left" valign=middle bgcolor="#FF00FF"><b><font size=4>Hashtag : #</font></b></td>
        </tr>
    <tr>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="29" align="center" valign=middle bgcolor="#00CCFF"><b>PLATFORM</b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#00CCFF"><b><br></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#00CCFF"><b>TWITTER</b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#00CCFF"><b><font color="#000000">FACEBOOK</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#00CCFF"><b><font color="#000000">INSTAGRAM</font></b></td>
    </tr>
    <tr>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="34" align="center" valign=middle><b>JUMLAH VIRAL</b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b>WAKTU</b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="1" sdnum="1033;"><b>1</b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="2" sdnum="1033;"><b><font color="#000000">2</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="3" sdnum="1033;"><b><font color="#000000">3</font></b></td>
    </tr>
    <tr>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="20" align="center" valign=middle><br></td>
       
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdnum="1033;0;0.00"><br></td>
       
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top><?php foreach ($gettw as $tw){?><?php  echo $tw->link ?><br><?php } ?></td>
       
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top><?php foreach ($getfb as $fb){?><?php  echo $fb->link ?><br><?php } ?></td>
       
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top><?php foreach ($getig as $ig){?><?php  echo $ig->link ?><br><?php } ?></td>
    </tr>
</table>

</body>
</html>';
    }

}

/* End of file Export.php */
/* Location: ./application/controllers/Export.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2020-04-14 09:56:17 */
/* http://harviacode.com */