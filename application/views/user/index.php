<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">T User Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('user/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id User</th>
						<th>Password</th>
						<th>Username</th>
						<th>Email</th>
						<th>Id Privileges</th>
						<th>Created By</th>
						<th>Modified By</th>
						<th>Created Date</th>
						<th>Modified Date</th>
						<th>Last Login</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($t_user as $t){ ?>
                    <tr>
						<td><?php echo $t['id_user']; ?></td>
						<td><?php echo $t['password']; ?></td>
						<td><?php echo $t['username']; ?></td>
						<td><?php echo $t['email']; ?></td>
						<td><?php echo $t['id_privileges']; ?></td>
						<td><?php echo $t['created_by']; ?></td>
						<td><?php echo $t['modified_by']; ?></td>
						<td><?php echo $t['created_date']; ?></td>
						<td><?php echo $t['modified_date']; ?></td>
						<td><?php echo $t['last_login']; ?></td>
						<td>
                            <a href="<?php echo site_url('user/edit/'.$t['id_user']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('user/remove/'.$t['id_user']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
