<!DOCTYPE html>
<!-- saved from url=(0054)http://getbootstrap.com/examples/sticky-footer-navbar/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>ConferSystem</title>

    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" >
    <link href="css/main.css" rel="stylesheet" >
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <link rel="icon" href="http://getbootstrap.com/favicon.ico">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="js/adderQuestion.js"></script>


</head>

<body>

<!-- Fixed navbar -->
<header>
    <nav id="navigation">
        <div class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/"><span class="main-title">Questions</span></a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav" id="navigationItems">
                        <li class="active"><a href="/">Задать вопрос</a></li>
                        <li><a href="/questions.html">Текущие вопросы</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>


<!-- Begin page content -->
<div class="container">
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
</div>

<div class="footer">
    <div class="container">
        <span class="main-title">Questions</span>
    </div>
</div>


</body></html>