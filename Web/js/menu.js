
//-----------------------------------------------
// constantes
//-----------------------------------------------

// bouton menu
const idBoutonMenu = "mobile-menu-button";
const couleurOff = "rgb(168, 225, 42)";
const couleurOn = "rgb(11, 191, 242)";
const largeurNormale = "150px";
const largeurCarre = "45px";

// animation
const idDivAnimation = "animation-mobile";
const hauteurLigne = "5px";
const couleurLigne = "white";

//-----------------------------------------------
// variables
//-----------------------------------------------
let on = false;
let boutonMenu = document.getElementById(idBoutonMenu);
let divAnimation = document.getElementById(idDivAnimation);

//-----------------------------------------------
// initialisation
//-----------------------------------------------
boutonMenu.style.backgroundColor = couleurOff;
boutonMenu.style.border = "none";
boutonMenu.onclick = function () { animerMenu(); }

let node = document.createElement("div");
node.style.height = hauteurLigne;
node.style.backgroundColor = couleurLigne;
divAnimation.appendChild(node);
divAnimation.style.display = "none";

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
	}
	else {
		on = false;
		boutonMenu.style.backgroundColor = couleurOff;
		boutonMenu.style.width = largeurNormale;
		boutonMenu.style.backgroundSize = largeurNormale;
		divAnimation.style.display = "none";
	}
}
