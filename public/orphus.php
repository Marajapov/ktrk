<?php

if(isset($_POST['asd']))
{
    echo $_POST['message'];
}
else
{
    $_SESSION['orphus'] = false;
    header('Location: ' . $_SERVER['HTTP_REFERER'].'?orphus=true');
}

?>