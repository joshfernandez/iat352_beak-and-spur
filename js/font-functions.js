

$('#sizeRange').on('change', function () {
    var size = $(this).val();

    $('.family-name').css('font-size', size + 'px');
    // $('.family-name').html(size);
    //do the rest of the action...
});     
$('#weightRange').on('change', function () {
    var size = $(this).val();

    $('.family-name').css('font-weight',size);
    // $('.family-name').html(size);
    //do the rest of the action...
});     

$('#italicize').on('checked', function () {
    var size = $(this).val();

    $('.family-name').css('font-weight', size);
    // $('.family-name').html(size);
    //do the rest of the action...
});     

$(document).ready(function () {
    $('input[type="checkbox"]#italicize').click(function () {
        if ($(this).prop("checked") == true) {
            // alert("Checkbox is checked.");
            $('.family-name').css('font-style', "italic");

        }
        else if ($(this).prop("checked") == false) {
            $('.family-name').css('font-style', "normal");
        }
    });
});
// $('#checkbox').prop('checked'); // Boolean true