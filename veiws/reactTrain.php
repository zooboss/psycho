<!DOCTYPE HMTL>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Psychology site</title>
    <link rel="stylesheet" href="../libraries/css/bootstrap.css">
    <link rel="stylesheet" href="../css/custom.css">
    <script rel="text/javascript" src="../libraries/js/jquery-2.2.4.js"></script>
    <script rel="text/javascript" src="../libraries/js/bootstrap.js"></script>
    <script rel="text/javascript" src="../js/ajax.js"></script>
    <script src="https://fb.me/react-15.1.0.js"></script>
    <script src="https://fb.me/react-dom-15.1.0.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/babel-core/5.8.23/browser.min.js"></script>
    <script rel="text/javascript" src="../js/main.js"></script>
    <script rel="text/javascript" src="../js/ajax.js"></script>
</head>

<body>

<div id="content">

</div>
<!-- Search utility on reactJS -->
<!--
<script type="text/babel">

    var ARTICLES = [
        {
            id: 0,
            title: "title0",
            text: "text0"
        }, {
            id: 2,
            title: "title2",
            text: "text2"
        },
        {
            id: 1,
            title: "title1",
            text: "text1"
        }
    ];


    var Article = React.createClass({
        render: function () {
            return (<li>
                <div>{this.props.title}</div>
                <div>{this.props.text}</div>
            </li>);
        }
    });

    var ArticleList = React.createClass({
        getInitialState: function () {
            return {
                displayedArticles: ARTICLES
            };
        },

        handleSearch: function (event) {
            console.log(event.target.value);
            var searchQuery = event.target.value.toLowerCase();
            var displayedArticles = ARTICLES.filter(function (el) {
                var searchValue = el.text.toLowerCase();
                return searchValue.indexOf(searchQuery) !== -1;
            });
            console.log(displayedArticles);
            this.setState({
                displayedArticles: displayedArticles
            });
        },

        render: function () {
            return (
                    <div>
                        <input type="text" onChange={this.handleSearch}/>
                        <ul>
                            {
                                this.state.displayedArticles.map(function (el) {
                                    return <Article
                                            key={el.id}
                                            title={el.title}
                                            text={el.text}/>;


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
-->

<!-- Another train with reactJS -->
<script type="text/babel">
//Массив объектов новостей
    var my_news = [
        {
            author: 'Саша Печкин',
            text: 'В четчерг, четвертого числа...',
            bigText: 'в четыре с четвертью часа четыре чёрненьких чумазеньких чертёнка чертили чёрными чернилами чертёж.'
        },
        {
            author: 'Просто Вася',
            text: 'Считаю, что $ должен стоить 35 рублей!',
            bigText: 'А евро 42!'
        },
        {
            author: 'Гость',
            text: 'Бесплатно. Скачать. Лучший сайт - http://localhost:3000',
            bigText: 'На самом деле платно, просто нужно прочитать очень длинное лицензионное соглашение'
        }
    ];
//компонент отдельной новости
    var Article = React.createClass({
        //по дефолту bigText невидим, а ссылка "подробнее" видима
        getInitialState: function(){
            return {
                visible: false
            }
        },

        //Функция-обработчик клика: смена состояния visible
        readmoreClick: function(e){
            e.preventDefault();
            console.log(e);
            this.setState({visible: true});
        },

        //HTML структура вывода компонента
        render: function(){
            var visible = this.state.visible;
            console.log( 'render', this );
            return(
                    <div className="article">
                       <p className="news__author"> { this.props.data.author }: </p>
                       <p className="news__text"> { this.props.data.text } </p>
                       <a href='#'
                          onClick={ this.readmoreClick }
                          className={ "news_readmore " + ((visible === false) ? "" : "none" ) }>
                            Подробнее
                       </a>
                       <p className={ "news__text " + ((visible !== false) ? "" : "none" ) }> { this.props.data.bigText } </p>
                    </div>
            )
        }
    });

//Класс ренреда новостей
    var News = React.createClass({
        //Количество кликов по блоку новости Counter
        getInitialState: function(){
            return {
                counter: 0
            }
        },
        //автоинкремент счетчика кликов по вызову обработчика
        counterClick: function(event){
            event.preventDefault();
            this.setState({counter: ++this.state.counter});
        },

        render: function(){
            //принимает значение массива новостей
            var data = this.props.data;
            //новый массив с html структурой элементов массива data
            var newsTemplate = [];
            if ( data.length > 0 ) {
                    newsTemplate = data.map(function (item, index) {
                    return (
                            <div key={ index } >
                                {/* преобразует массив с помощью Article */}
                                <Article data={ item } />
                            </div>
                    );
                });
            }
            else {
                    newsTemplate = <p> no news :( </p>;
            }
            console.log(newsTemplate);

            return(
                    <div className="news" onClick={ this.counterClick }>
                        { newsTemplate }
                        <h1 className={ data.length > 0 ? '' : "none" } > Число новостей: { data.length } </h1>
                        <h1 className={ data.length > 0 ? '' : "none" } > Число кликов: { this.state.counter } </h1>
                    </div>
            );
        }
    });

//Тестовый инпут
    var TestInput = React.createClass({
        //Базовое значение инпута - пустая строка
        getInitialState: function(){
            return{
                MyValue: ''
            }
        },
        //Обработчик ввода в инпут
        changeHandler: function(e){
            //Присваиевает свойству состояния значение, введенное в инпут
            this.setState({
                MyValue: e.target.value
            });

        },
        //Рендер инпута с событием onChange -> вызов обработчика
        render: function(){
           return(
                   <input className="test-input"
                          value={ this.state.MyValue }
                          onChange={ this.changeHandler }
                          placeholder="введите ваше сообщение"
                   />
           );
       }
    });

//Класс вывода всех элементов (с передачей значений свойств
    var App = React.createClass({
      render: function () {
          return(
                  <div className="app">
                      NEWS! <br />
                      <TestInput />
                      <News data={ my_news } /> {/*added data prop */}

                  </div>
          );
      }
    });
//Рендер класса вывода App
    ReactDOM.render(
            <App />,
            document.getElementById('content')
    );


</script>



</body>
</html>