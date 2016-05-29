//Успешная отправка сообщения на электронную почту
function mailtoSuccess()
{
    //ОТПРАВКА ФОРМЫ
    $.ajax({
        type: "POST",
        url: "models/custom_mailto.php",
        data: $('form').serialize(),
        success: function(msg){
            console.log(msg);
        },
        error: function(){
            console.log("failure");
        }
    });
    
    
    
    
    /* var Request_mailto = new XMLHttpRequest();
    Request_mailto.onreadystatechange = function()
    {
        if (Request_mailto.readyState == 4 && Request_mailto.status == 200)
        {
            console.log("Hello, World!");
        }
    };
    
    
    Request_mailto.open("POST", "models/custom_mailto.php", true);
    Request_mailto.send("name_index=name");
    */
    var Request = new XMLHttpRequest();
    Request.onreadystatechange = function()
    {
        if (Request.readyState == 4 && Request.status == 200)
        {
            document.getElementById("mailto").innerHTML = Request.responseText;
        }
    };
    
    mailto_index();
    
    Request.open("POST", "veiws/ajax_mailto_success.php", true);
    Request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    Request.send();
    
    //вызов файла с функцией отправки сообщения на электронную почту
    
   
    
    
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