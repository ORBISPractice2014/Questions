$(document).ready(function() {
    var update=function() {
        $.post('questionsShower.php',function(data) {
                var data=JSON.parse(data),
                    questions = data['questions'],
                    curentQuestion = $('.currentQuestion'),
                    questionQuery = $('.questionQuery');

                curentQuestion.find('.name').html('<strong>'+questions[0][3]+ '</strong>');
                curentQuestion.find('.time').html(questions[0][1]);
                curentQuestion.find('.panel-body').html('<b>'+questions[0][0]+'</b>');
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



            });
    }
    update();
    setInterval(update,500);


});
