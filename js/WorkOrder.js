$('#other_text').hide();


$('#other').click(function() {
    $('#other_text').toggle();
});

$('#student_faculty_yes').click(function() {
    $('#grcID').show();
    $('#greenriverID').show();
    
});

$('#student_faculty_no').click(function() {
    showHideGRCID();
});

function showHideGRCID() {

    if(document.getElementById('student_faculty_no').checked){
    	
        document.getElementById('greenriverID').style.display='none';
        document.getElementById('grcID').style.display='none';
     

    }else{
      
    	  document.getElementById('greenriverID').style.display='block';
    	   document.getElementById('grcID').style.display='block';
    }
    
};



