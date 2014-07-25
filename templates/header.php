
<?
    $arNav = array(
        "Текущие вопросы" => "/",
        "Задать вопрос" => "/questions.php",
        "Модерирование" => "/moderation.php"
    )
?>
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
                <?foreach($arNav as $key => $value):?>
                <li <?if($value === $navpage) echo 'class="active"'?>><a href="<?=$value?>"><?=$key?></a></li>
                <?endforeach?>
            </ul>
            <?if(isset($_SESSION['auth'])):?>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <span><a class="btn btn-primary" style="margin: 10px;" role="button" id="logOut">Выйти</a></span>
                </li>
            </ul>
            <script src="../js/logout.js"></script>
            <?endif?>
        </div>
    </div>
</nav>