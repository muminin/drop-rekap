<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">T Transaction Detail Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('transaction_detail/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id T Transaction</th>
						<th>Id M Transaction</th>
						<th>Id Type</th>
						<th>Item Name</th>
						<th>Item Count</th>
						<th>Item Price Buy</th>
						<th>Item Price Sell</th>
						<th>From Name</th>
						<th>From Address</th>
						<th>Ongkir</th>
						<th>Request Name</th>
						<th>Request Address</th>
						<th>Request Date</th>
						<th>Resi</th>
						<th>Is Sent</th>
						<th>Sent Date</th>
						<th>Is Arrived</th>
						<th>Arrived Date</th>
						<th>Created By</th>
						<th>Modified By</th>
						<th>Created Date</th>
						<th>Modified Date</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($t_transaction_detail as $t){ ?>
                    <tr>
						<td><?php echo $t['id_t_transaction']; ?></td>
						<td><?php echo $t['id_m_transaction']; ?></td>
						<td><?php echo $t['id_type']; ?></td>
						<td><?php echo $t['item_name']; ?></td>
						<td><?php echo $t['item_count']; ?></td>
						<td><?php echo $t['item_price_buy']; ?></td>
						<td><?php echo $t['item_price_sell']; ?></td>
						<td><?php echo $t['from_name']; ?></td>
						<td><?php echo $t['from_address']; ?></td>
						<td><?php echo $t['ongkir']; ?></td>
						<td><?php echo $t['request_name']; ?></td>
						<td><?php echo $t['request_address']; ?></td>
						<td><?php echo $t['request_date']; ?></td>
						<td><?php echo $t['resi']; ?></td>
						<td><?php echo $t['is_sent']; ?></td>
						<td><?php echo $t['sent_date']; ?></td>
						<td><?php echo $t['is_arrived']; ?></td>
						<td><?php echo $t['arrived_date']; ?></td>
						<td><?php echo $t['created_by']; ?></td>
						<td><?php echo $t['modified_by']; ?></td>
						<td><?php echo $t['created_date']; ?></td>
						<td><?php echo $t['modified_date']; ?></td>
						<td>
                            <a href="<?php echo site_url('transaction_detail/edit/'.$t['id_t_transaction']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('transaction_detail/remove/'.$t['id_t_transaction']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
