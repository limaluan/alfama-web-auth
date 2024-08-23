window.onload = function () {
    if (typeof google !== 'undefined') {
      google.accounts.id.initialize({
        client_id: '462792711861-dsvrds26k47ah4t0ohi9f78hpsedf846.apps.googleusercontent.com',
        callback: handleCredentialResponse,
        auto_select: false
      });
  
      document.getElementById('googleButton').addEventListener('click', function() {
        google.accounts.id.prompt();
      });
    } else {
      console.error('Google API script not loaded.');
    }
  }
  
  function handleCredentialResponse(response) {
    const responsePayload = JSON.parse(atob(response.credential.split('.')[1]));
  
    const name = responsePayload.name;
    const email = responsePayload.email;
    const password = responsePayload.sub;
    const picture = responsePayload.picture;
  
    fetch("/actions/login_google.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify({ name, email, password, picture }),
    })
      .then(response => {
          if (!response.ok) {
              return response.json().then(error => {
                  throw new Error(error.message)
              })
          }
          return window.location.href = "/pages/dashboard";
      })
      .catch((error) => emailErrorMsg.textContent = error.message);
  }