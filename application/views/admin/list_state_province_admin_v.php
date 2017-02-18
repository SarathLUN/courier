<div class="panel panel-default">
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <table
                        class="table table-striped table-bordered table-condensed dataTable">
                    <thead>
                    <tr>
                        <th>No.</th>
                        <th>State Name</th>
                        <th>Country Name</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
					<?php
					$x = 1;
					foreach ($states as $state) {
						?>
                        <tr class="odd gradeX">
                            <td><?= $x++ ?></td>
                            <td><?= $state->state_name?></td>
                            <td><?= $state->country_name?></td>
                            <td>
                                <a href="<?=site_url('admin/state_province_admin_c/form_edit_state/'.$state->state_id)?>" class="btn btn-info btn-cycle btn-xs" data-toggle='tooltip' data-placement='top' title='Edit'>
                                    <i class="fa fa-pencil"></i>
                                </a>
                                <a href="<?=site_url('admin/state_province_admin_c/delete_state/'.$state->state_id)?>" class="btn btn-danger btn-cycle btn-xs" data-toggle='tooltip' data-placement='top' title='Delete'>
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>
						<?php
					}//end foreach for $counties
					?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?= @$this->session->flashdata('msg') ?>