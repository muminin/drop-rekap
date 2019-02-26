<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">T Transfer Add</h3>
            </div>
            <?php echo form_open('transfer/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="id_account" class="control-label">Id Account</label>
						<div class="form-group">
							<input type="text" name="id_account" value="<?php echo $this->input->post('id_account'); ?>" class="form-control" id="id_account" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="id_transaction_detail" class="control-label">Id Transaction Detail</label>
						<div class="form-group">
							<input type="text" name="id_transaction_detail" value="<?php echo $this->input->post('id_transaction_detail'); ?>" class="form-control" id="id_transaction_detail" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="is_va" class="control-label">Is Va</label>
						<div class="form-group">
							<input type="text" name="is_va" value="<?php echo $this->input->post('is_va'); ?>" class="form-control" id="is_va" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="va_number" class="control-label">Va Number</label>
						<div class="form-group">
							<input type="text" name="va_number" value="<?php echo $this->input->post('va_number'); ?>" class="form-control" id="va_number" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="amount" class="control-label">Amount</label>
						<div class="form-group">
							<input type="text" name="amount" value="<?php echo $this->input->post('amount'); ?>" class="form-control" id="amount" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="is_transfered" class="control-label">Is Transfered</label>
						<div class="form-group">
							<input type="text" name="is_transfered" value="<?php echo $this->input->post('is_transfered'); ?>" class="form-control" id="is_transfered" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="created_by" class="control-label">Created By</label>
						<div class="form-group">
							<input type="text" name="created_by" value="<?php echo $this->input->post('created_by'); ?>" class="form-control" id="created_by" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="modified_by" class="control-label">Modified By</label>
						<div class="form-group">
							<input type="text" name="modified_by" value="<?php echo $this->input->post('modified_by'); ?>" class="form-control" id="modified_by" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="created_date" class="control-label">Created Date</label>
						<div class="form-group">
							<input type="text" name="created_date" value="<?php echo $this->input->post('created_date'); ?>" class="has-datetimepicker form-control" id="created_date" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="modified_date" class="control-label">Modified Date</label>
						<div class="form-group">
							<input type="text" name="modified_date" value="<?php echo $this->input->post('modified_date'); ?>" class="has-datetimepicker form-control" id="modified_date" />
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Save
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>