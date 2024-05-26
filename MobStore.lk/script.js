const bar = document.getElementById("bar");
const close = document.getElementById("close");
const nav = document.getElementById("navbar");

if (bar) {
  bar.addEventListener("click", () => {
    nav.classList.add("active");
  });

  if (close) {
    close.addEventListener("click", () => {
      nav.classList.remove("active");
    });
  }
}

function changeView() {
  var signUpBox = document.getElementById("signUpBox");
  var signInBox = document.getElementById("signInBox");

  signUpBox.classList.toggle("d-none");
  signInBox.classList.toggle("d-none");
}

function signup() {
  var fname = document.getElementById("fname");
  var lname = document.getElementById("lname");
  var email = document.getElementById("email");
  var password = document.getElementById("password");
  var mobile = document.getElementById("mobile");
  var gender = document.getElementById("gender");

  var form = new FormData();
  form.append("f", fname.value);
  form.append("l", lname.value);
  form.append("e", email.value);
  form.append("p", password.value);
  form.append("m", mobile.value);
  form.append("g", gender.value);

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if ((request.status == 200) & (request.readyState == 4)) {
      var response = request.responseText;

      if (response == "success") {
        document.getElementById("msg").innerHTML = "Registration Successfull";
        document.getElementById("msg").className = "alert alert-success";
        document.getElementById("msgdiv").className = "d-block";
      } else {
        document.getElementById("msg").innerHTML = response;
        document.getElementById("msgdiv").className = "d-block";
      }
    }
  };

  request.open("POST", "signupProcess.php", true);
  request.send(form);
}

function showPassword() {
  var text = document.getElementById("password2");
  var button = document.getElementById("b");

  if (text.type == "password") {
    text.type = "text";
    button.innerHTML = "Hide";
  } else {
    text.type = "password";
    button.innerHTML = "Show";
  }
}

function signin() {
  var email = document.getElementById("email2");
  var password = document.getElementById("password2");
  var rememberme = document.getElementById("rememberme");

  var form = new FormData();
  form.append("e", email.value);
  form.append("p", password.value);
  form.append("r", rememberme.checked);

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if ((request.status == 200) & (request.readyState == 4)) {
      var response = request.responseText;

      if (response == "success") {
        window.location = "home.php";
      } else {
        document.getElementById("msg1").innerHTML = response;
        document.getElementById("msgdiv1").className = "d-block";
      }
    }
  };

  request.open("POST", "signInProcess.php", true);
  request.send(form);
}

var forgotPasswordModal;

function forgotPassword() {
  var email = document.getElementById("email2");

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if ((request.status == 200) & (request.readyState == 4)) {
      var text = request.responseText;

      if (text == "Success") {
        alert(
          "Verification code has sent successfully. Please check your Email."
        );
        var modal = document.getElementById("fpmodal");
        forgotPasswordModal = new bootstrap.Modal(modal);
        forgotPasswordModal.show();
      } else {
        document.getElementById("msg1").innerHTML = text;
        document.getElementById("msgdiv1").className = "d-block";
      }
    }
  };

  request.open("GET", "forgotPasswordProcess.php?e=" + email.value, true);
  request.send();
}

function showPassword1() {
  var textfield = document.getElementById("np");
  var button = document.getElementById("npb");

  if (textfield.type == "password") {
    textfield.type = "text";
    button.innerHTML = "Hide";
  } else {
    textfield.type = "password";
    button.innerHTML = "Show";
  }
}

function showPassword2() {
  var textfield = document.getElementById("rnp");
  var button = document.getElementById("rnpb");

  if (textfield.type == "password") {
    textfield.type = "text";
    button.innerHTML = "Hide";
  } else {
    textfield.type = "password";
    button.innerHTML = "Show";
  }
}

function resetPassword() {
  var email = document.getElementById("email2");
  var newPassword = document.getElementById("np");
  var retypePassword = document.getElementById("rnp");
  var verification = document.getElementById("vcode");

  var form = new FormData();
  form.append("e", email.value);
  form.append("n", newPassword.value);
  form.append("r", retypePassword.value);
  form.append("v", verification.value);

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if ((request.status == 200) & (request.readyState == 4)) {
      var response = request.responseText;
      if (response == "success") {
        alert("Password updated successfully.");
        forgotPasswordModal.hide();
      } else {
        alert(response);
      }
    }
  };

  request.open("POST", "resetPasswordProcess.php", true);
  request.send(form);
}

function closemodal() {
  var modal = document.getElementById("fpmodal");
  var close = document.getElementById("close");

  forgotPasswordModal = new bootstrap.Modal(modal);
  forgotPasswordModal.hide();
}

