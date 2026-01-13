function validateForm()
{
    var name = document.getElementById("name") .value;
    var phone= document.getElementById("phone") .value;
    var nid = document.getElementById("nid") .value;
    var age = document.getElementById("age") .value;

    if (name.trim() == "")
    {
        alert("Name required!");
        return false;
    }
    if (phone.length != 11)

        {
            alert("Phone must be 11 digit");
            return false;
        }
    if (nid.length !=10)
    {
        alert("Nid must be 10 digit");
        return false;
    }
    if (age <18 || age >60)
    {
        alert("Age must be between 18-60!");
        return false;
    }
    return true;
}