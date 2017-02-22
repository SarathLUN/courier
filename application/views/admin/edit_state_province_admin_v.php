<!-- Default box -->
<form class="box box-warning" method="post" action="<?=base_url('admin/state_province_admin_c/update_state_province')?>">
    <div class="box-header with-border">
        <h3 class="box-title">Edit State/Province</h3>
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
                <select name="state_country_id" class="select2 form-control">
                    <option value="" readonly>Select Country</option>
				    <?php
				    foreach ($countries as $country){
					    ?>
                        <option value="<?= $country->country_id ?>" <?=($country->country_id==$state['state_country_id'])?'selected':null?>>
						    <?=$country->country_name.(($country->country_iso2_code==null)?null:(" (".strtoupper($country->country_iso2_code).")"))?>
                        </option>
					    <?php
				    }//end foreach for $countries
				    ?>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-sm-12">
                <label for="">State/Province Name</label>
                <input type="text" name="state_name" placeholder="Phnom Penh" class="form-control" value="<?=$state['state_name']?>">
            </div>
        </div>
        
        <div class="hidden">
            <input type="hidden" name="state_id" value="<?=$this->encryption->encrypt($state['state_id'])?>">
            <input type="hidden" name="state_secure_code" value="<?=$state['state_secure_code']?>">
        </div>
    </div>
    <!-- /.box-body -->
    <div class="box-footer">
        <input type="submit" class="btn btn-success" value="Update">
    </div>
    <!-- /.box-footer-->
</form>
<!-- /.box -->
<?=@$this->session->flashdata('msg')?>