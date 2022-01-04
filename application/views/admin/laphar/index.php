<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Laphar Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('laphar/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Time</th>
						<th>Satuan</th>
						<th>Laphar</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($laphar as $l){ ?>
                    <tr>
						<td><?php echo $l['id']; ?></td>
						<td><?php echo $l['time']; ?></td>
						<td><?php echo $l['satuan']; ?></td>
						<td><?php echo $l['laphar']; ?></td>
						<td>
                            <a href="<?php echo site_url('laphar/edit/'.$l['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('laphar/remove/'.$l['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                <div class="pull-right">
                    <?php echo $this->pagination->create_links(); ?>                    
                </div>                
            </div>
        </div>
    </div>
</div>
