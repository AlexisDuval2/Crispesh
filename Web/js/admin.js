
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
		setInterval(animationMenuClic, 5);
	}
}

let X_INIT = 11;
let VITESSE_X_INIT = 10;
let ACCELERATION_X_INIT = -0.15;
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

const animationMenuClic = () => {

	let boutonLecture = document.getElementById("bouton-mode-lecture");
	let htmlboutonLectureA = "<input name=\"mode\" value=\"Mode lecture\" type=\"submit\" style=\"right: ";
	let htmlboutonLectureB = "px;\">"

	let boutonEcriture = document.getElementById("bouton-mode-ecriture");
	let htmlboutonEcritureA = "<input name=\"mode\" value=\"Mode écriture\" type=\"submit\" style=\"right: ";
	let htmlBoutonEcritureB = "px;\">"

	if (!animationTerminee) {

		vitesseX += accelerationX;
		x += vitesseX;

		if (x <= X_FINAL) {
			x = X_FINAL;
			animationTerminee = true;
		}

		console.log(x);


		boutonLecture.innerHTML = htmlboutonLectureA + x + htmlboutonLectureB;
	}
}
