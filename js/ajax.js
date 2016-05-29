//Успешная отправка сообщения на электронную почту
function mailtoSuccess()
{
    //ОТПРАВКА ФОРМЫ
    $.ajax({
        type: "POST",
        url: "models/custom_mailto.php",
        data: $('form').serialize()+'&name_index' + '=' + global_name,
        success: function(msg){
            console.log(msg);
        },
        error: function(){
            console.log("failure");
        }
    });
    
        
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