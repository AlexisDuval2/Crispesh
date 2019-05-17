
window.onload = () => {
	ecouterLesBoutonsModifier();
}

//-----------------------------------------------
// fonction pour confirmer les modifications (admin)
//-----------------------------------------------
const ecouterLesBoutonsModifier = () => {
	let message = "Vos modifications ont été enregistrées";
	let boutons = document.getElementsByClassName("bouton-modifier");

	for (let i = 0; i < boutons.length; i++) {
		let bouton = boutons[i];
		bouton.onclick = function () { alert(message); }
	}
}
