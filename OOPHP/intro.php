<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intro</title>
</head>
<body>
    <?php
        require 'User.php';
        $user1 = new User('jovan', 'jovan@yahoo.com');
        $user2 = new User('mitar', 'mitar@yahoo.com');

        $user1->setEmail('jovan567@yahoo.com');
        
        echo $user1->getEmail()."<br>";
        echo $user2->getEmail()."<br>";
    ?>
</body>
</html>






<!-- 
jovan567@yahoo.com
mitar@yahoo.com
-->