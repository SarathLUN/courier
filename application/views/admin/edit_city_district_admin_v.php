<!-- Default box -->
<form class="box box-success" method="post"
      action="<?= base_url('admin/city_district_admin_c/update_city_district') ?>">
    <div class="box-header with-border">
        <h3 class="box-title">Edit City/District</h3>

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
                        <option value="<?= $country->country_id ?>" <?= ($city['state_country_id'] == $country->country_id) ? 'selected' : null ?>>
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
					<?php
					foreach ($states as $state) {
						?>
                        <option value="<?= $state->state_id ?>" <?= ($state->state_id == $city['city_state_id']) ? 'selected' : null ?>>
							<?= $state->state_name ?>
                        </option>
						<?php
					}//end foreach for $states
					?>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-sm-12">
                <label for="">City/District Name</label>
                <input type="text" name="city_name" placeholder="Doun Penh" class="form-control"
                       value="<?= $city['city_name'] ?>">
            </div>
        </div>
        <div class="hidden">
            <input type="hidden" name="city_id" value="<?= $this->encryption->encrypt($city['city_id']) ?>">
        </div>
    </div>
    <!-- /.box-body -->
    <div class="box-footer">
        <input type="submit" class="btn btn-success" value="Update">
    </div>
    <!-- /.box-footer-->
</form>
<!-- /.box -->
<?= @$this->session->flashdata('msg') ?>