/**
 * Created by sarathlun on 2/25/17.
 */
var base_url = 'http://localhost/courier/';
$('document').ready(function () {
    //@domestic country change
    $('#domestic_country').change(function () {
        //get value for form
        var domestic_country = $(this).val();
        //reset option on select state & service
        $('#domestic_from_state_id').html('<option value="">Select Origin State</option>');
        $('#domestic_to_state_id').html('<option value="">Select Destination State</option>');
        $('#domestic_available_service').html('<option value="">Select Available Service for this Route</option>');
        //get all state or province inside this selected country
        if (domestic_country != "") {
            $.ajax({
                method: "POST",
                url: base_url + "admin/new_shipment_admin_c/ajax_get_states_byCountry/", // point to function that return
                data: {domestic_country: domestic_country},
                success: function (return_data) {
                    var data = JSON.parse(return_data);
                    $('#domestic_from_state_id').html(data.origin_state);
                    $('#domestic_to_state_id').html(data.dest_state);
                }
            });
        }
    });
    //get domestic available services for selected route
    $('#domestic_from_state_id,#domestic_to_state_id').change(function () {
        var from_state = $('#domestic_from_state_id').val();
        var to_state = $('#domestic_to_state_id').val();
        $('#domestic_available_service').html('<option value="">Select Available Service for this Route</option>');
        if (from_state != "" && to_state != "") {
            $.ajax({
                method: "POST",
                url: base_url + "admin/new_shipment_admin_c/ajax_get_service_byRoute/", // point to function that return
                data: {from_state: from_state, to_state: to_state},
                success: function (return_data) {
                    var data = JSON.parse(return_data);
                    $('#domestic_available_service').html(data.service);
                }
            });
        }
    });
    // get email of sender and city when source state change
    $('#domestic_from_state_id').change(function () {
        var from_state = $('#domestic_from_state_id').val();
        $('#search_domestic_sender').html('<option value="">Select Customer ID</option>');
        $('#sender_city_id').html('<option value="">Select City</option>');
        if (from_state != "") {
            $.ajax({
                method: "POST",
                url: base_url + "admin/new_shipment_admin_c/ajax_get_email_city_byState/", // point to function that return
                data: {state: from_state},
                success: function (return_data) {
                    var data = JSON.parse(return_data);
                    $('#search_domestic_sender').html(data.cid);
                    $('#sender_city_id').html(data.city);
                }
            });
        }
    });
    // get email of receiver and city when destination state change
    $('#domestic_to_state_id').change(function () {
        var to_state = $('#domestic_to_state_id').val();
        $('#search_domestic_receiver').html('<option value="">Select Customer ID</option>');
        $('#receiver_city_id').html('<option value="">Select City</option>');
        if (to_state != "") {
            $.ajax({
                method: "POST",
                url: base_url + "admin/new_shipment_admin_c/ajax_get_email_city_byState/", // point to function that return
                data: {state: to_state},
                success: function (return_data) {
                    var data = JSON.parse(return_data);
                    $('#search_domestic_receiver').html(data.cid);
                    $('#receiver_city_id').html(data.city);
                }
            });
        }
    });
    //get sender info via selected email
    $('#search_domestic_sender').change(function () {
        var uid = $('#search_domestic_sender').val();
        //clear old data
        $('#sender_firs_name').val('');
        $('#sender_last_name').val('');
        $('#sender_company_name').val('');
        $('#sender_zip_post_code').val('');
        $('#sender_address').text('');
        $('#sender_email').val('');
        $('#sender_email').prop('disabled', false);
        $('#sender_phone_number').val('');
        $('#sender_federal_tax_number').val('');
        $('#sender_ie_rg').val('');
        $('#sender_vat_gst').val('');
        if (uid != "") {
            $.ajax({
                method: "POST",
                url: base_url + "admin/new_shipment_admin_c/ajax_get_user_info/", // point to function that return
                data: {uid: uid},
                success: function (return_data) {
                    var data = JSON.parse(return_data);
                    $('#sender_firs_name').val(data.first_name);
                    $('#sender_last_name').val(data.last_name);
                    $('#sender_company_name').val(data.company_name);
                    $('#sender_city_id').html(data.city);
                    $('#sender_zip_post_code').val(data.zip_post_code);
                    $('#sender_address').text(data.address);
                    $('#sender_email').val(data.email);
                    $('#sender_email').prop('disabled', true); // disable edit on email field
                    $('#sender_phone_number').val(data.phone_number);
                    $('#sender_federal_tax_type_id').html(data.federal_tax_type);
                    $('#sender_federal_tax_number').val(data.federal_tax_number);
                    $('#sender_ie_rg').val(data.ie_rg);
                    $('#sender_vat_gst').val(data.vat_gst);
                }
            });
        }
    });
    
    //get receiver info via selected email
    $('#search_domestic_receiver').change(function () {
        var uid = $('#search_domestic_receiver').val();
        //clear old data
        $('#receiver_firs_name').val('');
        $('#receiver_last_name').val('');
        $('#receiver_company_name').val('');
        $('#receiver_zip_post_code').val('');
        $('#receiver_address').text('');
        $('#receiver_email').val('');
        $('#receiver_email').prop('disabled', false);
        $('#receiver_phone_number').val('');
        $('#receiver_federal_tax_number').val('');
        $('#receiver_ie_rg').val('');
        $('#receiver_vat_gst').val('');
        if (uid != "") {
            $.ajax({
                method: "POST",
                url: base_url + "admin/new_shipment_admin_c/ajax_get_user_info/", // point to function that return
                data: {uid: uid},
                success: function (return_data) {
                    var data = JSON.parse(return_data);
                    $('#receiver_firs_name').val(data.first_name);
                    $('#receiver_last_name').val(data.last_name);
                    $('#receiver_company_name').val(data.company_name);
                    $('#receiver_city_id').html(data.city);
                    $('#receiver_zip_post_code').val(data.zip_post_code);
                    $('#receiver_address').text(data.address);
                    $('#receiver_email').val(data.email);
                    $('#receiver_email').prop('disabled', true); // disable edit on email field
                    $('#receiver_phone_number').val(data.phone_number);
                    $('#receiver_federal_tax_type_id').html(data.federal_tax_type);
                    $('#receiver_federal_tax_number').val(data.federal_tax_number);
                    $('#receiver_ie_rg').val(data.ie_rg);
                    $('#receiver_vat_gst').val(data.vat_gst);
                }
            });
        }
    });
});

