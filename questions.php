<? $navpage = "/questions.php"; ?>
<!DOCTYPE html>
<!-- saved from url=(0054)http://getbootstrap.com/examples/sticky-footer-navbar/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Question</title>
    <?php include 'templates/links.php' ?>
    <script src="js/questionsShower.js"></script>
</head>

<body>
<?php  include 'templates/header.php'; ?>

<main class="container">
    <div class="page-header">
        <h1>Текущие вопросы</h1>
    </div>

    <div class="currentQuestion">
        <div class="panel panel-primary" >
            <div class="panel-heading">
                <h3 class="panel-title"><div class="name" style="float: left"></div> <div class="time" style=" font-color:rgb(255,255,255); margin-left:20%;"> </div></h3>
            </div>
            <div class="panel-body">

            </div>
        </div>
    </div>



    <div class="questionQuery">

    </div>
</main>




<?php include 'templates/footer.php'; ?>
</body></html>