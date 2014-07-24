$(document).ready(function() {
    var status = $('#changingQuestion').find("#status"),
        hideStatus = function() {
            setTimeout(function() {
                status.html("");
            }, 5000);
        }
    $('#changeQuestion').click(function() {
        $.post("./changeQuestion.php", function(data){
            if (data === "true") {
                status.html("Вопрос был изменен")
                status.addClass('text-success').removeClass('text-danger');
                hideStatus();
            }
            else {
                status.html("Произошла ошибка, попробуйте позже");
                status.removeClass('text-success').addClass('text-danger');
                hideStatus();
            }
        });
    });
});