
//-----------------------------------------------
// variables pour le menuAdmin
//-----------------------------------------------
let menuAdminEstVisible = false;

let menuAdmin = document.getElementById("menu-admin");

let boutonMenuAdmin = document.getElementById("bouton-menu-admin");
boutonMenuAdmin.onclick = function () { controlerMenuAdmin(); }

//-----------------------------------------------
// fonction pour afficher/masquer le menu admin
//-----------------------------------------------
const controlerMenuAdmin = () => {

	if (menuAdminEstVisible) {
		menuAdminEstVisible = false;
		menuAdmin.style.display = "none";
		menuAdmin.style.display = "none";
	}
	else {
		menuAdminEstVisible = true;
		menuAdmin.style.display = "block";
		menuAdmin.style.opacity = "1";
		reinitialiserAnimation();
		setInterval(animerLesBoutons, 5);
	}
}

//-----------------------------------------------
// constantes pour bouger gauche/droite
//-----------------------------------------------
const X_INIT = 11;
const VITESSE_X_INIT = 15;
const ACCELERATION_X_INIT = -0.4;
const X_FINAL = 10;

//-----------------------------------------------
// variables pour bouger gauche/droite
//-----------------------------------------------
let x = X_INIT;
let vitesseX = VITESSE_X_INIT;
let accelerationX = ACCELERATION_X_INIT;
let animationTerminee = false;

//-----------------------------------------------
// fonction pour réinitialiser l'animation
//-----------------------------------------------
const reinitialiserAnimation = () => {
	x = X_INIT;
	vitesseX = VITESSE_X_INIT;
	accelerationX = ACCELERATION_X_INIT;
	animationTerminee = false;
}

//-----------------------------------------------
// fonction pour animer les boutons
//-----------------------------------------------
const animerLesBoutons = () => {
	animationLecture();
	animationEcriture();
}

//-----------------------------------------------
// fonction pour animer le bouton "mode lecture"
//-----------------------------------------------
const animationLecture = () => {

	let idBoutonLecture = "bouton-mode-lecture";
	let idInputLecture = "input-mode-lecture";
	let modeLecture = "Mode lecture";

	bougerGaucheDroite(idBoutonLecture, idInputLecture, modeLecture);
}

//-----------------------------------------------
// fonction pour animer le bouton "mode écriture"
//-----------------------------------------------
const animationEcriture = () => {

	let idBoutonEcriture = "bouton-mode-ecriture";
	let idInputEcriture = "input-mode-ecriture";
	let modeEcriture = "Mode écriture";

	bougerGaucheDroite(idBoutonEcriture, idInputEcriture, modeEcriture);
}

//-----------------------------------------------
// fonction pour faire l'animation
//-----------------------------------------------
const bougerGaucheDroite = (idBouton, idInput, mode) => {

	let bouton = document.getElementById(idBouton);
	let htmlboutonA = "<input id=\"" + idInput + "\" name=\"mode\" value=\"" + mode + "\" type=\"submit\" style=\"right: ";
	let htmlboutonB = "px;\">"

	if (!animationTerminee) {

		vitesseX += accelerationX;
		x += vitesseX;

		if (x <= X_FINAL) {
			x = X_FINAL;
			animationTerminee = true;
		}

		bouton.innerHTML = htmlboutonA + x + htmlboutonB;
	}
}
