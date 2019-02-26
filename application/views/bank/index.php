<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">M Bank Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('bank/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Bank</th>
						<th>Name</th>
						<th>Bank Code</th>
						<th>Created By</th>
						<th>Modified By</th>
						<th>Created Date</th>
						<th>Modified Date</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($m_bank as $m){ ?>
                    <tr>
						<td><?php echo $m['id_bank']; ?></td>
						<td><?php echo $m['name']; ?></td>
						<td><?php echo $m['bank_code']; ?></td>
						<td><?php echo $m['created_by']; ?></td>
						<td><?php echo $m['modified_by']; ?></td>
						<td><?php echo $m['created_date']; ?></td>
						<td><?php echo $m['modified_date']; ?></td>
						<td>
                            <a href="<?php echo site_url('bank/edit/'.$m['id_bank']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('bank/remove/'.$m['id_bank']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
