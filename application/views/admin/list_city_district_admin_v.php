<div class="panel panel-warning">
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <table
                        class="table table-striped table-bordered table-condensed dataTable">
                    <thead>
                    <tr>
                        <th>No.</th>
                        <th>City/District Name</th>
                        <th>State Name</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
					<?php
					$x = 1;
					foreach ($cities as $city) {
						?>
                        <tr class="odd gradeX">
                            <td><?= $x++ ?></td>
                            <td><?= $city->city_name?></td>
                            <td><?= $city->state_name?></td>
                            <td>
                                <a href="<?=site_url('admin/city_district_admin_c/form_edit_city/'.$city->city_id)?>" class="btn btn-info btn-cycle btn-xs" data-toggle='tooltip' data-placement='top' title='Edit'>
                                    <i class="fa fa-pencil"></i>
                                </a>
                                <a href="<?=site_url('admin/city_district_admin_c/delete_city/'.$city->city_id)?>" class="btn btn-danger btn-cycle btn-xs" data-toggle='tooltip' data-placement='top' title='Delete'>
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