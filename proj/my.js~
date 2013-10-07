$(document).ready(function(){
 
 $('#form').validate(
 {
  rules: {
    lastname: {
      minlength: 2,
      required: true
    }
   
  },
  highlight: function(element) {
    $(element).closest('.control-group').removeClass('success');
  },
  success: function(element) {
    element
    .text('OK!')
    .closest('.control-group').removeClass('error').addClass('success');
  }
 });
}); 
