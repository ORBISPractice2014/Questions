<? $navpage = "/moderation.php"; ?>
<!DOCTYPE html>
<!-- saved from url=(0054)http://getbootstrap.com/examples/sticky-footer-navbar/ -->
<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Questions</title>
    <? include 'templates/links.php' ?>
    <script src="../js/changerQuestion.js"></script>
</head>

<body>
<? include 'templates/header.php' ?>
<main class="container">
    <div id="changingQuestion">
        <a class="btn btn-primary btn-lg" role="button" id="changeQuestion">Сменить вопрос</a>
        <label for="changeQuestion" class="control-label" id="status"></label>
    </div>
</main>
<? include 'templates/footer.php' ?>
</body></html>