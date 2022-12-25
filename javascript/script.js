//valido
var Email = document.getElementById('em').value;
var Password = document.getElementById('pw').value;

function valido(){
    var Email = document.getElementById('em').value;
    var Password = document.getElementById('pw').value;
    if(Email == "" && Password == ""){
        alert("Ploteso fushat: Username dhe Password");
    } else if(Email == ""){
        alert("Fusha e Email nuk duhet te jete e zbrazte");
    } else if(Password == ""){
        alert("Fusha e Password nuk duhet te jete e zbrazte");
    }
}