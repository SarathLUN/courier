<div class="panel panel-default">
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <table
                        class="table table-striped table-bordered table-hover table-checkable order-column
                dataTable">
                    <thead>
                    <tr>
                        <th> No.</th>
                        <th> AWB Pool Name</th>
                        <th> AWB Prefix</th>
                        <th> Start Number</th>
                        <th> End Number</th>
                        <th> Status</th>
                        <th> Action</th>
                    </tr>
                    </thead>
                    <tbody>
					<?php
					$x = 1;
					foreach ($awb_pools as $awb_pool) {
					    //format the start number of the pool
						$len = strlen($awb_pool->awb_pool_end_number);
						$format = '%0' . $len . 'd';
						$start_num = sprintf($format, $awb_pool->awb_pool_start_number);
						$end_num = sprintf($format, $awb_pool->awb_pool_end_number);
						
						//check status for display and generate button action
						if ($awb_pool->awb_pool_is_enabled == 1) {
							$status = "<span class='label label-success
                        '>Active</span>";
							$button = "<a href='" . base_url('admin/awb_management_admin_c/disable_awb_pool/')
								. $awb_pool->awb_pool_id . "' class='btn btn-warning btn-cycle btn-xs' data-toggle='tooltip' data-placement='top' title='Disable'><i class='fa fa-times' aria-hidden='true'></i></a>";
						} else {
							$status = "<span class='label label-danger'>Disabled</span>";
							$button = "<a href='" . base_url('admin/awb_management_admin_c/enable_awb_pool/')
								. $awb_pool->awb_pool_id . "' class='btn btn-primary btn-cycle btn-xs' data-toggle='tooltip' data-placement='top' title='Enable'><i class='fa fa-check' aria-hidden='true'></i></a>";
						}
						?>
                        <tr class="odd gradeX">
                            <td><?= $x++ ?></td>
                            <td><?= $awb_pool->awb_pool_name ?></td>
                            <td><?= $awb_pool->awb_pool_prefix ?></td>
                            <td><?= $start_num ?></td>
                            <td><?= $end_num ?></td>
                            <td><?= $status ?></td>
                            <td>
								<?= $button ?>
                                <a href="<?=base_url('admin/awb_management_admin_c/delete_awb_pool/'.$awb_pool->awb_pool_id)?>" class="btn btn-danger btn-cycle btn-xs" data-toggle='tooltip' data-placement='top' title='Delete'><i class='fa fa-trash' aria-hidden='true'></i></a>
                            </td>
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

<form class="panel panel-success" action="<?= base_url('admin/awb_management_admin_c/add_awb_pool') ?>"
      method="post">
    <div class="panel-body">
        <div class="row">
            <div class="col-sm-3">
                <input type="text" name="awb_pool_name" class="form-control" placeholder="Pool Name" required>
            </div>
            <div class="col-sm-3">
                <input type="text" name="awb_pool_prefix" class="form-control" placeholder="Pool Prefix" required>
            </div>
            <div class="col-sm-2">
                <input type="text" name="awb_pool_start_number" class="form-control" placeholder="Pool Start Number" required>
            </div>
            <div class="col-sm-2">
                <input type="text" name="awb_pool_end_number" class="form-control" placeholder="Pool End Number" required>
            </div>
            <div class="col-sm-2">
                <button type="submit" class="btn btn-success btn-block btn-flat">
                    <i class="fa fa-plus"></i>&nbsp;
                    <span>Add New Pool</span>
                </button>
                
<!--                <input type="submit" value="" >-->
            </div>
        </div>
    </div>
</form>

<?= @$this->session->flashdata('msg') ?>