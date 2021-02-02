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

        echo $user1->addFriend()."<br>";
        echo $user2->addFriend()."<br>";
    ?>
</body>
</html>






<!-- 
jovan added a new friend
mitar added a new friend
-->