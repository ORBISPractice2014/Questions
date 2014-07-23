<?
require_once "lib/connect.php";
if(DBQuestions::changeActiveQuestionStatus()){
    print_r("true");
}
else {
    print_r("false");
}
?>