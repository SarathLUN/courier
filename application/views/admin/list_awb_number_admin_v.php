<?= @$this->session->flashdata('msg') ?>

<div class="panel panel-default">
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <table
                        class="table table-striped table-bordered table-condensed dataTable">
                    <thead>
                    <tr>
                        <th> No.</th>
                        <th> AWB Pool Name</th>
                        <th> AWB Number</th>
                        <th> Status</th>
                    </tr>
                    </thead>
                    <tbody>
					<?php
					$x = 1;
					foreach ($awb_numbers as $awb_number) {
						//check status for display and generate button action
						if ($awb_number->awb_number_is_availabled == 1) {
							$status = "<span class='label label-success
                    '>Available</span>";
							/*$button = "<a href='javascript:void(0);' onclick='updateThis(\"admin/awb_number_admin_c/disable_awb_pool/\","
								.$awb_pool->awb_pool_id.");' class='btn btn-danger btn-xs'>Disable</a>";*/
						} else {
							$status = "<span class='label label-danger'>Busy</span>";
							/*$button = "<a href='".base_url('admin/awb_number_admin_c/enable_awb_pool/')
								.$awb_pool->awb_pool_id."' class='btn btn-success btn-xs'>Enable</a>";*/
						}
						?>
                        <tr class="odd gradeX">
                            <td><?= $x++ ?></td>
                            <td><?= $awb_number->awb_pool_name ?></td>
                            <td><?= $awb_number->awb_number ?></td>
                            <td><?= $status ?></td>
                        </tr>
						<?php
					}//end foreach for $continents
					?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>