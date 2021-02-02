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
        
        echo $user1->getEmail()."<br>";
        echo $user3->getEmail()."<br>";
        echo $user3->getLevel()."<br>";
    ?>
</body>
</html>





<!-- 
jovan@yahoo.com
dejan@yahoo.com
5 
-->