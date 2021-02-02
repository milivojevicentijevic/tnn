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

        echo "the class is ".get_class($user1);
    ?>
</body>
</html>





<!-- the class is User -->