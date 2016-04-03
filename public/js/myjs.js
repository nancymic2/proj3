window.onload=function() {
document.getElementById('box').addEventListener('click', hideTutorial, false);
$('img[usemap]').rwdImageMaps();
};

function showTutorial(name, img, top, left, hpcolor, diagram, link){

var textbox=document.getElementById("box");
var ease=document.getElementById("ease");

textbox.style.top="190px";
textbox.style.left=left;


textbox.style.visibility="visible";
textbox.style.padding="30px";

textbox.style.height="200px";
textbox.style.opacity="1.0";



//textbox.innerHTML= name + '<br>' + '<div id="ease"><img src="' + diagram + '"> <bgsound src="' + link + '" loop="1"></div>'; 

textbox.innerHTML= name + '<br>' + '<div id="ease"><img src="' + diagram + '"> <audio src="' + link + '"  autoplay></audio></div>'; 




ease.style.visibility="visible";
ease.style.backgroundImage = "url('" + diagram + "')";
ease.style.height="170px";


}

function hideTutorial(){
document.getElementById("ease").style.height="0px";
document.getElementById("ease").style.visibility="hidden";
document.getElementById("box").style.height="0px";
document.getElementById("box").style.visibility="hidden";
document.getElementById("box").style.opacity="0.0";
//document.getElementById("box").style.top='';
//document.getElementById("box").style.left='';
//document.getElementById("icons").style.visibility="hidden";

  //document.myform.stage.value = name;
}


