<?
    $arNav = array(
        "Задать вопрос" => "/",
        "Текущие вопросы" => "/questions.php",
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
        </div>
    </div>
</nav>