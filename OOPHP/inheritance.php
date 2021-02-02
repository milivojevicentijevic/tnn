<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inheritance</title>
</head>
<body>
    <?php
        require 'AdminUser.php';

        $user1 = new User('jovan', 'jovan@yahoo.com');
        $user2 = new User('mitar', 'mitar@yahoo.com');
        $user3 = new AdminUser('dejan', 'dejan@yahoo.com', 5);
        
        //unset($user1);
        $user4 = clone $user1;
        echo $user4->addFriend();
    ?>
</body>
</html>





<!-- 
jovan(cloned) added a new friend
the user jovan(cloned) was removed
the user dejan was removed
the user mitar was removed
the user jovan was removed
-->