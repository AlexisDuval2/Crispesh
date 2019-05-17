
//-----------------------------------------------
// constantes
//-----------------------------------------------
const idBoutonMenu = "mobile-menu-button";
const couleurOff = "rgb(168, 225, 42)";
const couleurOn = "rgb(11, 191, 242)";

//-----------------------------------------------
// variables
//-----------------------------------------------
let on = false;
let boutonMenu = document.getElementById(idBoutonMenu);

boutonMenu.style.backgroundColor = couleurOff;
boutonMenu.style.border = "none";

boutonMenu.onclick = function () { animerMenu(); }

//-----------------------------------------------
// méthode pour animer le menu mobile
//-----------------------------------------------
const animerMenu = () => {

	if (!on) {
		boutonMenu.style.backgroundColor = couleurOn;

		on = true;
	}
	else {
		boutonMenu.style.backgroundColor = couleurOff;

		on = false;
	}
}
