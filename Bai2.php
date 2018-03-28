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
    input:nth-child(1){
        height: 30px;
        width: 200px;
        border: 1px solid antiquewhite;
        border-radius: 5px;
    }
    input:nth-child(2){
        width: 50px;
        height: 30px;
        border-radius: 5px;
        background: whitesmoke;
        border: 1px solid antiquewhite; 
    }
    input:nth-child(2):hover{
        background: gainsboro;
    }
   
    </style>
    <body>
        <form method="POST">
            <input type="search" placeholder="Từ khóa..." name="input"/>
            <input type="submit" value="Tìm"/>
        </form>
        <?php
        if (isset($_POST['input'])) {
            echo "Từ khóa cần tim: " . $_POST['input'];
        }
        ?>
    </body>
</html>



