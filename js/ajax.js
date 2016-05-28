function loadDoc()
{
    var Request = new XMLHttpRequest();
    Request.onreadystatechange = function()
    {
        if (Request.readyState == 4 && Request.status == 200)
        {
            document.getElementById("mailto").innerHTML = Request.responseText;
        }
    };
    
    Request.open("POST", "ajax_mailto_success.php", true);
    Request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    Request.send();
    
    
    
}