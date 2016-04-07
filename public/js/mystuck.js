
window.onload=function(){

	sizeit();

};

window.onresize=function(){

	sizeit();
};


function sizeit() {
// onload or on change check the width of the window and get rid of stupid sticky class



	var stuck=document.getElementsByClassName('sticky');
	for (var i=0; i<stuck.length; i++) {

		if (window.matchMedia('(max-width: 1000px)').matches) {
			stuck[i].setAttribute('class', 'nothing');
			
	
		}
    }

}

//this function shows and hides the hamburger menu
