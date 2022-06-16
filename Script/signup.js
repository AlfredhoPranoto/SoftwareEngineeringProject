function visibleCheck() {
    var check = document.getElementById("passwordInput");
    if (check.type === "password") {
      check.type = "text";
    } else {
      check.type = "password";
    }
  }