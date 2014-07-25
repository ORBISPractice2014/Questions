$(document).ready(function(){
    $('#logOut').click(function(){
        var data = [{
            'name':'key',
            'value': 'logout'
        }]
        $.post('server.php', data, function(data){
            if(data === 'true'){
                window.location.reload();
            }
        });
    });
});

