
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
		menuAdmin.style.opacity = "0";
		animer_1();
		// animer_2();
	}
}

let duree1 = 3000;
let duree2 = 3000;

function controlerTransparence(valeur) {
	menuAdmin.style.opacity = valeur;
}

function animer_1() {
	for (i = 0; i <= 1; i += 0.01) {
		setTimeout(controlerTransparence(i), i * duree1);
	}
}
function animer_2() {
	// for (i = 1; i >= 0; i -= 0.01) {
	// 	setTimeout("controlerTransparence(" + i + ")", i * duree2);
	// }
	controlerTransparence(0.5);
}


const animerAllierQuiRentre = () => {

	let temp = document.querySelector(".container");

	if (delaiPrEntreeDUnAllie == 0) {
		temp.style.backgroundColor = "black";
	} else {
		if (delaiPrEntreeDUnAllie % 2 == 0) {
			temp.style.backgroundColor = "rgb(255, 210, 25)";
		}
		else {
			temp.style.backgroundColor = "rgb(130, 186, 238)";
		}
		delaiPrEntreeDUnAllie--;
	}
}
