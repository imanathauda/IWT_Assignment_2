function checkPassword()
{
    var pw1 = document.getElementById("pw1").value;
    var pw2 = document.getElementById("pw2").value;


    if(pw1 != pw2)
    {
        alert("Miss match password");
    }
    else
    {
        alert("Sucess !! ");
        
    }
}

function accpetTerms(){

    var checkBox = document.getElementById("checkbox");

    var sub = document.getElementById("submitbtn");

    if(checkBox.checked)
    {
        sub.disabled = false;
    }
    else
    {
        sub.disabled = true;
    }

}