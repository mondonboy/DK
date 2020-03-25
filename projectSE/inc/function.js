function checkLogin() {
    var userElem = document.getElementById("username");
    var pwdElem = document.getElementById("password");
    if(userElem.value===""&& pwdElem.value===""){
        alert("Please enter your Username and Password");
        userElem.focus();
        pwdElem.focus();
        return false;
    }
    else if (userElem.value==="") {
        alert("Please enter your Username");
        userElem.focus();
        return false;
    }
    else if (pwdElem.value==="") {
        alert("Please enter your Password");
        pwdElem.focus();
        return false;
    }
    return true;
}