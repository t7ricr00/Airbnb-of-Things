$('#submit').click(function(){
     $('.error').slideDown("slow");
    });

 //Log In Validation
      $('#login_form').submit(function(e){

        // initialize error
        var error = false;

        $('.error').empty();

    if ($('#email').val() == "") {
        $('.error').append("<li>Please enter your email address</li>");
        error = true;
     }

     if ($('#password').val() == "") {
        $('.error').append("<li>Please enter a password<li>");
        error = true;

     }

     if (error) {
        e.preventDefault();
  }

});