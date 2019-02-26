<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">M Market Edit</h3>
            </div>
			<?php echo form_open('market/edit/'.$m_market['id_market']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="name" class="control-label">Name</label>
						<div class="form-group">
							<input type="text" name="name" value="<?php echo ($this->input->post('name') ? $this->input->post('name') : $m_market['name']); ?>" class="form-control" id="name" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="url" class="control-label">Url</label>
						<div class="form-group">
							<input type="text" name="url" value="<?php echo ($this->input->post('url') ? $this->input->post('url') : $m_market['url']); ?>" class="form-control" id="url" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="created_by" class="control-label">Created By</label>
						<div class="form-group">
							<input type="text" name="created_by" value="<?php echo ($this->input->post('created_by') ? $this->input->post('created_by') : $m_market['created_by']); ?>" class="form-control" id="created_by" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="modified_by" class="control-label">Modified By</label>
						<div class="form-group">
							<input type="text" name="modified_by" value="<?php echo ($this->input->post('modified_by') ? $this->input->post('modified_by') : $m_market['modified_by']); ?>" class="form-control" id="modified_by" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="created_date" class="control-label">Created Date</label>
						<div class="form-group">
							<input type="text" name="created_date" value="<?php echo ($this->input->post('created_date') ? $this->input->post('created_date') : $m_market['created_date']); ?>" class="has-datetimepicker form-control" id="created_date" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="modified_date" class="control-label">Modified Date</label>
						<div class="form-group">
							<input type="text" name="modified_date" value="<?php echo ($this->input->post('modified_date') ? $this->input->post('modified_date') : $m_market['modified_date']); ?>" class="has-datetimepicker form-control" id="modified_date" />
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