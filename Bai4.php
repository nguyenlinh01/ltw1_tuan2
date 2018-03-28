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
        h1{
            color: blueviolet;
            text-align: center;
        }
        h3{
            color: brown;
        }
        option{
            color: darkgoldenrod;
        }
        form{
            position: relative;
        }
        input{
            position: relative;
            left: -35%;
           //top: -30%;
        }
    </style>
    <body>
        <div class="container">
        <div class="col-md-12">
            <div class="row">
                <h1>Thực đơn</h1>
                <form action="menu.php" method="GET">
                    <div class="col-md-4">
                        <h3>Món khai vị</h3>
                        <select multiple name="main[]" size="4">
                            <option value="Gỏi ngó sen">Gỏi ngó sen</option>
                            <option value="Salat cá ngừ">Salat cá ngừ</option>
                            <option value="Bò trộn rau thơm">Bò trộn rau thơm</option>
                            <option value="Thịt nguội">Thịt nguội</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <h3>Món chính</h3>
                        <select multiple name="main[]" size="4">
                            <option value="Bò Hầm">Bò Hầm</option>
                            <option value="Cá chẽm sốt cà">Cá chẽm sốt cà </option>
                            <option value="Tôm rang muối">Tôm rang muối</option>
                            <option value="Cua sốt me">Cua sốt me</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <h3>Món tráng miệng</h3>
                        <select multiple name="main[]" size="3">
                            <option value="Chè hạt sen">Chè hạt sen</option>
                            <option value="Bánh flan">Bánh flan</option>
                            <option value="Rau câu">Rau câu</option>
                        </select>
                    </div>
                    <br/><br/>
                    <div style="text-align: center;">
                        <input class="btn btn-success" type="submit" name="submit"/>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </body>
</html>