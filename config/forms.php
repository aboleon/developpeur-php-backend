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
                'grid' => 'col-lg-6'
            ],
            [
                'type' => 'text',
                'name' => 'last_name',
                'grid' => 'col-lg-6'
            ],
            [
                'type' => 'text',
                'name' => 'company',
                'grid' => 'col-lg-6'
            ],
            [
                'type' => 'text',
                'name' => 'website',
                'grid' => 'col-lg-6'
            ],
            [
                'type' => 'email',
                'name' => 'email',
                'grid' => 'col-lg-6'
            ],
            [
                'type' => 'text',
                'name' => 'phone',
                'grid' => 'col-lg-6'
            ],
            [
                'type' => 'textarea',
                'name' => 'message',
                'grid' => 'col-lg-12'
            ],
        ],
    ]
];
