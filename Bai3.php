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
        p input, textarea{
            border: 1px solid #47add3;
        }
        form{
            position: relative;
            top: 20px;
            left: 20px;
        }
        span{
            font-weight: bold;
        }
    </style>
    <body>
        <form method="GET" class="container-fluid">
            <p><span>Name:</span> <input type="text" name="inputName" value="<?php
                if (isset($_GET['inputName'])) {
                    echo $_GET['inputName'];
                }
                ?>"/></p>
            <p><span>Email:</span> <input type="text" name="inputEmail" value="<?php
                if (isset($_GET['inputEmail'])) {
                    echo $_GET['inputEmail'];
                }
                ?>"></p>
            <p><span>Websides:</span> <input type="text" name="inputWeb" value="<?php
                if (isset($_GET['inputWeb'])) {
                    echo $_GET['inputWeb'];
                }
                ?>"></p>
            <p><span>Comment:</span> <textarea name="inputComment"><?php
                    if (isset($_GET['inputComment'])) {
                        echo htmlentities($_GET['inputComment']);
                    }
                    ?></textarea></p>
            <p><span>Gender:</span> <input type="radio" name="Gender" <?php
                if (isset($_GET['Gender']) && $_GET['Gender'] == "Male") {
                    echo "checked";
                }
                ?> value="Male">Male
                <input type="radio" name="Gender" <?php
                if (isset($_GET['Ge nder']) && $_GET['Gender'] == "Female") {
                    echo "checked";
                }
                ?> value="Female">Female</p>
            <input type="submit" class="btn btn-info">
        </form>
    </body>
</html>
<?php
if (isset($_GET['inputName'])) {
    echo 'Name: ' . $_GET['inputName'] . '<br/>';
}
if (isset($_GET['inputEmail'])) {
    echo 'Email: ' . $_GET['inputEmail'] . '<br/>';
}
if (isset($_GET['inputWeb'])) {
    echo 'Web: ' . $_GET['inputWeb'] . '<br/>';
}
if (isset($_GET['inputComment'])) {
    echo 'Comment: ' . $_GET['inputComment'] . '<br/>';
}
if (isset($_GET['Gender'])) {
    echo 'Gender: ' . $_GET['Gender'] . '<br/>';
}
?>