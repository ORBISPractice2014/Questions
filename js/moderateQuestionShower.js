$(document).ready(function() {
    var data = [{
        'name': 'key',
        'value':'moderateQuestionShower'
    }];
    var update=function() {
        $.post('server.php',data,function(data) {
            var data=JSON.parse(data),
            questions = data['questions'],
            moderateQuestions = $('.moderateQuestions');
            moderateQuestions.empty();

            for(var i=0;i<questions.length;i++) {
                moderateQuestions.append('<div class="list-group-item">'+
                                            '<h4 class="list-group-item-heading">'+questions[i][4]+ ' '+ questions[i][1]+' </h4>'+
                                            '<p class="list-group-item-text">'+questions[i][0]+'</p>'+
                                            '<div class="btn-group btn-group-xs">'+
                                                '<button type="button" class="btn btn-default add" data-id="'+questions[i][5]+'">Принять</button>'+
                                                '<button type="button" class="btn btn-default del" data-id="'+questions[i][5]+'">Отклонить</button>'+
                                            '</div>'+
                                         '</div>'
                 );

            }
            moderateQuestions.find(".add").click(function(){
                var id=$(this).data('id');
                var data = [{
                    'name': 'key',
                    'value':'add'
                },
                {
                    'name': 'id',
                    'value': id
                }
                ];
                $.post('server.php', data, function(data){
                    if('true'){
                        $('[data-id='+id+']').parent().parent().remove();
                    }
                });
            });
            moderateQuestions.find(".del").click(function(){
                var id=$(this).data('id');
                var data = [{
                    'name': 'key',
                    'value':'del'
                },
                {
                    'name': 'id',
                    'value': id
                }
                ];
                $.post('server.php', data, function(data){
                      if('true'){
                          $('[data-id='+id+']').parent().parent().remove();
                      }
                });
            });
            moderateQuestions.find('div.list-group-item').wrapAll(' <div class="col-sm-4> <div class="list-group">');





        });
    }

    update();
    setInterval(update,500);
});

