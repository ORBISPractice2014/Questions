<?php session_start(); ?>
<? $navpage = "/moderation.php"; ?>
<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Questions</title>
    <? include 'templates/links.php' ?>
    <script src="js/changerQuestion.js"></script>
</head>

<body>
<? include 'templates/header.php' ?>
<main class="container">
<?if(isset($_SESSION['auth'])){?>
    <div id="changingQuestion">
        <a class="btn btn-primary btn-lg" role="button" id="changeQuestion">Сменить вопрос</a>
        <label for="changeQuestion" class="control-label" id="status"></label>
    </div>
<?} else {?>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="page-header">
                <h1>Войдите в систему</h1>
            </div>
            <div  id="loginForms" class="form-inline">
                <div class="form-group">
                    <label for="inputPas" class="control-label">Пароль</label>
                    <input type="password" class="form-control" id="inputPas">
                </div>
                <div class="form-group">
                    <a class="btn btn-primary" role="button" id="sendQuestion">Войти</a>
                    <label for="sendQuestion" class="control-label" id="status"></label>
                </div>
            </div>
        </div>
    </div>
    <script src="js/login.js"></script>
<?}?>
</main>
<? include 'templates/footer.php' ?>
</body></html>