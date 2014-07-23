<?
require_once "connect.php";
if(DBQuestions::addQuestion($_POST[inputLogin], $_POST[inputQuestion])){
    print_r("true");
}else{
    print_r("false");
}
?>
