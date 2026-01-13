function handleSubmit(){
    var fullname = document.getElementById("fullname").value.trim();
    var username = document.getElementById("username").value.trim();
    var email = document.getElementById("email").value.trim();
    var password = document.getElementById("password").value.trim();
    var confirm_password = document.getElementById("confirm_password").value.trim();
    
    var errorDiv = document.getElementById("error");
    var outputDiv = document.getElementById("output");

    errorDiv.innerHTML = "";
    outputDiv.innerHTML = "";
}
    if(fullname === "" || username === "" || email === "" || password === "" || confirm_password === ""){
        errorDiv.innerHTML = "Please fill in all fields.";
        return false;
    }
    if(password !== confirm_password){
        errorDiv.innerHTML = "Passwords do not match!";
        return false;
    }  

    outputDiv.innerHTML = "Registration Successful!";

    return false;
   