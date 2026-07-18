/**
 * Single source of truth for site-wide contact info.
 * Change values here — every page picks them up automatically via site-nav.js.
 */
window.RD_CONTACT = {
	whatsappNumber: "8801733162490", // digits only, country code first (no +, spaces or dashes)
	whatsappMessage: "Hi! I'd like to know more about RealDeal IT Center's services.",
	phoneDisplay: "01733162490",
	phoneHref: "+8801733162490",
	email: "contactrealdealteam@gmail.com",
	facebook: "https://www.facebook.com/realdealitcenter",
	instagram: "https://www.instagram.com/"
};

// Back-compat for the floating button code already reading these globals.
window.RD_WHATSAPP_NUMBER = window.RD_CONTACT.whatsappNumber;
window.RD_WHATSAPP_MESSAGE = window.RD_CONTACT.whatsappMessage;
