
let menuAdminEstVisible = false;
let timerInterval = null;

let bouton = document.getElementById("bouton-menu-admin");
bouton.onclick = function () { menuAdmin(); }

//-----------------------------------------------
// méthode pour afficher/masquer le menu admin
//-----------------------------------------------
const menuAdmin = () => {

	let menuAdmin = document.getElementById("menu-admin");

	if (menuAdminEstVisible) {
		menuAdminEstVisible = false;
		menuAdmin.style.display = "none";
	}
	else {
		menuAdminEstVisible = true;
		menuAdmin.style.display = "block";
		setTimeout(temp, 1000);
	}
}

function temp() {
	alert("test");
}
