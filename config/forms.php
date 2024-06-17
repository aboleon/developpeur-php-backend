<?php
return [
    [
        'name' => 'contact',
        'confirmation' => "Votre message a bien été envoyé. Je prendrai  rapidement contact avec vous.",
        'to' => config('app.contact_mail'),
        'fields' => [
            [
                'type' => 'text',
                'name' => 'first_name',
                'grid' => 'col-sm-6 col-12'
            ],
            [
                'type' => 'text',
                'name' => 'last_name',
                'grid' => 'col-sm-6 col-12'
            ],
            [
                'type' => 'text',
                'name' => 'company',
                'grid' => 'col-sm-6 col-12'
            ],
            [
                'type' => 'text',
                'name' => 'website',
                'grid' => 'col-sm-6 col-12'
            ],
            [
                'type' => 'email',
                'name' => 'email',
                'grid' => 'col-sm-6 col-12'
            ],
            [
                'type' => 'text',
                'name' => 'phone',
                'grid' => 'col-sm-6 col-12'
            ],
            [
                'type' => 'textarea',
                'name' => 'message',
                'grid' => 'col-sm-12'
            ],
        ],
    ]
];
