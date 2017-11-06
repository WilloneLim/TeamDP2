function checkForm(myForm){
    
    var u_nameregex=/^[a-zA-Z0-9]+$/;
    var mail_regex = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
    var u_mail = document.getElementById("user_email");
    var validusername = document.myForm.userName.value.match(u_nameregex);
    
    if(myForm.userPassword.value != myForm.rePassword.value){
        alert("Error: Passwords do not match!");
        myForm.userPassword.focus();
        return false;
    }
    
    if(validusername == null){
        alert("Your username should only contain alphanumeric characters");
        document.myForm.userName.focus();
        return false;
    }
    
    if(!mail_regex.test(u_mail.value)){
        alert("Email address is invalid");
        u_mail.focus();
        return false;
    }
    
    return true;
}

var validationApp =angular.module('validationApp', []);

validationApp.controller('mainController', function($scope){
    
    $scope.submitForm = function(isValid) {
        if(isValid){
            
        }
    };
    
});

function retrieve()
{
    var name = document.getElementById("full_name").value;
    
    var addr = document.getElementById("address").value;
    
    var addr2 = document.getElementById("address2").value;
    
    var city = document.getElementById("city").value;
    
    var state = document.getElementById("state").value;
    
    var zip = document.getElementById("zip_code").value;
    
    var country = document.getElementById("country").value;
    
    document.getElementById("billname").innerHTML = "<strong>Name: </strong>" + name;
    
    document.getElementById("homeinfo").innerHTML = "<strong>Address: </strong>" + addr + " ," + addr2 + " ," + zip + " ," + city + " ," + state + " ," + country; 
}