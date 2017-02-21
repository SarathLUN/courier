<!-- Default box -->
<form class="box box-warning" method="post" action="<?=base_url('admin/country_admin_c/add_country')?>">
    <div class="box-header with-border">
        <h3 class="box-title">Add Country</h3>

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
                <input type="text" name="country_name" placeholder="Cambodia" class="form-control">
            </div>
            <div class="form-group col-sm-4">
                <label for="">Country ISO-2 Code</label>
                <input type="text" name="country_iso2_code" placeholder="KH" class="form-control">
            </div>
            <div class="form-group col-sm-4">
                <label for="">Country ISO-3 Code</label>
                <input type="text" name="country_iso3_code" placeholder="KHM" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-sm-4">
                <label for="">Tax (%)</label>
                <input type="text" name="country_tax" class="form-control" placeholder="10">
            </div>
            <div class="form-group col-sm-4">
                <label for="">Currency</label>
                <input type="text" name="country_currency" class="form-control" placeholder="Riel">
            </div>
            <div class="form-group col-sm-4">
                <label for="">Calling Code</label>
                <input type="text" name="country_calling_code" class="form-control" placeholder="855">
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
<?=@$this->session->flashdata('msg')?>