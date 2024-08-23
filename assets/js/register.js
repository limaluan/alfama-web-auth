document.getElementById("registerForm").addEventListener("submit", (event) => {
  event.preventDefault();
  const nameErrorMsg = document.getElementById("nameErrorMsg");
  const passErrorMsg = document.getElementById("passErrorMsg");
  const emailErrorMsg = document.getElementById("emailErrorMsg");

  const name = document.getElementById("name").value;
  const email = document.getElementById("email").value;
  const password = document.getElementById("password").value;

  emailErrorMsg.textContent = "";
  
  if (password.length < 8) {
    return (passErrorMsg.textContent = "Inserir mais de 8 caracteres");
  } else {
    passErrorMsg.textContent = "";
  }

  if (name.length < 4) {
    return (nameErrorMsg.textContent = "Inserir pelo menos 4 caracteres");
  } else {
    nameErrorMsg.textContent = "";
  }

  fetch("/actions/register.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
    },
    body: JSON.stringify({ name, email, password }),
  })
    .then(response => {
        if (!response.ok) {
            return response.json().then(error => {
                throw new Error(error.message)
            })
        }
        return window.location.href = "/?page=login";
    })
    .catch((error) => emailErrorMsg.textContent = error.message);
});