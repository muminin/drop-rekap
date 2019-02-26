<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">T Transaction Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('transaction/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id M Transaction</th>
						<th>Id Partner</th>
						<th>Id Market Owner</th>
						<th>Transaction Date</th>
						<th>Created By</th>
						<th>Modified By</th>
						<th>Created Date</th>
						<th>Modified Date</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($t_transaction as $t){ ?>
                    <tr>
						<td><?php echo $t['id_m_transaction']; ?></td>
						<td><?php echo $t['id_partner']; ?></td>
						<td><?php echo $t['id_market_owner']; ?></td>
						<td><?php echo $t['transaction_date']; ?></td>
						<td><?php echo $t['created_by']; ?></td>
						<td><?php echo $t['modified_by']; ?></td>
						<td><?php echo $t['created_date']; ?></td>
						<td><?php echo $t['modified_date']; ?></td>
						<td>
                            <a href="<?php echo site_url('transaction/edit/'.$t['id_m_transaction']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('transaction/remove/'.$t['id_m_transaction']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
