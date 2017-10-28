<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JavaScript Ajax Lesson Two</title>
    <script>
        function ajax_post() {
            var name=document.getElementById('name').value;
            var email=document.getElementById('email').value;

            var sand_data="name="+name+"&email="+email;
            var objXML=new XMLHttpRequest();
            objXML.open("POST","ajax2_server.php",true);
            objXML.setRequestHeader("Content-type","application/x-www-form-urlencoded");
            objXML.onreadystatechange=function () {
                if(objXML.readyState==4 && objXML.status==200){
                    document.getElementById('data').innerHTML=objXML.responseText;
                }
            }
            objXML.send(sand_data);
        }

    </script>
</head>
<body>
    <form>
        <input type="text" name="name" id="name" placeholder="Name"><br>
        <input type="email" name="email" id="email" placeholder="Email"><br>
        <button type="button" name="btnSubmit" id="btnSubmit" onclick="ajax_post()">Submit</button>
    </form>
    <div id="data"></div>
</body>
</html>