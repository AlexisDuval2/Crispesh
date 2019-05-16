
window.onload = () => {
	ecouterLesBoutonsEnvoyer();
}

const ecouterLesBoutonsEnvoyer = () => {
	let message = "Vos modifications ont été enregistrées";
	let boutons = document.getElementsByClassName("bouton-envoyer");

	for (let i = 0; i < boutons.length; i++) {
		let bouton = boutons[i];
		bouton.onclick = function () { alert(message); }
	}
}
