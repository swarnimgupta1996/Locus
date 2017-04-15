
  $(document).ready(function() {
   $("#loginform").submit(function(){
     event.preventDefault();

     var emailV = $( '#email' ).val();
     var pwdV = $( '#password').val();
     var postData = {
      'email' : emailV,
      'password' : pwdV,
      'html' : 'PASS'
    };
          $.post('<?=base_url()?>index.php/locus/check_login', postData, function(data){
            alert(data);
    });


     return false;
 });
});
