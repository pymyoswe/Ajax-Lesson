/**
 * Created by root on 10/27/17.
 */
$(window).bind('load',function () {

    $("#btnLog").on('click',function () {
       var name=$("#name").val();
       var password=$("#password").val();

       $.ajax({
           type:"POST",
           url:"ajax3_post.php",
           data:{userName:name,passWord:password},
           success:function (msg) {
               $("#info").html(msg);
           }
       });


    });
});