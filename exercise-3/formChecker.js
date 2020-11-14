window.addEventListener("DOMContentLoaded", () => {
	let form = document.getElementById("store");
	form.addEventListener("submit", e => {
		if (!form.checkValidity()) {
			e.preventDefault();
			e.stopPropagation();
			for (let control of document.getElementsByClassName("needs-validation")) {
				console.log(control);
				control.classList.toggle("is-invalid", !control.checkValidity());
				control.classList.toggle("is-valid", control.checkValidity());
			}
		}
	});
});