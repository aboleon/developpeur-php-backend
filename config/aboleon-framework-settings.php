<?php
return [
    'email' => [
        'title' => 'Emails',
        'elements' => [
            [
                'name' => 'email_contact',
                'title' => 'Email recevant les demandes de contact',
                'type' => 'email',
                'class' => 'col-md-12 mb-3',
                'rules' => 'required|email|max:255',
                'default' => config('mail.from.address')
            ],
        ],
    ],
];
