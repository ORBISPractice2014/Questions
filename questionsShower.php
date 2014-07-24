<?php require_once 'lib/connect.php';
$questions=DBQuestions::getUnansweredQuestions();
include "PR.php";
print_r('{"questions":'.json_encode($questions).'}'); ?>