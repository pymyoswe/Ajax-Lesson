<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jquery Ajax Lesson</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        body{
            width:100%;
        }
        .wapper{
            background-color: aqua;
            width: 400px;
            margin: 50px auto;
            padding: 50px;
        }
        form{
            width: 200px;

        }
        #name,#password{
            margin-bottom: 10px;
            width: 300px;
            height: 30px;
        }
        #btnLog{
            width: 100px;
            height: 40px;
            background-color: grey;
            color: #ffffff;
            border-style: double;
        }
    </style>
</head>
<body>
    <div class="wapper">
        <div id="info"></div>
        <form>
            <input type="text" id="name" name="name" placeholder="Name"><br>
            <input type="password" id="password" name="password" placeholder="Password"><br>
            <button type="button" name="btnLog" id="btnLog">Login</button>
        </form>
    </div>

<script src="jquery.js" type="text/javascript"></script>
<script src="ajax3.js" type="text/javascript"></script>
</body>
</html>