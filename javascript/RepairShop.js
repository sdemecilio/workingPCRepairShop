$('#YesWarranty').click(function() {
    $('#proceedToPaperwork').hide();
    $('#followUp').show();
    $('#options').show();
});

$('#no').click(function() {
    $('#proceedToPaperwork').show();
    $('#errorMessage').hide();
    $('#followUp').hide();
    $('#options').hide();
});

$('#Hardware').click(function() {
    $('#errorMessage').show();
    $('#proceedToPaperwork').hide();
});

$('#Software').click(function() {
    $('#proceedToPaperwork').show();
    $('#errorMessage').hide();
});

$('#Unsure').click(function() {
    $('#proceedToPaperwork').show();
    $('#errorMessage').hide();
});

$('#errorMessage').hide();
$('#proceedToPaperwork').hide();
$('#followUp').hide();
$('#options').hide();