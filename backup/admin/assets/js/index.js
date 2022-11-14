const closeSection = (target_element) => {
    var target = document.getElementById(target_element);
    target.hasAttribute("data-hiden") ? target.removeAttribute('data-hiden') : target.setAttribute("data-hiden","")
}

const toogleNavbar = (element_id) => {
    if(element_id == "closehome"){
        document.getElementById("closehome").style.display = "none";
        document.getElementById("openhome").style.display = "block";
        document.getElementById("sidenavbar").setAttribute("style","transform: translateX(-271px);width: 0;");
    }else{
        document.getElementById("closehome").style.display = "block";
        document.getElementById("openhome").style.display = "none";
        document.getElementById("sidenavbar").setAttribute("style","width: 200px;transform: translateX(0)");
    }
}

const toogleDropDown = (clicked) =>{
    var target = document.getElementsByClassName(clicked)[0];
    if(target.style.display == "none"){
        target.style.display = "block";
    }else{
        target.style.display = "none";
    }
}