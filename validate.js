function validate(){
    if(document.getElementById("fname").value==""){
        alert("Please enter your Full Name");
        document.getElementById("fname").focus();
        return false;
    }
    if(document.getElementById("address").value==""){
        alert("Please enter your Address");
        document.getElementById("address").focus();
        return false;
    }
    if(document.getElementById("male").checked===false ){
        alert("Please enter your Gender");
        document.getElementById("male").focus();
        return false;
    }
    
    if(document.getElementById('district').value==""){
        alert("Please select your district");
        document.getElementById('district').focus();
        return false;
    }
    var cn=/^[6-9]\d{9}$/;
    var mobval=/^[6-9]\d{9}$/; // starts with [6-9] followed by [0-9] denoted by \d 9 times and end
        if(!mobval.test(document.getElementById("contact_number").value)){ // here .test return true after comparing so ! is used to return false if it doesnt match with mobval
            alert("Please enter a valid Mobile Number");
            document.getElementById("contact_number").focus();
            return false;
        }
        if(!mobval.test(document.getElementById('whatsapp_number').value)){
            alert("Please enter a valid WhatsApp Number");
            document.getElementById('whatsapp_number').focus();
            return false;
        }

    var vmail=/^\w+[@][a-zA-Z]+[.][a-zA-Z]+$/;
    if(!vmail.test(document.getElementById('email').value)){
        alert("Please enter a valid email address");
        document.getElementById('email').focus();
        return false;
    }
    if(document.getElementById("occupation").value==""){
        alert("Please enter your Occupation");
        document.getElementById("occupation").focus();
        return false;
    }
    if(document.getElementById("highest_quali").value==""){
        alert("Please enter your Highest Qualification");
        document.getElementById("highest_quali").focus();
        return false;
    }
    if(document.getElementById("dob").value==""){
        alert("Please enter your Date of Birth");
        document.getElementById("dob").focus();
        return false;
    }
    if(!document.getElementById('phase-I').checked && !document.getElementById('phase-II').checked && !document.getElementById('both').checked){
        alert("Please select your course");
        document.getElementById('phase-I').focus();
        return false;
    }

    if(confirm("Are you sure you want to submit?")){

    }else{
        return false;
    }
}