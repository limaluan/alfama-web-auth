// Updates user informations
document.getElementById("updateForm").addEventListener("submit", (event) => {
    event.preventDefault();
    
    const name = document.getElementById("full_name").value;
    const email = document.getElementById("email").value;
    const phone = document.getElementById("phone").value;
    const cpf = document.getElementById("cpf").value;
    const company = document.getElementById("company").value;
    const address = document.getElementById("address").value;
  
    fetch("/actions/update_user.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify({ name, email, phone, cpf, company, address }),
    })
      .then(response => {
          if (!response.ok) {
              return response.json().then(error => {
                  throw new Error(error.message)
              })
          }
      })
      .catch((error) => console.log(error));
});
  
function handleLogout() {
  fetch("/actions/logout.php").then(() => window.location.href = "/index.php");
}
