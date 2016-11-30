<?php
declare(strict_types = 1);

include("./connection.php");
session_start();


$query = "SELECT diary FROM users WHERE id = '" . $_SESSION["id"] . "' LIMIT 1";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_array($result);

$diary = $row['diary'];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Alex Tenche">

    <title> notes - writing </title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>

<body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header pull-left">
                <a href="#" class="navbar-brand">theDiary</a>
            </div>
            <div class="pull-right">
                <ul class="nav navbar-nav">
                    <li><a href="index.php?logout=1">Log Out</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container" id="topContainer">
        <div class="row">
            <div class="col-md-6 col-md-offset-3" id="topRow">
                    <textarea title="write notes here" class="form-control">
                        <?php echo $diary; ?>
                    </textarea>
            </div>
        </div>
    </div><!-- end container -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="./js/app.js"></script>

</body>
</html>	