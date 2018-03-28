
<html>
    <head>
        <title>Bootstrap 3 example</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8"/>
    </head>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<style rel="stylesheet">
    form{
        text-align: center;
        position: relative;
        top: 20px;
    }
    input{
        height: 30px;
        width: 200px;
        border-radius: 5px;
    }
    span{
        font-weight: bold;
    }
</style>
<body>
<form method="GET" action="hello.php">
    <span>Họ tên: </span><input  placeholder="please input your name" type="text" name="input"/>
    <button class="btn btn-default" type="submit"> Submit</button>
        </form>
    </body>
</html>