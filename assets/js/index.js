
function displayElements(target_element){
    var taregt = document.getElementById(target_element);
    if(taregt.style.display == "block"){
        taregt.removeAttribute("style");
    }else{
        taregt.setAttribute("style","display:block;");
    }
}


function toogleServicespage(clicked_id,e){
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

var start = 0;
function coreValuesSlider(){
    var container = document.querySelectorAll(".corevalue-card");
    if(start < container.length - 1){
        start++;
    }else{
        start = 0;
    }
    container.forEach(element => {
        if(container[start] == element){
            element.setAttribute("class","corevalue-card active");
        }else{
            element.setAttribute("class","corevalue-card");
        }
    })

    setTimeout("coreValuesSlider()", 5000);
}
window.onload = coreValuesSlider()


