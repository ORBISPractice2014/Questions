/**
 * Created by Pavel on 18.07.14.
 */
$(document).ready(function(){
    var forms = $('#questionForms').find('.form-group'),
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
            return result;
        };
   $('#sendQuestion').click(function(){
        if(validate()) {
            
        }
   });
});