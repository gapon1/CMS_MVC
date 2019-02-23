$(document).ready(function(){
    /*=========== Валідація форми і зміна картинки =============*/
    $("#login_form").bind("submit",function(e){
       e.preventDefault();
       //---- перевірка даних з форми
       var login = $.trim($("#login").val());
       var psw = $.trim($("#password").val());

       if (login == '' || psw == ''){
           // Якщо форма не пройшла валідацію то виводим картинку з error
           $("img.avatar").attr("src", "images/user_error.png");
           function func() {location.reload();}
           setTimeout(func, 2000);

       }else {
           // Якщо валідація пройдена то OK
           $("img.avatar").attr("src", "images/user_ok.png");
           $(this).unbind().submit();
 
       }
    });
});