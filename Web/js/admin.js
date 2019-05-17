
let menuAdminEstVisible = false;
let timerInterval = null;

let menuAdmin = document.getElementById("menu-admin");

let boutonMenuAdmin = document.getElementById("bouton-menu-admin");
boutonMenuAdmin.onclick = function () { controlerMenuAdmin(); }

//-----------------------------------------------
// méthode pour afficher/masquer le menu admin
//-----------------------------------------------
const controlerMenuAdmin = () => {


	if (menuAdminEstVisible) {
		menuAdminEstVisible = false;
		menuAdmin.style.display = "none";
	}
	else {
		menuAdminEstVisible = true;
		menuAdmin.style.display = "block";
		// setTimeout(temp, 1000);
		fadeOut();
	}
}

function temp() {
	alert("test");
}





var duration = 3000; /* fade duration in millisecond */
var hidtime = 2000; /* time to stay hidden */
var showtime = 2000; /* time to stay visible */

function SetOpa(Opa) {
	menuAdmin.style.opacity = Opa;


	menuAdmin.style.MozOpacity = Opa;
	menuAdmin.style.KhtmlOpacity = Opa;
	menuAdmin.style.filter = 'alpha(opacity=' + (Opa * 100) + ');';
  }

  function fadeOut() {
	for (i = 0; i <= 1; i += 0.01) {
	  setTimeout("SetOpa(" + (1 - i) +")", i * duration);
	}
	//  setTimeout("fadeIn()", (duration + hidtime));
  }