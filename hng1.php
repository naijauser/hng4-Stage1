<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>
<body>
    <div id="container">    
        <div class ="hng4" align="center">
            HNG4
            </div>
        <div class = "goals" align = "center">
            What are your goals for
        </div>
        <div class = "day" align = "center">
            <?php $date = date("l, F d, Y");
                    echo"$date"; ?>
        </div>
        <div id = "time">
        <?php $time = date("h:i a");
                    echo"$time"; ?>
        </div>
    </div>
</body>
</html>