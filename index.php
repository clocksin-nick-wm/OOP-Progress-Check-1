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
    $nick->set_password('Password');
    $nick->set_account_number('12313');
    $nick->set_email('nac1998@cox.net');
    echo 'You name is ' . $nick->get_name();
    echo '<br />';
    echo 'Your email is ' . $nick->get_email();
    $xbox = new xboxAccount($nick->get_name(), 'Halo4Ops', $nick->get_password(), $nick->get_account_number(), $nick->get_email());
    $xbox->set_username('Halo4Ops');
    echo '<br />';
    echo $xbox->get_name() . ' your Xbox Gamertag is ' . $xbox->get_username();
?>
</body>
</html>