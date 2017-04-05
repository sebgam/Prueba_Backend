 $(document).ready(function(){

         $("#formRegistro").submit(function(){

            var inputs = document.querySelectorAll("input[type='text'],input[type='password']");
               for(var i=0; i < inputs.length;i++){
                   if($(inputs[i]).val()==""){
                       $(inputs[i]).css("border","2px solid red").attr("placeholder","campo obligatorio");
                       return false;
                   }
               };



        })

     })