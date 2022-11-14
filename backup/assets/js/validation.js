const validateContact = () => {
    var fullname    = document.getElementById("fullname");
    var emailadress = document.getElementById("emailadress");
    var phonenumber = document.getElementById("phonenumber");
    var message     = document.getElementById("message");

    if(fullname.value.trim() === "" || emailadress.value.trim() === "" || phonenumber.value.trim() === "" || message.value.trim() === ""){
        if(fullname.value.trim() === ""){
            fullname.style.borderColor = "red";
            return false;
        }else if(emailadress.value.trim() === ""){
            emailadress.style.borderColor = "red";
            return false;
        }else if(phonenumber.value.trim() === ""){
            phonenumber.style.borderColor = "red";
            return false;
        }else{
            message.style.borderColor = "red";
            return false;
        }
    }
}

const removeErrors = (clicked) => {
    var target = document.getElementById(clicked);
    if(target.value.trim() !== ""){
        target.style.borderColor = "#CED4DA";
    }else{
        target.style.borderColor = "red";
    }
}

const validateBookings = () => {
    var locations    = document.getElementById("locations");
    var fullname    = document.getElementById("fullname");
    var emailadress = document.getElementById("emailadress");
    var phonenumber = document.getElementById("phonenumber");
    var fromdate = document.getElementById("fromdate");
    var todate = document.getElementById("todate");
    var numberofpeople     = document.getElementById("numberofpeople");

    if(locations.value.trim() === "" || fullname.value.trim() === "" || emailadress.value.trim() === "" || phonenumber.value.trim() === "" || fromdate.value.trim() === "" || todate.value.trim() === "" || numberofpeople.value.trim() === ""){
        if(locations.value.trim() === ""){
            locations.style.borderColor = "red";
            return false;
        }else if(fullname.value.trim() === ""){
            fullname.style.borderColor = "red";
            return false;
        }else if(emailadress.value.trim() === ""){
            emailadress.style.borderColor = "red";
            return false;
        }else if(phonenumber.value.trim() === ""){
            phonenumber.style.borderColor = "red";
            return false;
        }else if(fromdate.value.trim() === ""){
            fromdate.style.borderColor = "red";
            return false;
        }else if(todate.value.trim() === ""){
            todate.style.borderColor = "red";
            return false;
        }else{
            numberofpeople.style.borderColor = "red";
            return false;
        }
    }
}