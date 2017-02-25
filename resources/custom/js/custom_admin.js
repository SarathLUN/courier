/**
 * Created by sarathlun on 2/25/17.
 */
$('document').ready(function(){
    $('.reset-input').click(function () {
        $(this).parent().prev('input').val(null);
    });
});