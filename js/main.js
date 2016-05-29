$(document).ready(function()
                 {
                    $('[data-toggle="tooltip"]').tooltip();
});

var global_name = "";
function mailto_index(name)
{
    
    global_name = name;
    console.log(global_name);
}
