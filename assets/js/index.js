const toogleNavBar = () => {
    var target = document.getElementById("nav-bar-items");
    if(target.style.display == "block"){
        target.style.display = "none";
    }else{
        target.style.display = "block";
    }
}

const openBookingForm = (clicked_destination) => {
    document.getElementById("locations").value = clicked_destination;
    document.getElementById("booking-travel-booking").style.display = "flex";
}
const closeBookingForm = () => {
    document.getElementById("booking-travel-booking").style.display = "none";
}

const getNextCards = (clickedid) => {
    if(clickedid == "close-second"){
        document.getElementById("adventure-card-container").style.display = "block";
        document.getElementById("adventure-card-containers").style.display = "none";
    }else{
        document.getElementById("adventure-card-container").style.display = "none";
        document.getElementById("adventure-card-containers").style.display = "block"; 
    }
}