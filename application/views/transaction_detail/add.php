<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">T Transaction Detail Add</h3>
            </div>
            <?php echo form_open('transaction_detail/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="id_m_transaction" class="control-label">Id M Transaction</label>
						<div class="form-group">
							<input type="text" name="id_m_transaction" value="<?php echo $this->input->post('id_m_transaction'); ?>" class="form-control" id="id_m_transaction" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="id_type" class="control-label">Id Type</label>
						<div class="form-group">
							<input type="text" name="id_type" value="<?php echo $this->input->post('id_type'); ?>" class="form-control" id="id_type" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="item_name" class="control-label">Item Name</label>
						<div class="form-group">
							<input type="text" name="item_name" value="<?php echo $this->input->post('item_name'); ?>" class="form-control" id="item_name" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="item_count" class="control-label">Item Count</label>
						<div class="form-group">
							<input type="text" name="item_count" value="<?php echo $this->input->post('item_count'); ?>" class="form-control" id="item_count" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="item_price_buy" class="control-label">Item Price Buy</label>
						<div class="form-group">
							<input type="text" name="item_price_buy" value="<?php echo $this->input->post('item_price_buy'); ?>" class="form-control" id="item_price_buy" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="item_price_sell" class="control-label">Item Price Sell</label>
						<div class="form-group">
							<input type="text" name="item_price_sell" value="<?php echo $this->input->post('item_price_sell'); ?>" class="form-control" id="item_price_sell" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="from_name" class="control-label">From Name</label>
						<div class="form-group">
							<input type="text" name="from_name" value="<?php echo $this->input->post('from_name'); ?>" class="form-control" id="from_name" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="from_address" class="control-label">From Address</label>
						<div class="form-group">
							<input type="text" name="from_address" value="<?php echo $this->input->post('from_address'); ?>" class="form-control" id="from_address" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="ongkir" class="control-label">Ongkir</label>
						<div class="form-group">
							<input type="text" name="ongkir" value="<?php echo $this->input->post('ongkir'); ?>" class="form-control" id="ongkir" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="request_name" class="control-label">Request Name</label>
						<div class="form-group">
							<input type="text" name="request_name" value="<?php echo $this->input->post('request_name'); ?>" class="form-control" id="request_name" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="request_address" class="control-label">Request Address</label>
						<div class="form-group">
							<input type="text" name="request_address" value="<?php echo $this->input->post('request_address'); ?>" class="form-control" id="request_address" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="request_date" class="control-label">Request Date</label>
						<div class="form-group">
							<input type="text" name="request_date" value="<?php echo $this->input->post('request_date'); ?>" class="has-datetimepicker form-control" id="request_date" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="resi" class="control-label">Resi</label>
						<div class="form-group">
							<input type="text" name="resi" value="<?php echo $this->input->post('resi'); ?>" class="form-control" id="resi" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="is_sent" class="control-label">Is Sent</label>
						<div class="form-group">
							<input type="text" name="is_sent" value="<?php echo $this->input->post('is_sent'); ?>" class="form-control" id="is_sent" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="sent_date" class="control-label">Sent Date</label>
						<div class="form-group">
							<input type="text" name="sent_date" value="<?php echo $this->input->post('sent_date'); ?>" class="has-datetimepicker form-control" id="sent_date" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="is_arrived" class="control-label">Is Arrived</label>
						<div class="form-group">
							<input type="text" name="is_arrived" value="<?php echo $this->input->post('is_arrived'); ?>" class="form-control" id="is_arrived" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="arrived_date" class="control-label">Arrived Date</label>
						<div class="form-group">
							<input type="text" name="arrived_date" value="<?php echo $this->input->post('arrived_date'); ?>" class="has-datetimepicker form-control" id="arrived_date" />
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