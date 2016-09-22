<!DOCTYPE html>
    <html>
<head>
    <title>Gamers Unite</title>
</head>
<?php
    include('class_lib.php');

?>
<body>
<?php
    $nick = new gameAccount('Nick', 'Password', 'nac1998@cox.net', '12312');
    $nick->set_name('Nick Clocksin');
    $nick->set_email('nac1998@cox.net');
    echo 'You name is ' . $nick->get_name();
    echo '<br />';
    echo 'Your email is ' . $nick->get_email();
    $xbox = new xboxAccount($nick->get_name(), 'Halo4Ops', 'password', '1231231',$nick->get_email());
    $xbox->set_username('Halo4Ops');
    echo '<br />';
    echo $xbox->get_name() . ' your Xbox Gamertag is ' . $xbox->get_username();
    $game = new Halo();
    $game->name ='Halo';
    $game->describe = 'A new Sci-fi game that takes you to a new destination, a Halo Ring.';
    $game->rating = 'M';
    $game->release = 'November 15, 2001';
    echo '<br />';
    echo $game->games();
    echo steam_user::$min_password;
?>
</body>
</html>