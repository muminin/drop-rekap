<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">T Transaction Edit</h3>
            </div>
			<?php echo form_open('transaction/edit/'.$t_transaction['id_m_transaction']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="id_partner" class="control-label">Id Partner</label>
						<div class="form-group">
							<input type="text" name="id_partner" value="<?php echo ($this->input->post('id_partner') ? $this->input->post('id_partner') : $t_transaction['id_partner']); ?>" class="form-control" id="id_partner" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="id_market_owner" class="control-label">Id Market Owner</label>
						<div class="form-group">
							<input type="text" name="id_market_owner" value="<?php echo ($this->input->post('id_market_owner') ? $this->input->post('id_market_owner') : $t_transaction['id_market_owner']); ?>" class="form-control" id="id_market_owner" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="transaction_date" class="control-label">Transaction Date</label>
						<div class="form-group">
							<input type="text" name="transaction_date" value="<?php echo ($this->input->post('transaction_date') ? $this->input->post('transaction_date') : $t_transaction['transaction_date']); ?>" class="has-datepicker form-control" id="transaction_date" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="created_by" class="control-label">Created By</label>
						<div class="form-group">
							<input type="text" name="created_by" value="<?php echo ($this->input->post('created_by') ? $this->input->post('created_by') : $t_transaction['created_by']); ?>" class="form-control" id="created_by" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="modified_by" class="control-label">Modified By</label>
						<div class="form-group">
							<input type="text" name="modified_by" value="<?php echo ($this->input->post('modified_by') ? $this->input->post('modified_by') : $t_transaction['modified_by']); ?>" class="form-control" id="modified_by" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="created_date" class="control-label">Created Date</label>
						<div class="form-group">
							<input type="text" name="created_date" value="<?php echo ($this->input->post('created_date') ? $this->input->post('created_date') : $t_transaction['created_date']); ?>" class="has-datetimepicker form-control" id="created_date" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="modified_date" class="control-label">Modified Date</label>
						<div class="form-group">
							<input type="text" name="modified_date" value="<?php echo ($this->input->post('modified_date') ? $this->input->post('modified_date') : $t_transaction['modified_date']); ?>" class="has-datetimepicker form-control" id="modified_date" />
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