<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intro</title>
</head>
<body>
    <?php
        require 'User.php';
        $user1 = new User();
        $user2 = new User();

        echo $user1->username."<br>";
        echo $user1->email."<br>";
        echo $user1->addFriend()."<br>";

        $user2->username = 'mitar';
        $user2->email = 'mitar@yahoo.com';
        echo $user2->username."<br>";
        echo $user2->email."<br>";
        echo $user2->addFriend()."<br>";

        print_r(get_class_vars('User'));
        echo "<br>";
        print_r(get_class_methods('User'));
    ?>
</body>
</html>






<!-- 
jovan
jovan@yahoo.com
jovan added a new friend
mitar
mitar@yahoo.com
mitar added a new friend
Array ( [username] => jovan [email] => jovan@yahoo.com )
Array ( [0] => addFriend ) 
-->