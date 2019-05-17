
let menuAdminEstVisible = false;

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
		menuAdmin.style.display = "none";
	}
	else {
		menuAdminEstVisible = true;
		menuAdmin.style.display = "block";
		menuAdmin.style.opacity = "1";
		reinitialiserAnimation();
		setInterval(animationLecture, 5);
		setInterval(animationEcriture, 5);
	}
}

let X_INIT = 11;
let VITESSE_X_INIT = 15;
let ACCELERATION_X_INIT = -0.3;
let X_FINAL = 10;

let x = X_INIT;
let vitesseX = VITESSE_X_INIT;
let accelerationX = ACCELERATION_X_INIT;
let animationTerminee = false;

const reinitialiserAnimation = () => {
	x = X_INIT;
	vitesseX = VITESSE_X_INIT;
	accelerationX = ACCELERATION_X_INIT;
	animationTerminee = false;
}

const animationLecture = () => {

	let idBoutonLecture = "bouton-mode-lecture";
	let modeLecture = "Mode lecture";

	bougerGaucheDroite(idBoutonLecture, modeLecture);
}

const animationEcriture = () => {

	let idBoutonEcriture = "bouton-mode-ecriture";
	let modeEcriture = "Mode écriture";

	bougerGaucheDroite(idBoutonEcriture, modeEcriture);
}

const bougerGaucheDroite = (id, mode) => {

	let bouton = document.getElementById(id);
	let htmlboutonA = "<input name=\"mode\" value=\"" + mode + "\" type=\"submit\" style=\"right: ";
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
