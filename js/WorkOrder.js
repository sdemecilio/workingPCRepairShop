$('#other_text').hide();


$('#other').click(function() {
    $('#other_text').toggle();
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



