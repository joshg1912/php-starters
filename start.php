<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $data = ["site_title" => "<h1>Dog Training</h1>", "site_desc" => "<p>We train dogs on the daily</p>"];

    echo $data["site_tite"] . " " . $data["site_desc"];
    
    $numbers = ["number1" => 10, "number2" => 20];
    echo $numbers["number1"] + $numbers["number2"];

    for($i = 0; $i <= 10; $i++) {
        echo $i;
    }
    ?>
</body>
</html>