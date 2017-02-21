<!-- Default box -->
<form class="box box-warning" method="post" action="<?= base_url('admin/city_district_admin_c/add_city_district') ?>">
    <div class="box-header with-border">
        <h3 class="box-title">Add City/District</h3>

        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
                <i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip"
                    title="Remove">
                <i class="fa fa-times"></i>
            </button>
        </div>
    </div>
    <div class="box-body">
        <div class="row">
            <div class="form-group col-sm-12">
                <label for="">Country</label>
                <select id="country_id" class="form-control select2">
					<?php
					foreach ($countries as $country) {
						?>
                        <option value="<?= $country->country_id ?>">
							<?= $country->country_name ?>
                        </option>
						<?php
					}//end foreach for $countries
					?>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-sm-12">
                <label for="">State/Province</label>
                <select name="city_state_id" id="city_state_id" class="select2 form-control">
                    <option value="" readonly>Select State or Province</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-sm-12">
                <label for="">City/District Name</label>
                <input type="text" name="city_name" placeholder="Doun Penh" class="form-control">
            </div>
        </div>

    </div>
    <!-- /.box-body -->
    <div class="box-footer">
        <input type="submit" class="btn btn-success" value="Add">
    </div>
    <!-- /.box-footer-->
</form>
<!-- /.box -->
<?= @$this->session->flashdata('msg') ?>