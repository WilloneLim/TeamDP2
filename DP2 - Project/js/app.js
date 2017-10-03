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