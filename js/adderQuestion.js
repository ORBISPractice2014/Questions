/**
 * Created by Pavel on 18.07.14.
 */
$(document).ready(function(){
    var forms = $('#questionForms').find('.form-group'),
        status = $('#questionForms').find("#status"),
        validate = function(){
            var result = true;
            forms.each(function(){
                var input = $(this).find('.form-control');
                if(input.val()) {
                    $(this).removeClass('has-error').addClass('has-success');
                }
                else {
                    $(this).removeClass('has-success').addClass('has-error');
                    result = false;
                }
            });
            if(!result){
                status.html("Есть не заполненые поля.");
                status.removeClass('text-success').addClass('text-danger');
            }
            return result;
        },
        getData = function(){
            var result = [];
            forms.each(function(){
                var input = $(this).find('.form-control');
                result.push({
                   name: input.attr("id"),
                   value: input.val()
                });
            });
            return result;
        },
        clearForms = function(){
            forms.each(function(){
                $(this).find('.form-control').val("");
                $(this).removeClass('has-success').removeClass('has-error');
            });
        };
   $('#sendQuestion').click(function(){
        if(validate()) {
            $.post("./addQuestion.php", getData(), function(data){
               if(data === 'true'){
                   clearForms();
                   status.html("Вопрос добавлен в очередь");
                   status.addClass('text-success').removeClass('text-danger');
               }
               else{
                   status.html("Произошла ошибка попробуйте позже");
                   status.removeClass('text-success').addClass('text-danger');
               }
            });
        }
   });
});