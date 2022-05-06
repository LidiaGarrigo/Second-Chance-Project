/* ------------------- Modal Contacto ------------------- */

const modalContacto = () => {
	document.getElementById("modalContacto").style.display="block";
	document.documentElement.style.overflow="hidden";
}

const cerrarModalC = () => {
	document.getElementById("modalContacto").style.display="none";
	document.documentElement.style.overflowY="auto";

	document.getElementById("nombre").value ="";
	document.getElementById("telefono").value ="";
	document.getElementById("email").value ="";
	document.getElementById("mensaje").value ="";

}
/* ------------------- Final Modal Contacto ------------------- */