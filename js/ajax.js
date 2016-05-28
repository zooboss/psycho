//Успешная отправка сообщения на электронную почту
function mailtoSuccess()
{
    var Request = new XMLHttpRequest();
    Request.onreadystatechange = function()
    {
        if (Request.readyState == 4 && Request.status == 200)
        {
            document.getElementById("mailto").innerHTML = Request.responseText;
        }
    };
    
    Request.open("POST", "veiws/ajax_mailto_success.php", true);
    Request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    Request.send();
}

//возврат дефолтного окна отправки сообщения на электронную почту после успешно отправленного сообщения
function mailtoDefault()
{
    var Request = new XMLHttpRequest();
    Request.onreadystatechange = function()
    {
        if (Request.readyState == 4 && Request.status == 200)
        {
            document.getElementById("mailto").innerHTML = Request.responseText;
        }
    };
    
    Request.open("POST", "veiws/ajax_mailto_default.php", true);
    Request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    Request.send();
}