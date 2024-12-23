$(document).ready(function () {
    $("#sendToWhatsapp").click(function () {
        let number = "+917521878485"; // Corrected the phone number format

        // Fetching input values
        let name = $('#name').val();
        let email = $('#email').val();
        let message = $('#message').val();
        // console.log(name, email, message);

        // Validating inputs
        if (!name || !email || !message) {
            alert("Please fill out all fields before submitting.");
            return;
        }

        // Encoding text for the URL
        let encodedName = encodeURIComponent(name);
        let encodedEmail = encodeURIComponent(email);
        let encodedMessage = encodeURIComponent(message);

        // Constructing the WhatsApp URL
        let url = `https://wa.me/${number}?text=Name: ${encodedName}%0aEmail: ${encodedEmail}%0aMessage: ${encodedMessage}`;

        // Opening the URL in a new tab
        window.open(url, '_blank').focus();
    });
});