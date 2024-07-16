document.addEventListener("DOMContentLoaded", function () {
	const createCookieDialog = () => {
		const dialog = document.createElement("dialog");
		dialog.classList.add("cookie-dialog");
		dialog.id = "cookieDialog";

		const textCookie = document.createElement("p");
		textCookie.textContent =
			"Nous utilisons des cookies pour vous garantir la meilleure expérience sur notre site.";

		const acceptCookies = document.createElement("button");
		acceptCookies.textContent = "Accepter";
		acceptCookies.id = "acceptCookies";

		const rejectCookies = document.createElement("button");
		rejectCookies.textContent = "Refuser";
		rejectCookies.id = "rejectCookies";
		rejectCookies.classList.add("reject-cookies");

		dialog.appendChild(textCookie);
		dialog.appendChild(acceptCookies);
		dialog.appendChild(rejectCookies);

		document.body.appendChild(dialog);

		return dialog;
	};

	const initializeAnalytics = () => {
		const scriptGoogleAnalytics = document.createElement("script");
		scriptGoogleAnalytics.async = true;
		scriptGoogleAnalytics.src =
			"https://www.googletagmanager.com/gtag/js?id=G-4BFC7QM9CD";
		document.head.appendChild(scriptGoogleAnalytics);

		scriptGoogleAnalytics.onload = function () {
			window.dataLayer = window.dataLayer || [];
			function gtag() {
				dataLayer.push(arguments);
			}
			gtag("js", new Date());
			gtag("config", "G-4BFC7QM9CD");
		};
	};

	const cookieConsent = localStorage.getItem("cookieConsent");

	const dialog = createCookieDialog();

	if (cookieConsent === "accepted") {
		initializeAnalytics();
		dialog.close();
	} else if (cookieConsent === "rejected") {
		dialog.close();
	} else {
		dialog.showModal();
	}

	document
		.getElementById("acceptCookies")
		.addEventListener("click", function () {
			localStorage.setItem("cookieConsent", "accepted");
			dialog.close();
			initializeAnalytics();
		});

	document
		.getElementById("rejectCookies")
		.addEventListener("click", function () {
			localStorage.setItem("cookieConsent", "rejected");
			dialog.close();
		});
});
