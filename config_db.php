<?php
    session_start();
    $connect = mysqli_connect('localhost', 'u1985655_test1', 'qwerty123', 'u1985655_test1');
    
    $login = $_POST['login'];
    $pass = $_POST['pass'];

    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'");
    if (mysqli_num_rows($check_user) > 0) {
        $user = mysqli_fetch_assoc($check_user);

        $_SESSION['user'] = [
            "id" => $user['id'],
            "zak" => $user['zak']
        ];

        header('Location: magaz.php');

    } else {
        $_SESSION['message'] = 'Не верный логин или пароль';
        header('Location: prof.php');
    }
    ?>

<pre>
    <?php
    print_r($check_user);
    print_r($user);
    ?>
</pre>
