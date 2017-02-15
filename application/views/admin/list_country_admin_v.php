<div class="panel panel-default">
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <table
                        class="table table-striped table-bordered table-condensed dataTable">
                    <thead>
                    <tr>
                        <th>No.</th>
                        <th>Country Name</th>
                        <th>ISO-2</th>
                        <th>ISO-3</th>
                        <th>Tax</th>
                        <th>Currency</th>
                        <th>Calling Code</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
					<?php
					$x = 1;
					foreach ($counties as $county) {
						?>
                        <tr class="odd gradeX">
                            <td><?= $x++ ?></td>
                            <td><?= $county->country_name?></td>
                            <td><?= $county->country_iso2_code?></td>
                            <td><?= $county->country_iso3_code?></td>
                            <td><?= $county->country_tax?></td>
                            <td><?= $county->country_currency?></td>
                            <td><?= $county->country_calling_code?></td>
                            <td>
                                <a href="<?=site_url('admin/country_admin_c/form_edit_country/'.$county->country_id)?>" class="btn btn-info btn-cycle btn-xs" data-toggle='tooltip' data-placement='top' title='Edit'>
                                    <i class="fa fa-pencil"></i>
                                </a>
                                <a href="<?=site_url('admin/country_admin_c/delete_country/'.$county->country_id)?>" class="btn btn-danger btn-cycle btn-xs" data-toggle='tooltip' data-placement='top' title='Delete'>
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