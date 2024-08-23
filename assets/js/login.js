document.getElementById("loginForm").addEventListener("submit", (event) => {
    event.preventDefault();
    const loginErrorMsg = document.getElementById("loginErrorMsg");
  
    const email = document.getElementById("email").value;
    const password = document.getElementById("password").value;
  
    fetch("/actions/login.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify({ email, password }),
    })
      .then(response => {
          if (!response.ok) {
              return response.json().then(error => {
                  throw new Error(error.message)
              })
          }
          return window.location.href = "/pages/dashboard";
      })
      .catch((error) => loginErrorMsg.textContent = error.message);
  });
  