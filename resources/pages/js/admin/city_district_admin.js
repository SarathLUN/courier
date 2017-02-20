/**
 * Created by sarathlun on 2/19/17.
 */
var base_url = 'http://localhost/courier/';
$('document').ready(function(){
    $('#country_id').change(function () {
        var cid = $('#country_id').val();
        $.ajax({
            method:'post',
            url:base_url+'admin/city_district_admin_c/get_states_byCountry', //link to function
            data:{country_id:cid}, //data to be post to controller {name:value}
            success:function (return_data) {
                var data = JSON.parse(return_data); //decode data from controller
                $('#city_state_id').html(data.states); // apply html to element by array data index states
            }
        })
    });

});