$(document).ready(function() {
    var status = $('#changingQuestion').find("#status"),
        hideStatus = function() {
            setTimeout(function() {
                status.html("");
            }, 3000);
        }
    $('#changeQuestion').click(function() {
        var data = [{
            'name': 'key',
            'value':'changeQuestion'
        }];
        $.post("./server.php", data,function(data){
            if (data === "true") {
                status.html("Вопрос был изменен")
                status.addClass('text-success').removeClass('text-danger');
                hideStatus();
            }else if(data === "have not questions"){
                status.html("Нет неотвеченных вопросов");
                status.addClass('text-success').removeClass('text-danger');
                hideStatus();
            }else{
                status.html("Произошла ошибка, попробуйте позже");
                status.removeClass('text-success').addClass('text-danger');
                hideStatus();
            }
        });
    });
});