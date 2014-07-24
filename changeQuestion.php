<?
require_once "lib/connect.php";
if(DBQuestions::hasUnansweredQuestions()) {
    if(DBQuestions::changeActiveQuestionStatus()){
        print_r("true");
    }
    else {
        print_r("false");
    }
}
else {
    print_r("have not questions");
}

?>