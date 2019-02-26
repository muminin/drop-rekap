<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">T Partner Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('partner/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Partner</th>
						<th>Name</th>
						<th>Email</th>
						<th>Phone</th>
						<th>Created By</th>
						<th>Modified By</th>
						<th>Created Date</th>
						<th>Modified Date</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($t_partner as $t){ ?>
                    <tr>
						<td><?php echo $t['id_partner']; ?></td>
						<td><?php echo $t['name']; ?></td>
						<td><?php echo $t['email']; ?></td>
						<td><?php echo $t['phone']; ?></td>
						<td><?php echo $t['created_by']; ?></td>
						<td><?php echo $t['modified_by']; ?></td>
						<td><?php echo $t['created_date']; ?></td>
						<td><?php echo $t['modified_date']; ?></td>
						<td>
                            <a href="<?php echo site_url('partner/edit/'.$t['id_partner']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('partner/remove/'.$t['id_partner']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
