$(document).ready(function() {
    $('#changeQuestion').click(function() {
        $.post("./changeQuestion.php", function(data){
            if (data == "true") {
                alert("Вопрос был изменен.");
            }
            else {
                alert("Произошла ошибка. Вопрос не был изменен.");
            }
        });
    });
});