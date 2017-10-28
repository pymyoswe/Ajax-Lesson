<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JavaScript Ajax Lesson One</title>
    <script>
        var a;
        function call() {
            if(window.XMLHttpRequest){
              a=new XMLHttpRequest();
            }else {
                a=new ActiveXObject("Microsoft.XMLHTTP");
            }

            a.onreadystatechange=function () {
                if(a.readyState==4 && a.status==200){
                    document.getElementById('data').innerHTML=a.responseText;
                }
            }
            a.open("POST","data.txt",true);
            a.send();
        }
    </script>
</head>
<body>
    <div id="data"></div>
    <button type="button" onclick="call()">Request</button>
</body>
</html>