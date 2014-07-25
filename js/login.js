$(document).ready(function(){
    var loginForms = $('#loginForms'),
        inputPas = loginForms.find('#inputPas'),
        sendQuestion = loginForms.find('#sendQuestion'),
        status = loginForms.find('#status');
    sendQuestion.click(function(){
        var data = [{
            'name':'pas',
            'value': inputPas.val()
        },
        {
            'name':'key',
            'value': 'login'
        }]
        $.post('server.php', data, function(data){
            if(data === 'true'){
                window.location.reload();
            }else{
                status.html("Не верный пароль");
                status.removeClass('text-success').addClass('text-danger');
            }
        });
    });
});
