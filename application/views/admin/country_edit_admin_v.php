<!-- Default box -->
<form class="box box-warning" method="post" action="<?=base_url('admin/country_admin_c/update_country')?>">
    <div class="box-header with-border">
        <h3 class="box-title"><?=$country['country_name']?></h3>

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
            <div class="form-group col-sm-4">
                <label for="">Country Name</label>
                <input type="text" name="country_name" value="<?=$country['country_name']?>" class="form-control">
            </div>
            <div class="form-group col-sm-4">
                <label for="">Country ISO-2 Code</label>
                <input type="text" name="country_iso2_code" value="<?=$country['country_iso2_code']?>" class="form-control">
            </div>
            <div class="form-group col-sm-4">
                <label for="">Country ISO-3 Code</label>
                <input type="text" name="country_iso3_code" value="<?=$country['country_iso3_code']?>" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-sm-4">
                <label for="">Tax (%)</label>
                <input type="text" name="country_tax" class="form-control" value="<?=$country['country_tax']?>">
            </div>
            <div class="form-group col-sm-4">
                <label for="">Currency</label>
                <input type="text" name="country_currency" class="form-control" value="<?=$country['country_currency']?>">
            </div>
            <div class="form-group col-sm-4">
                <label for="">Calling Code</label>
                <input type="text" name="country_calling_code" class="form-control" value="<?=$country['country_calling_code']?>">
            </div>
        </div>
    </div>
    <div class="hidden">
        <input type="hidden" name="country_secure_code" value="<?=$country['country_secure_code']?>">
        <input type="hidden" name="country_id" value="<?=$this->encryption->encrypt($country['country_id'])?>">
    </div>
    <!-- /.box-body -->
    <div class="box-footer">
        <input type="submit" class="btn btn-success" value="Update">
        <a href="<?=site_url('admin/country_admin_c/list_country')?>" class="btn btn-danger">Back</a>
    </div>
    <!-- /.box-footer-->
</form>
<!-- /.box -->
<?=@$this->session->flashdata('msg')?>