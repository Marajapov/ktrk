<?php

return [

    'driver' => env('MAIL_DRIVER', 'smtp'),
    'host' => env('MAIL_HOST', 'smtp.gmail.com'),
    'port' => env('MAIL_PORT', 587),
    'from' => ['address' => 'kendirbaev11@gmail.com', 'name' => 'Aibek Kendirbaev'],
    'encryption' => env('MAIL_ENCRYPTION', 'tls'),
    'username' => 'kendirbaev11@gmail.com',
    'password' => '************',
    'sendmail' => '/usr/sbin/sendmail -bs',
    'pretend' => false,

];