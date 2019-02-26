<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">T Market Owner Edit</h3>
            </div>
			<?php echo form_open('market_owner/edit/'.$t_market_owner['id_market_owner']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="id_partner" class="control-label">Id Partner</label>
						<div class="form-group">
							<input type="text" name="id_partner" value="<?php echo ($this->input->post('id_partner') ? $this->input->post('id_partner') : $t_market_owner['id_partner']); ?>" class="form-control" id="id_partner" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="id_market" class="control-label">Id Market</label>
						<div class="form-group">
							<input type="text" name="id_market" value="<?php echo ($this->input->post('id_market') ? $this->input->post('id_market') : $t_market_owner['id_market']); ?>" class="form-control" id="id_market" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="name" class="control-label">Name</label>
						<div class="form-group">
							<input type="text" name="name" value="<?php echo ($this->input->post('name') ? $this->input->post('name') : $t_market_owner['name']); ?>" class="form-control" id="name" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="url_name" class="control-label">Url Name</label>
						<div class="form-group">
							<input type="text" name="url_name" value="<?php echo ($this->input->post('url_name') ? $this->input->post('url_name') : $t_market_owner['url_name']); ?>" class="form-control" id="url_name" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="created_by" class="control-label">Created By</label>
						<div class="form-group">
							<input type="text" name="created_by" value="<?php echo ($this->input->post('created_by') ? $this->input->post('created_by') : $t_market_owner['created_by']); ?>" class="form-control" id="created_by" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="modified_by" class="control-label">Modified By</label>
						<div class="form-group">
							<input type="text" name="modified_by" value="<?php echo ($this->input->post('modified_by') ? $this->input->post('modified_by') : $t_market_owner['modified_by']); ?>" class="form-control" id="modified_by" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="created_date" class="control-label">Created Date</label>
						<div class="form-group">
							<input type="text" name="created_date" value="<?php echo ($this->input->post('created_date') ? $this->input->post('created_date') : $t_market_owner['created_date']); ?>" class="has-datetimepicker form-control" id="created_date" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="modified_date" class="control-label">Modified Date</label>
						<div class="form-group">
							<input type="text" name="modified_date" value="<?php echo ($this->input->post('modified_date') ? $this->input->post('modified_date') : $t_market_owner['modified_date']); ?>" class="has-datetimepicker form-control" id="modified_date" />
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