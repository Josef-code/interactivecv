<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

if (isset($_POST['submit'])) {
    $sucessmsg = "<p>Thank you {$name} , your message has been sent to Joseph and you will get a reply shortly!</p>";

} else {
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="crossorigin"/>
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&amp;family=Roboto:wght@300;400;500;700&amp;display=swap"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&amp;family=Roboto:wght@300;400;500;700&amp;display=swap" media="print" onload="this.media='all'"/>
    <noscript>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&amp;family=Roboto:wght@300;400;500;700&amp;display=swap"/>
    </noscript>
    <link href="css/font-awesome/css/all.min.css?ver=1.2.0" rel="stylesheet">
    <link href="css/bootstrap.min.css?ver=1.2.0" rel="stylesheet">
    <link href="css/aos.css?ver=1.2.0" rel="stylesheet">
    <link href="css/main.css?ver=1.2.0" rel="stylesheet">
    <style>
        .response{
            background-color: white;
            position: absolute;
            width: 50%;
            height: auto;
            margin: auto;
            padding: 50px;
            top: 15%;
            left: 0;
            right: 0;
            border-radius: 6px;
        }
    </style>
</head>
<body>


        <div class="response">
            <h2>Message sent!</h2>
            <?php
                if (isset($sucessmsg)) {
                   echo $sucessmsg;
                }
            ?>
        </div>
    
</body>
</html>