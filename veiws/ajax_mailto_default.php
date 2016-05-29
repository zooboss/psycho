        <div class = "modal-dialog">
            <div class = "modal_content">
                <div class = "modal-header">
                    <button type = "button" class = "close" data-dismiss = "modal">&times;</button> 
                    <h4 class = "modal-title">отправить сообщение</h4>
                </div>
                <div class = "modal-body">
                    <form method = "post" action="">
                        <div class = "form-group">
                            <label for = "visitor_email"><span data-toggle = "tooltip" data-placement = "right" title = "Укажите вашу электронную почту">Электронная почта</span></label>
                            <input type = "email" class = "form-control" id = "visitor_email" name = "visitor_email" placeholder = "электронная почта" required>
                        </div>
                        <div class = "form-group">
                            <label for = "visitor_subject"><span data-toggle = "tooltip" data-placement = "right" title = "Укажите тему вашего сообщения">Тема сообщения</span></label>
                            <input type = "text" class = "form-control" id = "visitor_subject" name = "visitor_subject" placeholder = "тема сообщения" required>
                        </div>
                        <div class = "form-group">
                            <label for = "visitor_message"><span data-toggle = "tooltip" data-placement = "right" title = "Постарайтесь полно и подробно описать вашу проблему">Ваше сообщение</span></label>
                            <textarea rows = "10" class = "form-control" id = "visitor_message" name = "visitor_message" placeholder = "ваше сообщение" required></textarea>
                        </div>
                    </form>
                </div>
                <div class = "modal-footer">
                    <button type = "button" class = "btn btn-default" data-dismiss = "modal">Закрыть</button>
                    <button type = "button" class = "btn btn-success"  name = "submit" id = "submit" onclick="mailtoSuccess()">Отправить</button> 
                </div>
                    
            </div>
        </div>