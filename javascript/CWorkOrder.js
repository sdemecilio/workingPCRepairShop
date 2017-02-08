//$("#btn-submit").click(function() {
//    alert("Thank you. Your service order has been submitted.");
//});

// if user answers no to being a Green River memeber, GR ID field is disabled
$('#student_faculty1').click(function() {
    $('#greenriverID').prop("disabled", true);
});

// allows for GR ID field to be enabled/disabled between answers
$('#student_faculty').click(function() {
    $('#greenriverID').prop("disabled", false);
});