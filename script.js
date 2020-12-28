function validate()
{
    var email = document.getElementsByName("email").value;
    var pass = document.getElementsByName("pass").value;
    
    if (email == "" || email == null){alert("Enter Email address"); document.getElementById("email").focus; return false;}
    else if (pass == "" || pass == null){alert("Enter Password address"); document.getElementById("pass").focus; return false;}
    else if (email.value.indexof("@",0)<0){alert("'@' Missing"); email.focus(); return false;}
    else if (email.value.indexof(".",0)<0){alert("Please a valid email address"); email.focus; return false;}
    else{return true;}
}

function checkemail(evt)
{
    var charcode = (evt.which) ? evt.which : event.keycode;
    if((charcode < 64 || charcode > 90) && (charcode < 97 || charcode > 122) && (charcode < 46 || charcode > 57))
    {
        alert("Only alphabets allowed")
        return false
    }
    else 
    {
        return true;
    }
}

function checkpas(evt)
{
    var charcode = (evt.which) ? evt.which : event.keycode;
    if((charcode < 48 || charcode > 57) && (charcode < 65 || charcode > 90) && (charcode < 97 || charcode > 122))
    {
        alert("Only alphabets allowed")
        return false
    }
    else 
    {
        return true;
    }
}