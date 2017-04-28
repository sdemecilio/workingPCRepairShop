//$('#submit-btn').click(function() {
//    alert("submit clicked");
//});

var valid = true;

validate();
function validateCustomerInfo() {
    var firstName = document.getElementById('firstName').value;
    var lastName = document.getElementById('lastName').value;
    var ID = document.getElementById('ID').value;
    var email = document.getElementById('email').value;
    var phoneNumber = document.getElementById('phoneNumber').value;
    
    alert(firstName + lastName + ID + email + phoneNumber);
}

function validateCompInfo() {
    var compLang = document.getElementById('compLang').value;
    var user = document.getElementById('username').value;
    var password = document.getElementById('password').value;
    var cInitials = document.getElementById('cInitials').value;
    
    if (compLang === "")
    {
        valid = false;
    }
    else if (user === "")
    {
        valid = false;
    }
    else if (password ==="")
    {
        valid = false;
    }
    else if (cInitials === "")
    {
        valid = false;
    }
    
}

function validate() {
    //validateCompInfo();
    $('#submit-btn').click(function() {
        //validateCustomerInfo();
        validateCompInfo();
        if (valid === true)
        {
            alert ("Thank you! Your work order has been submitted!");
        }
        else
        {
            alert ("Error!");
        }
    });
}
    