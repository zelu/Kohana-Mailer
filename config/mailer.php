<?php defined('SYSPATH') or die('No direct script access.');

return array(
    // Sending method: smtp or mail
    'mode'  => 'smtp',

    // SMTP settings
    'smtp' => array(
        'host'      => 'smtp.gmail.com',
        'port'      => 465,
        'username'  => 'username@gmail.com',
        'password'  => 'password',
    ),

    // Sender
    'from' => array(
        'mail' => 'no-reply@example.com',
        'name' => 'Mailer module',
    ),

    // Email package limit
    'limit' => 200,
);