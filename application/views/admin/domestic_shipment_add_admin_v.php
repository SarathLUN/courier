<?= @$this->session->flashdata('msg') ?>
<form action="<?= base_url('admin/shipping_management_admin_c/add_domestic_shipment') ?>" method="post"
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
                                        You can auto fill Customer information by selected email<br>
                                        Or Manual Fill in below form
                                    </label>
                                    <select id="search_domestic_sender" name="search_domestic_sender"
                                            class="form-control select2">
                                        <option value="">select Customer's E-mail Address</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">Contact Person<i class="required">*</i></label>
                                <input type="text" class="form-control" name="sender_name"
                                       placeholder="Full Name" id="sender_name"
                                       required>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">Company<i class="required">*</i></label>
                                <input type="text" class="form-control" name="sender_company_name"
                                       id="sender_company_name"
                                       placeholder="Company Name" required>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">City<i class="required">*</i></label>
                                <select name="sender_city_id" id="sender_city_id"
                                        class="form-control select2"
                                        required>
                                    <option value="">Select City</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">Zip/Post Code</label>
                                <input type="text" class="form-control" name="sender_zip_post_code"
                                       id="sender_zip_post_code"
                                       placeholder="Zip/Post Code">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">Address<i class="required">*</i></label>
                                <textarea class="form-control" name="sender_address" id="sender_address"
                                          rows="3"
                                          required></textarea>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">E-mail<i class="required">*</i></label>
                                <input type="text" class="form-control" name="sender_email" id="sender_email"
                                       placeholder="john@company.com" required>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">Phone<i class="required">*</i></label>
                                <input type="text" class="form-control" name="sender_phone_number"
                                       id="sender_phone_number"
                                       placeholder="+855-23-000-000" required>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">Federal Tax Type</label>
                                <select name="sender_federal_tax_type_id" class="form-control select2">
                                    <option value="">Select Type of Tax</option>
									<?php
									foreach ($tax_types as $tax_type) {
										?>
                                        <option value="<?= $tax_type->federal_tax_type_id ?>"><?= $tax_type->federal_tax_type_name ?></option>
										<?php
									}//end foreach for $tax_types
									?>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">Federal Tax Number</label>
                                <input type="text" class="form-control" name="sender_federal_tax_number">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">IE/RG</label>
                                <input type="text" class="form-control" name="sender_ie_rg">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">Shipper VAT/GST Number</label>
                                <input type="text" class="form-control" name="sender_vat_gst">
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
                                        You can auto fill Customer information by selected email<br>
                                        Or Manual Fill in below form
                                    </label>
                                    <select id="search_domestic_receiver" class="form-control select2">
                                        <option value="">select Customer's E-mail Address</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">Contact Person<i class="required">*</i></label>
                                <input type="text" class="form-control" name="receiver_name" id="receiver_name"
                                       placeholder="Full Name" required>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">Company<i class="required">*</i></label>
                                <input type="text" class="form-control" name="receiver_company_name"
                                       id="receiver_company_name"
                                       placeholder="Company Name" required>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">City<i class="required">*</i></label>
                                <select name="receiver_city_id" id="receiver_city_id"
                                        class="form-control select2"
                                        required>
                                    <option value="">Select City</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">Zip/Post Code</label>
                                <input type="text" class="form-control" name="receiver_zip_post_code"
                                       id="receiver_zip_post_code"
                                       placeholder="Zip/Post Code">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">Address<i class="required">*</i></label>
                                <textarea class="form-control" name="receiver_address" id="receiver_address"
                                          rows="3"
                                          required></textarea>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">E-mail<i class="required">*</i></label>
                                <input type="text" class="form-control" name="receiver_email"
                                       id="receiver_email"
                                       placeholder="john@company.com" required>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">Phone<i class="required">*</i></label>
                                <input type="text" class="form-control" name="receiver_phone_number"
                                       id="receiver_phone_number"
                                       placeholder="+855-23-000-000" required>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">Federal Tax Type</label>
                                <select name="receiver_federal_tax_type_id" class="form-control select2">
                                    <option value="">Select Type of Tax</option>
									<?php
									foreach ($tax_types as $tax_type) {
										?>
                                        <option value="<?= $tax_type->federal_tax_type_id ?>"><?= $tax_type->federal_tax_type_name ?></option>
										<?php
									}//end foreach for $tax_types
									?>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">Federal Tax Number</label>
                                <input type="text" class="form-control" name="receiver_federal_tax_number">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">IE/RG</label>
                                <input type="text" class="form-control" name="receiver_ie_rg">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">Shipper VAT/GST Number</label>
                                <input type="text" class="form-control" name="receiver_vat_gst">
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

            <div class="col-sm-3">
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
            <div class="col-sm-3">
                <div class="form-group">
                    <label for="">Pay at:<i class="required">*</i></label> <br>
                    <label class="radio-inline">
                        <input class="minimal" type="radio" name="shipment_pay_at" value="0" required> Pick Up
                    </label>
                    <label class="radio-inline">
                        <input type="radio" class="minimal" name="shipment_pay_at" value="1"> Delivered
                    </label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label for="">Type of Export</label>
                    <select name="shipment_type_of_export_id" class="form-control select2">
                        <option value="">Select Type of Export</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <h1 class="panel-title">Payment Detail</h1>
                    </div>
                    <div class="panel-body">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <div class="col-sm-5 text-right">Total Weight(Kg)</div>
                                <div class="col-sm-2 text-center">=</div>
                                <div class="col-sm-5" id="weight_lb">N/A</div>
                            </li>
                            <li class="list-group-item">
                                <div class="col-sm-5 text-right">Unit Price($)</div>
                                <div class="col-sm-2 text-center">=</div>
                                <div class="col-sm-5" id="unit_price_lb">N/A</div>
                            </li>
                            <li class="list-group-item">
                                <div class="col-sm-5 text-right">Delivery Charge ($)</div>
                                <div class="col-sm-2 text-center">=</div>
                                <div class="col-sm-5" id="sub_total">N/A</div>
                            </li>
                            <li class="list-group-item">
                                <div class="col-sm-5 text-right">(<span id="tax_lb"></span>%) Services Tax ($)
                                </div>
                                <div class="col-sm-2 text-center">=</div>
                                <div class="col-sm-5" id="tax_price">N/A</div>
                            </li>
                            <li class="list-group-item">
                                <div class="col-sm-5 text-right">Total Charge ($)</div>
                                <div class="col-sm-2 text-center">=</div>
                                <div class="col-sm-5" id="total">N/A</div>
                            </li>
                        </ul>
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