async function sendMail() {
    const mail = document.getElementById("email").value;
    const csrf = document.getElementById("csrf").value;

    try {
        const response = await fetch('https://todo.bulatik.website/api/v1/sendMail', {
            method: "POST",
            headers: {
                'Content-Type': 'application/json',
                'CSRF': csrf
            },
            body: JSON.stringify({
                mail: mail
            })
        });
    }
}