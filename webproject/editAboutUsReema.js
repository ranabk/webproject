var x =
	"        Our clinic was founded in January 2021 in the Kingdom of Saudi Arabia, Since it was established, our staff have been providing unique veterinary medical services and compassionate animal care in Riyadh city.<br> Here at the Clinic, we treat every client as though they were family and each pet as if they were our own. <br> We try our best to provide complete high quality veterinary care with emphasis on exceptional client service and patient care. We belive that you and your pet should feel as comfortable as possible, that's why we offer a free in-home reservation service and manage appointmnets even before your first service begins.";

function reset() {
	document.getElementById("textarea").value = x;
}

const popup = document.getElementById("popup");
const overlay = document.getElementById("overlay");

function openPopUp() {
	popup.classList.add("active");
	overlay.classList.add("active");
}

function closePopUp() {
	popup.classList.remove("active");
	overlay.classList.remove("active");
}

overlay.addEventListener("click", () => {
	closePopUp();
});
