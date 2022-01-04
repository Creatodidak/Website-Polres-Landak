<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Sp2hp Read</h2>
        <table class="table">
	    <tr><td>Kode</td><td><?php echo $kode; ?></td></tr>
	    <tr><td>Lp</td><td><?php echo $lp; ?></td></tr>
	    <tr><td>Tgl</td><td><?php echo $tgl; ?></td></tr>
	    <tr><td>Ttg</td><td><?php echo $ttg; ?></td></tr>
	    <tr><td>Tsk</td><td><?php echo $tsk; ?></td></tr>
	    <tr><td>A1</td><td><?php echo $a1; ?></td></tr>
	    <tr><td>A2</td><td><?php echo $a2; ?></td></tr>
	    <tr><td>A3</td><td><?php echo $a3; ?></td></tr>
	    <tr><td>A4</td><td><?php echo $a4; ?></td></tr>
	    <tr><td>A5</td><td><?php echo $a5; ?></td></tr>
	    <tr><td>Last</td><td><?php echo $last; ?></td></tr>
	    <tr><td>Qr</td><td><?php echo $qr; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('sp2hp') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>