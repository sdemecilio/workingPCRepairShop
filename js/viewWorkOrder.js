// hide Update section when page is loaded
$('#updateSection').hide();

// show Update section when button is clicked
$('#update-btn').click(function() {
    $('#updateSection').show();
    $('#begin_work_form').hide();
    $('#work_finished_form').hide();
});

$('#beginWork').click(function() {
    $('#begin_work_form').show();
});

$('#workFinished').click(function() {
   $('#work_finished_form').show();
});

//$(document).ready(function() {
//    
//} );