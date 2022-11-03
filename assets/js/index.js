var images = ["images/background-1.jpg","images/background-2.jpg","images/background-3.jpg","images/background-4.jpg"];
var timer = 5000;
var i = 0;

function imageSliders(){
    if(i < images.length - 1){
        i++;
    }else{
        i = 0;
    }
    document.getElementById("image-slider").src = images[i];

    setTimeout("imageSliders()",timer);
}

window.onload = imageSliders();

const displayElements = (target_element) => {
    var taregt = document.getElementById(target_element);
    if(taregt.style.display == "block"){
        taregt.removeAttribute("style");
    }else{
        taregt.setAttribute("style","display:block;");
    }
}


const toogleServicespage = (clicked_id,e) =>{
    var buttonArray = ["button1","button2","button3","button4"];
    buttonArray.forEach(button => {
        if(document.getElementById(button) == e){
            e.setAttribute("class","btn shadow-none active");
        }else{
            document.getElementById(button).setAttribute("class","btn shadow-none");
        }
    })
    e.setAttribute("class","btn shadow-none active");
    var targetArray = ["book-a-trip","hotelbooking","hajjumrah","visaasistant"];
    targetArray.forEach(element => {
        if(element == clicked_id){
            document.getElementById(element).setAttribute("style","display: block;");
        }else{
            document.getElementById(element).setAttribute("style","display: none;");
        }
    })
}

var elem = document.getElementById("button1");
window.onload = toogleServicespage('book-a-trip',elem);