// select no if device is not an apple product, tablet, flash drive, or cell phone
$('#typeNo').click(function() {
    $('#warranty').show();
    $('#YesWarranty').show();
    $('#no').show();
    $('#typeNo').show();
    $('#errorMessage').hide();
});

$('#typeYes').click(function() {
    $('#warranty').hide();
    $('#YesWarranty').hide();
    $('#no').hide();
    $('#typeNo').show();
    $('#errorMessage').show();
    $('#proceedToPaperwork').hide();
    $('#compLanguage').hide();
    $('#compYes').hide();
    $('compNo').hide();
    $('#languageWarning').hide();

});

$('#YesWarranty').click(function() {
    $('#proceedToPaperwork').hide();
    $('#errMessageWarranty').show();
    $('#compLanguage').show();
    $('#compYes').show();
    $('#compNo').show();
         
});

$('#no').click(function() {
    $('#errMessageWarranty').hide();
    $('#compLanguage').show();
    $('#compYes').show();
    $('#compNo').show();
    
    if ($('#typeYes').click(function() {
        $('#proceedToPaperwork').hide();
    }));
    
    if ($('#YesWarranty').click(function() {
        $('#proceedToPaperwork').hide();
    }));
});

$('#Unsure').click(function() {
    $('#proceedToPaperwork').hide();
    $('#errMessageWarranty').show();
    $('#compLanguage').show();
    $('#compYes').show();
    $('#compNo').show();
         
});

$('#compYes').click(function() {
    $('#proceedToPaperwork').show();
    
    if ($('#typeYes').click(function() {
        $('#proceedToPaperwork').hide();
    }));
    
    if ($('#YesWarranty').click(function() {
        $('#proceedToPaperwork').hide();
    }));
});

$('#compNo').click(function() {
    $('#languageWarning').show();
    $('#proceedToPaperwork').show();
    
    if ($('#typeYes').click(function() {
        $('#proceedToPaperwork').hide();
    }));
    
    if ($('#YesWarranty').click(function() {
        $('#proceedToPaperwork').hide();
    }));
});



//$('#Hardware').click(function() {
//    $('#errorMessage').show();
//    $('#proceedToPaperwork').hide();
//});
//
//$('#Software').click(function() {
//    $('#proceedToPaperwork').show();
//    $('#errorMessage').hide();
//});
//
//$('#Unsure').click(function() {
//    $('#proceedToPaperwork').show();
//    $('#errorMessage').hide();
//});

// the following are messages and questions that are hidden when the page loads
$('#errMessageWarranty').hide();
$('#YesWarranty').hide();
$('#no').hide();
$('#errorMessage').hide();
$('#proceedToPaperwork').hide();
$('#followUp').hide();
$('#options').hide();
$('#warranty').hide();
$('#compLanguage').hide();
$('#compYes').hide();
$('#compNo').hide();
$('#languageWarning').hide();
