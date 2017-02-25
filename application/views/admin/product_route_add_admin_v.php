<div class="row">
    <div class="col-sm-12">
        <div class="alert alert-info">
            <p>By default, all product type are allow.</p>
            <p>However, You may apply this rule to deny product type to follow country policy.</p>
        </div>
    </div>
</div>
<form class="box box-warning" method="post" action="<?= base_url('admin/product_route_admin_c/add_product_route') ?>">
    <div class="box-header with-border">
        <h3 class="box-title">Add Product Route</h3>
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
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="product_route_origin_country">Origin Country</label>
                    <select name="product_route_origin_country" id="product_route_origin_country" class="form-control select2">
                            <option value=""> - select an origin country - </option>
                    </select>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="product_route_consignee_country">Destination Country</label>
                    <select name="product_route_consignee_country" id="product_route_consignee_country" class="form-control select2">
                        <option value=""> - select an destination country - </option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="product_route_product_type_id">Product Type</label>
                    <select name="product_route_product_type_id" id="product_route_product_type_id" class="form-control select2">
                        <option value=""> - select an product type - </option>
                    </select>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="product_route_is_denied">Action</label>
                    <select name="product_route_is_denied" id="product_route_is_denied" class="form-control">
                        <option value="1" selected>Deny</option>
                        <option value="0">Allow</option>
                    </select>
                </div>
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