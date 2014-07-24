<!DOCTYPE html>
<!-- saved from url=(0054)http://getbootstrap.com/examples/sticky-footer-navbar/ -->
<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Question</title>
    <?php include 'templates/links.php' ?>
    <link href="./css/index.css" rel="stylesheet" >
    <script src="../js/adderQuestion.js"></script>

</head>

<body>
<?php include 'templates/header.php' ?>
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
            <label for="sendQuestion" class="control-label" id="status"></label>
        </div>
    </div>
</main>
<?php include 'templates/footer.php' ?>
</body></html>