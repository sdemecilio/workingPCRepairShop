$('#YesWarranty').click(function() {
    $('button').hide();
    $('#followUp').show();
    $('#options').show();
});

$('#no').click(function() {
    $('button').show();
    $('#errorMessage').hide();
    $('#followUp').hide();
    $('#options').hide();
});

$('#Software').click(function() {
    $('#errorMessage').show();
    $('button').hide();
});

$('#Hardware').click(function() {
    $('button').show();
    $('#errorMessage').hide();
});

$('#errorMessage').hide();
$('button').hide();
$('#followUp').hide();
$('#options').hide();
