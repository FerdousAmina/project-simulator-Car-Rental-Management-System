function handleSubmit(){
    var username = document.getElementById("username").value.trim();
    var password = document.getElementById("password").value.trim();
    
    var errorDiv = document.getElementById("error");
    var outputDiv = document.getElementById("output");

    errorDiv.innerHTML = "";
    outputDiv.innerHTML = "";

    if(username === "" || password === ""){
        errorDiv.innerHTML = "Please fill in all fields.";
        return false;
    } 
    return true;
}  