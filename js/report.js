function onEnter(el){
   el.style.backgroundColor = "rgb(208,233,255)";
}

function onLeave(el){
    el.style.backgroundColor = "white";
}

function doubleClick(el){
    temp = prompt("Enter A New Note: ", "");
    if (!(temp == ""))
        el.innerHTML = temp;
}