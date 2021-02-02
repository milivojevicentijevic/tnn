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
        
        echo $user1->message()."<br>";
        echo $user3->message()."<br>";
    ?>
</body>
</html>





<!-- 
jovan@yahoo.com sent a new message
dejan@yahoo.com, an admin, sent a new message
-->