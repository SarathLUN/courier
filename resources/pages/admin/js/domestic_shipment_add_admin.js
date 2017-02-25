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
                url: base_url + "admin/new_shipment_admin_c/get_states_byCountry/", // point to function that return
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
                url: base_url + "admin/new_shipment_admin_c/get_service_byRoute/", // point to function that return
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
        $('#search_domestic_sender').html('<option value="">select Customer\'s E-mail Address</option>');
        $('#sender_city_id').html('<option value="">Select City</option>');
        if (from_state != "") {
            $.ajax({
                method: "POST",
                url: base_url + "admin/new_shipment_admin_c/get_sender_email_byState/", // point to function that return
                data: {from_state: from_state},
                success: function (return_data) {
                    var data = JSON.parse(return_data);
                    $('#search_domestic_sender').html(data.sender_mail);
                    $('#sender_city_id').html(data.sender_city);
                }
            });
        }
    });
    // get email of receiver and city when destination state change
    $('#domestic_to_state_id').change(function () {
        var to_state = $('#domestic_to_state_id').val();
        $('#search_domestic_receiver').html('<option value="">select Customer\'s E-mail Address</option>');
        $('#receiver_city_id').html('<option value="">Select City</option>');
        if (to_state != "") {
            $.ajax({
                method: "POST",
                url: base_url + "admin/new_shipment_admin_c/get_receiver_email_byState/", // point to function that return
                data: {to_state: to_state},
                success: function (return_data) {
                    var data = JSON.parse(return_data);
                    $('#search_domestic_receiver').html(data.receiver_mail);
                    $('#receiver_city_id').html(data.receiver_city);
                }
            });
        }
    })
});

