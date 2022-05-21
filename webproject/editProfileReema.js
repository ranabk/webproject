function validateForm() {
    var name = document.getElementById('name').value;
    var phoneNumber = document.getElementById('phoneNumber').value;
    var email = document.getElementById('email').value;
    var gender = document.getElementById('gender').value;

    if (name == ''){
              alert( "Please provide your name!" );

    }else if(phoneNumber == ''){
              alert( "Please provide your phone number!" );

    }else if(email == ''){
    alert( "Please provide your email!" );

    }else if(gender == ''){
       alert( "Please provide your gender!" );

    }else{
       document.window.location = '/'
    }
 }
