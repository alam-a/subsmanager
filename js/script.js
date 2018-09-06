function printInConsole(message){
    console.log(message);
}
var counter=1;

function onMenuBarClick(){
    var image = document.getElementById('menu-bar-image');
    var nav = document.getElementsByClassName('header-nav')[0];
    if(counter%2==1){
        image.src="icons/close.svg";
        nav.style ="display:block;";
        printInConsole(counter);
        counter++;

    }else{
        image.src="icons/bar.svg";
        nav.style="display:none;";
        counter++;
    }
    printInConsole(counter);
}

function printMessageTop(){
    document.getElementById('message-top').style='display:block;';
    document.getElementById('message-top').innerHTML='<div style="display:inline;position:fixed;top:0px;right:0px;" onclick="closeMessageTop()">Close</div><p>'+'Not a working Web App, just demonstration. Check menu items like Home, Pricing, etc. to visit other pages.<br>Thank You'+'</p>';
    
}
function closeMessageTop(){
    document.getElementById('message-top').style='display:none;';
}