 //.=
    $(document).ready(function (){
        $("#login").on('click', function (){
            var email = $("#email").val();
            var password = $("#password").val();
            


            if (email == "" || password == "")
                alert('Please check in your input');
            else{
                $.ajax(
            {
                url:'login.php',
                method: 'POST',
                data: {
                    login:1,
                    emailPHP:email,
                    passwordPHP: password
                },

                success: function(response){
                    $("#response").html(response);

                    if(response.indexOf('session') == 0)
                        window.Location = 'hidden.php';

                },

                

                dataType: 'text'

            }
            );
            }
            

            
        });
    });

