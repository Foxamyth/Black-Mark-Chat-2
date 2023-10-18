function ShowPassword() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
    document.getElementById("eye").className = "fas fa-eye";
  } else {
    x.type = "password";
    document.getElementById("eye").className = "fas fa-eye-slash";
  }
}