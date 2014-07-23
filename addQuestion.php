<?
require_once "lib/connect.php";
if(DBQuestions::addQuestion($_POST['inputQuestion'], $_POST['inputLogin'])){
    print_r("true");
}else{
    print_r("false");
}
?>
