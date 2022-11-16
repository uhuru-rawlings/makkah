const closeOverlay = (clicked_id) =>{
    var target = document.getElementById(clicked_id);
    if(target.style.display == "none"){
        target.style.display = "flex"
    }else{
        target.style.display = "none"
    }
}

const removeErrors = (clicked_id) =>{
    document.getElementById("").style.borderColor = "#FFFFFF";
}


const validateHotelBooking = () =>{
    var hotels = document.getElementById("hetels");
    var numbers = document.getElementById("numbers");
    var fromdate = document.getElementById("fromdate");
    var todate = document.getElementById("todate");

    if(hotels.value.trim() === "" || numbers.value.trim() === "" || fromdate.value.trim() === "" || todate.value.trim() === ""){
        if(hotels.value.trim() === ""){
            hotels.style.borderColor = "red";
            return false;
        }else if(numbers.value.trim() === ""){
            hotels.style.borderColor = "red";
            return false;
        }else if(fromdate.value.trim() === ""){
            fromdate.style.borderColor = "red";
            return false;
        }else{
            todate.style.borderColor = "red";
            return false;
        }
    }
}

const validateTripForm = () =>{
    var fromlocation = document.getElementById("fromlocation");
    var tolocation = document.getElementById("tolocation");
    var tripsround = document.getElementById("tripsround");
    var formdate = document.getElementById("formdate");
    var travelclass = document.getElementById("travelclass");
    var number = document.getElementById("number");
    var aggrement = document.getElementById("aggrement");

    if(fromlocation.value.trim() === "" || tolocation.value.trim() === "" || tripsround.value.trim() === "" ||formdate.value.trim() === "" || travelclass.value.trim() === "" || number.value.trim() === ""){
        if(fromlocation.value.trim() === ""){
            fromlocation.style.borderColor = "red";
            return false;
        }else if(tolocation.value.trim() === ""){
            tolocation.style.borderColor = "red";
            return false;
        }else if(tripsround.value.trim() === ""){
            tripsround.style.borderColor = "red";
            return false;
        }else if(formdate.value.trim() === ""){
            formdate.style.borderColor = "red";
            return false;
        }else if(travelclass.value.trim() === ""){
            travelclass.style.borderColor = "red";
            return false;
        }else{
            number.style.borderColor = "red";
            return false;
        }
    }else{
        if(!aggrement.checked){
            alert("please check the agreement box");
            return false;
        }
    }
}

const validateVisaBookings = () =>{
    var appointmentdate = document.getElementById("appointmentdate");
    if(appointmentdate.value.trim() === ""){
        appointmentdate.style.borderColor = "red";
        return false;
    }
}