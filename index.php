<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/index.css">
    <title>Avtaar First Assingment</title>
</head>
<body>
    <div class="main">
        <form action="#" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">
        <input type="submit" value="Submit">
        </form>
    </div>
    <br>
    
    <?php
    if (!empty($_POST['name'])) {
        $name = $_POST['name'];
        date_default_timezone_set('Asia/Colombo');
    echo "<div class=\"view\">
        <label for=\"id\">ID:</label>
        <span>".idGenerator()."</span><br>
        <label for=\"param\">Name:</label>
        <span>".$name."</span><br>
        <label for=\"request-Date\">Request Date:</label>
        <span>".Date('y-m-d',Time())."</span><br>
        <label for=\"request-Time\">Request TIme:</label>
        <span>".Date('H:i:s',Time())."</span>
    </div>";
    }

    function idGenerator(){
        return  Date('ymd').Date('his');
    }
    ?>
</body>
</html>