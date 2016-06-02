<!DOCTYPE HMTL>
<html lang = "ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Psychology site</title>
    <link rel="stylesheet" href="../libraries/css/bootstrap.css">
    <link rel="stylesheet" href="../css/custom.css">
    <script rel = "text/javascript" src = "../libraries/js/jquery-2.2.4.js"></script>
    <script rel="text/javascript" src="../libraries/js/bootstrap.js"></script>
    <script rel = "text/javascript" src = "../js/ajax.js"></script>
    <script src="https://fb.me/react-15.1.0.js"></script>
    <script src="https://fb.me/react-dom-15.1.0.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/babel-core/5.8.23/browser.min.js"></script>
    <script rel = "text/javascript" src = "../js/main.js"></script>
    <script rel = "text/javascript" src = "../js/ajax.js"></script>
</head>

<body>
    
    <div id="content">
    
    </div>
    
    <script type="text/babel">
       
       var ARTICLES = [
           {
            id: 0,
            title: "title0",
            text: "text0"
        },
         {
            id: 1,
            title: "title1",
            text: "text1"
        },
         {
            id: 2,
            title: "title2",
            text: "text2"
        }
       ];
       
        var Article = React.createClass({
            render: function()
            {
                return (<li> {this.props.title} </li>);
            }
        });
        
        var ArticleList = React.createClass({
            render: function(){
                return (
                    <div>
                        <ul>
                           {
                                ARTICLES.map(function(el){
                                    return <li> {el.title} </li>;
                                    


                                })
                            }
                        </ul>
                    </div>
                )
            }
        });
        
        ReactDOM.render(
            <ArticleList />,
            document.getElementById("content")
        );
    
    
    
    </script>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
</body>
</html>