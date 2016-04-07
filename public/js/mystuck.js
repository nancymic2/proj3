
window.onload=function(){

	sizeit();
	//document.getElementById('hamburger').addEventListener('click', getmenu, false);
	//moved event listener inline because pages are so big
};

window.onresize=function(){

	sizeit();
};


function sizeit() {
// onload or on change check the width of the window and get from the data attribute in the image tag the appropriate image
// on small screens, only the smallest image will download, followed by medium, then large
// images on all pages are served based on this function. however the photo credit page gets a larger image on a small screen as it looks better in a single column
//images names *Cred are the small version. medium is *Med



	var stuck=document.getElementsByClassName('sticky');
	for (var i=0; i<stuck.length; i++) {

		if (window.matchMedia('(max-width: 1000px)').matches) {
			stuck[i].setAttribute('class', 'nothing');
			

		
		}

		
    }

    return;
}

//this function shows and hides the hamburger menu
