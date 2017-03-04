<?= @$this->session->flashdata('msg') ?>
<form action="<?= base_url('admin/new_shipment_admin_c/add_domestic_shipment') ?>" method="post"
      class="box box-solid box-warning">
    <div class="box-header with-border">
        <h3 class="box-title"> Form : Add Domestic Shipment </h3>
        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
                <i class="fa fa-minus"></i>
            </button>
        </div>
    </div>
    <div class="box-body">
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label for="">Country of Customer<i class="required">*</i></label>
                    <select name="domestic_country_id" id="domestic_country" class="form-control select2"
                    >
                        <option value="">Select Your Country</option>
						<?php
						foreach (@$countries as $country) {
							?>
                            <option
                                    value="<?= @$country->country_id ?>"><?= @$country->country_name ?></option>
							<?php
						}//end foreach for @$countries
						?>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label for="">Product/Type<i class="required">*</i></label>
                    <select name="product_type_id" id="product_type_id" class="form-control select2"
                            required>
                        <option value="">Select Product Type</option>
						<?php
						foreach ($product_types as $product_type) {
							?>
                            <option value="<?= $product_type->product_type_id ?>"><?= $product_type->product_type_name ?></option>
							<?php
						}//end foreach for $product_types
						?>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="">Origin State/Province<i class="required">*</i></label>
                    <select name="from_state_id" id="domestic_from_state_id" class="form-control select2"
                            required>
                        <option value="">Select Origin State</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="">Destination State/Province<i class="required">*</i></label>
                    <select name="to_state_id" id="domestic_to_state_id" class="form-control select2" required>
                        <option value="">Select Destination State</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="">Service<i class="required">*</i></label>
                    <select name="available_service" id="domestic_available_service"
                            class="form-control select2"
                            required>
                        <option value="">Select Available Service for this Route</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <div class="form-group">
                    <label for="">Weight<i class="required">*</i></label>
                    <input type="text" class="form-control" name="weight" id="weight" placeholder="Kg" required>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <label for="">Length<i class="required">*</i></label>
                    <input type="text" class="form-control" name="length" placeholder="cm" required>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <label for="">Width<i class="required">*</i></label>
                    <input type="text" class="form-control" name="width" placeholder="cm" required>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <label for="">Height<i class="required">*</i></label>
                    <input type="text" class="form-control" name="height" placeholder="cm" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6"><!--BEGIN SENDER INFO-->
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h1 class="panel-title">Sender Info</h1>
                    </div>
                    <div class="panel-body">
                        <!--search customer by select-->
                        <div class="col-sm-12">
                            <div class="well text-center">
                                <div class="form-group">
                                    <label>
                                        Please select Customer ID and verify information below<br>
                                        If not found, please click <a href="#" target="_blank">here</a> to manage customer.
                                    </label>
                                    <select id="search_domestic_sender" name="search_domestic_sender"
                                            class="form-control select2">
                                        <option value="">Select Customer ID</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">Contact Person</label>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="sender_firs_name" disabled>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="sender_last_name" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">Company</label>
                                <input type="text" class="form-control" id="sender_company_name" disabled>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">City</label>
                                <input id="sender_city_id" class="form-control" disabled>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">Zip/Post Code</label>
                                <input type="text" class="form-control" id="sender_zip_post_code" disabled>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">Address</label>
                                <textarea class="form-control" id="sender_address" rows="3" disabled></textarea>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">E-mail</label>
                                <input type="text" class="form-control" id="sender_email" disabled>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">Phone</label>
                                <input type="text" class="form-control" id="sender_phone_number" disabled>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">Federal Tax Type</label>
                                <input type="text"  class="form-control" id="sender_federal_tax_type_id" disabled>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">Federal Tax Number</label>
                                <input type="text" class="form-control" id="sender_federal_tax_number" disabled>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">IE/RG</label>
                                <input type="text" class="form-control" id="sender_ie_rg" disabled>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">Shipper VAT/GST Number</label>
                                <input type="text" class="form-control" id="sender_vat_gst" disabled>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--END SENDER INFO-->
            <div class="col-sm-6"><!--BEGIN RECEIVER INFO-->
                <div class="panel panel-warning">
                    <div class="panel-heading">
                        <h1 class="panel-title">Receiver Info</h1>
                    </div>
                    <div class="panel-body">
                        <div class="col-sm-12">
                            <!--search customer by select-->
                            <div class="well text-center">
                                <div class="form-group">
                                    <label>
                                        Please select Customer ID and verify information below<br>
                                        If not found, please click <a href="#" target="_blank">here</a> to manage customer.
                                    </label>
                                    <select id="search_domestic_receiver" name="search_domestic_receiver" class="form-control select2">
                                        <option value="">Select Customer ID</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">Contact Person</label>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="receiver_firs_name" disabled>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="receiver_last_name" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">Company</label>
                                <input type="text" class="form-control" id="receiver_company_name" disabled>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">City</label>
                                <input type="text" id="receiver_city_id" class="form-control" disabled>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">Zip/Post Code</label>
                                <input type="text" class="form-control" id="receiver_zip_post_code" disabled>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">Address</label>
                                <textarea class="form-control" id="receiver_address" rows="3" disabled></textarea>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">E-mail</label>
                                <input type="text" class="form-control" id="receiver_email" disabled>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">Phone</label>
                                <input type="text" class="form-control" id="receiver_phone_number" required>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">Federal Tax Type</label>
                                <input type="text" class="form-control" id="receiver_federal_tax_type_name" disabled>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">Federal Tax Number</label>
                                <input type="text" class="form-control" id="receiver_federal_tax_number" disabled>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">IE/RG</label>
                                <input type="text" class="form-control" id="receiver_ie_rg" disabled>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">Shipper VAT/GST Number</label>
                                <input type="text" class="form-control" id="receiver_vat_gst" disabled>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--END RECEIVER INFO-->
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="">Available Pickup Time<i class="required">*</i></label>
                    <div class="input-group date">
                        <span class="input-group-btn">
                            <button class="btn btn-success" type="button">
                                <i class="fa fa-calendar"></i>
                            </button>
                        </span>
                        <input type="text" name="shipment_available_pickup_time" class="form-control datetime_picker"
                               required>
                        <span class="input-group-btn">
                            <button class="btn btn-danger reset-input" type="button">
                                <i class="fa fa-times"></i>
                            </button>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="">Type of Export</label>
                    <select name="shipment_type_of_export_id" class="form-control select2">
                        <option value="">Select Type of Export</option>
				        <?php
				        foreach ($export_types as $row){
					        echo '<option value="'.$row->type_of_export_id.'">';
					        echo $row->type_of_export_name;
					        echo '</option>';
				        }
				        ?>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="well well-success well-sm text-center">
                    <div class="form-group">
                        <label for="">Bill To:<i class="required">*</i></label> <br>
                        <label class="radio-inline">
                            <input type="radio" name="shipment_bill_to" value="0" class="minimal" required> Sender
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="shipment_bill_to" value="1" class="minimal"> Receiver
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label for="">Description</label>
                    <textarea class="form-control" name="shipment_description" rows="5"></textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 text-center">
                <input type="submit" value="Add Shipment" class="btn btn-success">
            </div>
        </div>
    </div>
</form>