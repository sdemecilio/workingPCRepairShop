$('#YesWarranty').click(function() {
    $('button').hide();
    $('#errorMessage').show();
});

$('#no').click(function() {
    $('button').show();
    $('#errorMessage').hide();
});

$('#errorMessage').hide();
$('button').hide();


