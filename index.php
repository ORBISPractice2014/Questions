<!DOCTYPE html>
<!-- saved from url=(0054)http://getbootstrap.com/examples/sticky-footer-navbar/ -->
<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Question</title>

    <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>

    <link href="css/main.css" rel="stylesheet" >
    <script src="js/adderQuestion.js"></script>
</head>

<body>
<header>
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/"><span class="logo">Questions</span></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="/">Задать вопрос</a></li>
                    <li><a href="/questions.html">Текущие вопросы</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<main class="container">
    <div class="page-header">
        <h1>Новый вопрос</h1>
    </div>
    <div class="lead" id="questionForms">
        <div class="form-group">
            <label for="inputLogin" class="control-label">Имя</label>
            <input type="text" class="form-control" id="inputLogin">
        </div>
        <div class="form-group">
            <label for="inputQuestion" class="control-label">Вопрос</label>
            <textarea class="form-control" rows="3" id="inputQuestion"></textarea>
        </div>
        <div>
            <button type="submit" class="btn btn-default" id="sendQuestion">Отправить вопрос</button>
        </div>
    </div>
</main>
<footer class="footer">
    <div class="container">
        <span class="logo">Questions</span>
    </div>
</footer>
</body></html>