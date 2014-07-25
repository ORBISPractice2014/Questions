<?php session_start(); ?>
<?
require_once "lib/connect.php";
switch($_POST["key"]){
    case "addQuestion":
        if(is_string($_POST['inputQuestion']) && is_string($_POST['inputLogin'])){
            if(DBQuestions::addQuestion($_POST['inputQuestion'], $_POST['inputLogin'])){
                print_r("true");
            }else{
                print_r("false");
            }
        }
    break;
    case "changeQuestion":
        if(isset($_SESSION['auth'])){
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
        }
    break;
    case "questionShower":
        $questions=DBQuestions::getUnansweredQuestions();
        print_r('{"questions":'.json_encode($questions).'}');
    break;
    case "login":
        if($_POST['pas'] == "123")
        {
            $_SESSION['auth'] = 'admin';
            print_r("true");
        }
        else
        {
            print_r("false");
        }
    break;
    case "logout":
        unset($_SESSION['auth']);
        print_r("true");
        break;
}
?>