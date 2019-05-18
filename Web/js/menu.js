
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
let y = 0;
let bougeVersLeBas = true;
let compteur = 0;

//-----------------------------------------------
// initialisation
//-----------------------------------------------
boutonMenu.style.backgroundColor = couleurOff;
boutonMenu.style.border = "none";
boutonMenu.onclick = function () { animerMenu(); }

let node1 = document.createElement("div");
let node2 = document.createElement("div");
let node3 = document.createElement("div");
let lignes = [node1, node2, node3];

for (let i = 0; i < lignes.length; i++) {
	let ligne = lignes[i];

	ligne.style.height = hauteurLigne;
	ligne.style.backgroundColor = couleurLigne;
	ligne.style.marginBottom = hauteurLigne;
	divAnimation.appendChild(ligne);
}

divAnimation.style.display = "none";

//-----------------------------------------------
// fonction pour animer le menu mobile
//-----------------------------------------------
const animerMenu = () => {

	if (!on) {
		on = true;
		boutonMenu.style.backgroundColor = couleurOn;
		boutonMenu.style.width = largeurCarre;
		boutonMenu.style.backgroundSize = "0";
		divAnimation.style.display = "block";
		y = 0;
		compteur = 0;
		setInterval(animerLesLignes, 15);
	}
	else {
		on = false;
		boutonMenu.style.backgroundColor = couleurOff;
		boutonMenu.style.width = largeurNormale;
		boutonMenu.style.backgroundSize = largeurNormale;
		divAnimation.style.display = "none";
	}
}

//-----------------------------------------------
// fonction pour animer le menu mobile
//-----------------------------------------------
const animerLesLignes = () => {

	if (y == 0 && compteur == 5) {
		y = 0;
	}
	else {
		if (bougeVersLeBas) {
			if (y <= 15) {
				y += 4;
			}
			else {
				bougeVersLeBas = false;
				compteur++;
			}
		}
		else {
			if (y >= -15) {
				y -= 4;
			}
			else {
				bougeVersLeBas = true;
				compteur++;
			}
		}
	}

	divAnimation.style.marginTop = y + "px";
}
