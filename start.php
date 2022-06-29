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

    $numbers = [1,5,8,3];
    foreach($numbers as $number){
        echo $number;
    }

    function hero_Section(){
        $heading_hero = ["heading" => "<h1>Dog Training</h1>", "description" => "<p>We do dog training on the daily</p>"];

        echo $heading_hero["heading"] . " " . $heading_hero["description"];
    }

    function about_Section() {
        $heading_about = ["about" => "<h4>What we do</h4>", "heading-2" => "<h2>About Us</h2>", "description-2" => "<p>This is an intro. This is what we do.</p>"];
        echo $heading_about["about"] . " " . $heading_about["heading-2"] . " " . $heading_about["description-2"];
    }

    function pull_Together() {
        hero_Section();
        about_Section();
    }

    function say_Something($message) {
        echo $message;
    }

    say_Something("This is my message");

    ?>
</body>
</html>