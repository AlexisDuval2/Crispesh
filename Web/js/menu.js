
//-----------------------------------------------
// constantes
//-----------------------------------------------
const idBoutonMenu = "mobile-menu-button";
const idDivAnimation = "animation-mobile";
const couleurOff = "rgb(168, 225, 42)";
const couleurOn = "rgb(11, 191, 242)";
const largeurNormale = "150px";
const largeurCarre = "45px";

//-----------------------------------------------
// variables
//-----------------------------------------------
let on = false;
let boutonMenu = document.getElementById(idBoutonMenu);
let divAnimation = document.getElementById(idDivAnimation);

boutonMenu.style.backgroundColor = couleurOff;
boutonMenu.style.border = "none";

boutonMenu.onclick = function () { animerMenu(); }

//-----------------------------------------------
// méthode pour animer le menu mobile
//-----------------------------------------------
const animerMenu = () => {

	if (!on) {
		on = true;
		boutonMenu.style.backgroundColor = couleurOn;
		boutonMenu.style.width = largeurCarre;
		boutonMenu.style.backgroundSize = "0";
		divAnimation.style.display = "block";
		divAnimation.style.height = "5px";
		divAnimation.style.backgroundColor = "white";
	}
	else {
		on = false;
		boutonMenu.style.backgroundColor = couleurOff;
		boutonMenu.style.width = largeurNormale;
		boutonMenu.style.backgroundSize = largeurNormale;
		divAnimation.style.display = "none";
	}
}
