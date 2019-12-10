// Implementierung von validate und startValidation
function startValidation(){
    var form = document.getElementById("registFormular");
    var user = form.user.value;
    var password =  form.pass.value;
    var passwordConf =  form.passConfirm.value;

    var message = document.getElementById("message");
    var error = "";
    
    if(!validate(user, password, passwordConf)){

        if(user == "" || password == "" || passwordConf == ""){
            error += "Es wurden nicht alle Felder ausgefüllt<br>";
        }
        else{
            if(user.length < 8){
                error += "Username muss mindestens 8 Zeichen besitzen<br>";        
            }
            if(password.length < 8){
                error += "Passwort muss mindestens 8 Zeichen besitzen<br>";        
            }
            if(password != passwordConf){
                error += "Passwörter stimmen nicht überein";        
            }
            message.innerHTML = error; //error Message einfügen
        }
    }
    else{
        document.regist.submit().preventDefault();

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            message.innerHTML = this.responseText;
          }
        };
        xmlhttp.open("POST", "tryRegist.php", true);
        xmlhttp.send();
    }
}

function validate(user, password, passwordConf){
    if(user == "" || password == "" || passwordConf == ""){
        return false;
    }
    if(user.length >= 8 && password.length >= 8 && password == passwordConf){
        return true;
    }
    return false;
}

export {validate};
export {startValidation};