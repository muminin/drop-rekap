<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">T Type Add</h3>
            </div>
            <?php echo form_open('type/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="name" class="control-label">Name</label>
						<div class="form-group">
							<input type="text" name="name" value="<?php echo $this->input->post('name'); ?>" class="form-control" id="name" />
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