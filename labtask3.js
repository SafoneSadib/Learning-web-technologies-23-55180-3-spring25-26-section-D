function validateFrom() {
    let name= document.getElementById("name").value;
    let email= document.getElementById("email").value;
    let gender= document.getElementById("gender");
    let degree= document.getElementById("degree");

    let day= document.getElementById("day").value;
    let month= document.getElementById("month").value;
let year= document.getElementById("year").value;

//name
if(name==""){
    alert("plz fill name");
    return false;
    }

    //email
    if(email==""){
        alert("plz fill email");
        return false;
    }
    
    
    ///////////////////////////////gender


    //DOB
    if(day=="" || month=="" || year==""){
        alert("plz fill DOB");
        return false;
    }

    alert("successfully submit");
    return true;



}
    