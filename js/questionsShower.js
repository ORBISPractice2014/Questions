$(document).ready(function() {
    var data = [{
        'name': 'key',
        'value':'questionShower'
    }];
    var update=function() {
        $.post('server.php',data, function(data) {
                var data=JSON.parse(data),
                    questions = data['questions'],
                    curentQuestion = $('.currentQuestion'),
                    questionQuery = $('.questionQuery'),
                    message=$('.message');

                if(questions.length!=0) {
                     curentQuestion.html('<div class="panel panel-primary" >'+
                                            '<div class="panel-heading">'+
                                                '<h3 class="panel-title"><div class="name" style="float: left"><strong>'+questions[0][3]+ '</strong></div> <div class="time" style=" font-color:rgb(255,255,255); margin-left:20%;">'+ questions[0][1]+' </div></h3>'+
                                            '</div>'+
                                            '<div class="panel-body">'+
                                                '<b>'+questions[0][0]+'</b>'+
                                            '</div>'+
                                        '</div> ');
                    questionQuery.empty();
                    for(var i=1;i<questions.length;i++) {
                        questionQuery.append('<div class="panel panel-info">'+
                                                '<div class="panel-heading"> <div class="name" style="float: left"> <strong>'+questions[i][3]+'</strong> </div> <div class="time" style="margin-left:20%"><small> '+questions[i][1]+' </small> </div>'+
                                                '</div>'+
                                                '<div class="panel-body">'+
                                                     '<b>'+questions[i][0]+' </b>'+
                                                '</div>'+
                                            '</div>');

                    }
                    message.empty();
                }
                else {
                    curentQuestion.empty();
                    message.html('<div class="alert alert-info">'+
                    'На данный момент нет неотвеченных вопросов.'+
                    '</div>');
                }




            });
    }
    update();
    setInterval(update,500);


});
