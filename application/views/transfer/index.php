<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">T Transfer Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('transfer/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Transfer</th>
						<th>Id Account</th>
						<th>Id Transaction Detail</th>
						<th>Is Va</th>
						<th>Va Number</th>
						<th>Amount</th>
						<th>Is Transfered</th>
						<th>Created By</th>
						<th>Modified By</th>
						<th>Created Date</th>
						<th>Modified Date</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($t_transfer as $t){ ?>
                    <tr>
						<td><?php echo $t['id_transfer']; ?></td>
						<td><?php echo $t['id_account']; ?></td>
						<td><?php echo $t['id_transaction_detail']; ?></td>
						<td><?php echo $t['is_va']; ?></td>
						<td><?php echo $t['va_number']; ?></td>
						<td><?php echo $t['amount']; ?></td>
						<td><?php echo $t['is_transfered']; ?></td>
						<td><?php echo $t['created_by']; ?></td>
						<td><?php echo $t['modified_by']; ?></td>
						<td><?php echo $t['created_date']; ?></td>
						<td><?php echo $t['modified_date']; ?></td>
						<td>
                            <a href="<?php echo site_url('transfer/edit/'.$t['id_transfer']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('transfer/remove/'.$t['id_transfer']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