function signout() {
  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.status == 200 && request.readyState == 4) {
      var response = request.responseText;
      if (response == "success") {
        window.location.reload();
      }
    }
  };

  request.open("GET", "signOutProcess.php", true);
  request.send();
}

function adminSignIn() {
  var un = document.getElementById("un");
  var pw = document.getElementById("pw");

  var form = new FormData();

  form.append("u", un.value);
  form.append("p", pw.value);

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if ((request.readyState == 4) & (request.status == 200)) {
      var response = request.responseText;
      if (response == "Success") {
        document.getElementById("alert").innerHTML = "Login suucessfully";
        document.getElementById("alert").className = "alert alert-success";
        document.getElementById("alertdiv").className = "d-block";
        window.location = "adminDashboard.php";
      } else {
        document.getElementById("alert").innerHTML = response;
        document.getElementById("alertdiv").className = "d-block";
      }
    }
  };
  request.open("POST", "adminSigninProcess.php", true);
  request.send(form);
}

function updateUserStatus() {
  var userid = document.getElementById("uid");
  

  var f = new FormData();

  f.append("u", userid.value);

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if ((request.readyState == 4) & (request.status == 200)) {
      var response = request.responseText;
      //alert(response);

      if (response == "Deactived") {
        document.getElementById("msg").innerHTML = "User Deactivated.";
        document.getElementById("msg").className = "alert alert-success";
        document.getElementById("msgDiv").className = "d-block";

        userid.value = "";
        loadUser();
      } else if (response == "Actived") {
        document.getElementById("msg").innerHTML = "User Activated.";
        document.getElementById("msg").className = "alert alert-success";
        document.getElementById("msgDiv").className = "d-block";

        userid.value = "";
        loadUser();
      } else {
        //other response
        document.getElementById("msg").innerHTML = response;
        document.getElementById("msg").className = "alert alert-danger";
        document.getElementById("msgDiv").className = "d-block";

        userid.value = "";
        loadUser();
      }
    }
  };

  request.open("POST", "updateUserStatusProcess.php", true);
  request.send(f);
}

function loadUser() {
  var request = new XMLHttpRequest();
  request.onreadystatechange = function () {
    if ((request.readyState == 4) & (request.status == 200)) {
      var response = request.responseText;
      document.getElementById("tb").innerHTML = response;
    }
  };

  request.open("POST", "loadUserProcess.php", true);
  request.send();
}



function brandReg(){
var brand = document.getElementById("brand");
 alert(brand.value);

var form = new FormData();
form.append("b",brand.value);

var request = new XMLHttpRequest();
request.onreadystatechange = function(){
  if(request.readyState == 4 & request.status == 200){
    var response = request.responseText;
    
    if(response == "Success"){
      document.getElementById("alertmsg").innerHTML = "Brand Registerd";
      document.getElementById("alertmsg").className = "alert alert-success";
      document.getElementById("alertDiv").className = "d-block";
    }else{

      document.getElementById("alertmsg").innerHTML = response;
      document.getElementById("alertmsg").className = "alert alert-danger";
      document.getElementById("alertDiv").className = "d-block";

    }
  }
}
request.open("POST", "brandRegProcess.php",true);
request.send(form);
}

function modelReg(){
 var model =  document.getElementById("model");
 //alert(model.value);

 var form = new FormData();
 form.append("m", model.value);

 var request = new XMLHttpRequest();
 request.onreadystatechange = function(){
  if(request.readyState == 4 & request.status == 200){
    var response = request.responseText;

    if(response == "Registerd Successfully"){
      document.getElementById("msg").innerHTML  = "Model Registered";
      document.getElementById("msg").className  = "alert alert-success";
      document.getElementById("msgBox").className  = "d-block";
    }else{
      document.getElementById("msg").innerHTML  = response;
      document.getElementById("msg").className  = "alert alert-danger";
      document.getElementById("msgBox").className  = "d-block";
    }
   
  }
 }
 request.open("POST", "modelRegProcess.php", true);
 request.send(form);
}

function reload(){
  window.location.reload();
}

function colorreg(){
  var color = document.getElementById("color");
  //alert(color.value);

  var form = new FormData();
  form.append("c",color.value);

  var request = new XMLHttpRequest();
  request.onreadystatechange = function(){
    if(request.readyState == 4 & request.status == 200){
      var response = request.responseText;

      if(response == "Success"){
        document.getElementById("msg2").innerHTML = "Registered Successfully";
        document.getElementById("msg2").className = "alert alert-success";
        document.getElementById("msgBox2").className = "d-block";
      }else{
        document.getElementById("msg2").innerHTML = response;
        document.getElementById("msg2").className = "alert alert-danger";
        document.getElementById("msgBox2").className = "d-block";
      }
    
    }
  }

  request.open("POST", "colorRegProcess.php", true);
  request.send(form);
}
