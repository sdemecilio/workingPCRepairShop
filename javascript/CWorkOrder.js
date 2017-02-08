$("#btn-submit").click(function() {
    alert("Thank you. Your service order has been submitted.");
});

// if user answers no to being a Green River memeber, GR ID field is disabled
$('#GRNo').click(function() {
    $('#ID').prop("disabled", true);
});

// allows for GR ID field to be enabled/disabled between answers
$('#GRYes').click(function() {
    $('#ID').prop("disabled", false);
});