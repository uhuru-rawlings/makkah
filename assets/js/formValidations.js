const removeErrors = (clicked) => {
    var target = document.getElementById(clicked);
    if(target.value.trim() !== ""){
        target.style.borderColor = "#CED4DA";
    }else{
        target.style.borderColor = "red";
    }
}

const validateTripForm = () =>{
    var fromlocation = document.getElementById("fromlocation");
    var tolocation   = document.getElementById("tolocation");
    var tripsround   = document.getElementById("tripsround");
    var formdate     = document.getElementById("formdate");
    var todate       = document.getElementById("todate");
    var travelclass  = document.getElementById("travelclass");
    var number       = document.getElementById("number");
    var aggrement    = document.getElementById("aggrement");

    if(fromlocation.value.trim() === "" || tolocation.value.trim() === "" || tripsround.value.trim() === "" || formdate.value.trim() === "" || todate.value.trim() === "" || travelclass.value.trim() === "" || number.value.trim() === ""){
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
            alert("please check the agrement checkbox");
            return false;
        }
    }
}