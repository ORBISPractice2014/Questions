$(document).ready(function() {
    var data = [{
        'name': 'key',
        'value':'questionShower'
    }];
    var update=function() {
        $.post('server.php',data, function(data) {
                var data=JSON.parse(data),
                    questions = data['questions'],
                    questionQuery = $('.questionQuery'),
                    message=$('.message');

                if(questions.length!=0) {
                    questionQuery.empty();

                    questionQuery.append('<div class="list-group-item active">'+
                        '<h4 class="list-group-item-heading">'+questions[0][4]+ ' '+ questions[0][1]+' </h4>'+
                        '<p class="list-group-item-text">'+questions[0][0]+'</p>'+
                        '</div>'
                    );


                    for(var i=1;i<questions.length;i++) {
                        questionQuery.append('<div class="list-group-item">'+
                            '<h4 class="list-group-item-heading">'+questions[i][4]+ ' '+ questions[i][1]+' </h4>'+
                            '<p class="list-group-item-text">'+questions[i][0]+'</p>'+
                            '</div>'
                        );

                    }
                    questionQuery.find('div.list-group-item').wrapAll(' <div class="col-sm-4> <div class="list-group">');
                    message.empty();
                }
                else {
                    questionQuery.empty();
                    message.html('<div class="alert alert-info">'+
                    'На данный момент нет неотвеченных вопросов.'+
                    '</div>');
                }




            });
    }
    update();
    setInterval(update,1000);


});
