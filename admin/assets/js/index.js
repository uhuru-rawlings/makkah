const closeSection = (target_element) => {
    var target = document.getElementById(target_element);
    target.hasAttribute("data-hiden") ? target.removeAttribute('data-hiden') : target.setAttribute("data-hiden","")
}