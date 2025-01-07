<section id="projets">
    <div class="ab-badge-container my-5">
        <h2 class="ab-badge">
            <span class="lg_fr">Projets</span>
            <span class="lg_en d-none">Projects</span>
        </h2>

        <div class="aboleon-framework-line-separator"></div>
    </div>

    <p class="pb-4 lg_fr">
        Projets notables réalisés dans le cadre des différents emplois ou en freelance, en tant que
        développeur prinicpal.
    </p>

    <p class="pb-4 lg_en d-none">
        Notable projects carried out as part of various jobs or freelance, as a lead developer.
    </p>

    @php
        $data = collect([
    [
        'logo' => asset('media/logos/github.jpeg'),
        'logo_width' => 60,
        'account' => [
            'fr' => 'MetaFramework',
            'en' => 'MetaFramework', // No change needed
        ],
        'tag' => ['Laravel'],
        'text' => [
            'fr' => "Package composer pour développement CMS accéléré sur mesure",
            'en' => "Composer package for accelerated custom CMS development",
        ],
        'web' => 'https://github.com/aboleon/metaframework',
        'year' => 2024
    ],
    [
        'logo' => asset('media/logos/divine.jpeg'),
        'logo_width' => 60,
        'account' => [
            'fr' => 'Divine ID',
            'en' => 'Divine ID', // No change needed
        ],
        'tag' => ['Laravel'],
        'text' => [
            'fr' => "Refonte intégrale CRM gestion évènementielle et organisation de congrès",
            'en' => "Complete overhaul of CRM for event management and congress organization",
        ],
        'web' => 'https://www.divine-id.com',
        'year' => 2024
    ],
    [
        'logo' => asset('media/logos/sherlock.svg'),
        'logo_width' => 100,
        'account' => [
            'fr' => 'SherlockHomes',
            'en' => 'SherlockHomes', // No change needed
        ],
        'tag' => ['Laravel'],
        'text' => [
            'fr' => "Portail de location immobilière, Suisse",
            'en' => "Real estate rental portal, Switzerland",
        ],
        'web' => 'https://sherlockhomes.ch',
        'year' => 2023
    ],
    [
        'logo' => asset('media/logos/mije.svg'),
        'logo_width' => 100,
        'account' => [
            'fr' => 'MIJE',
            'en' => 'MIJE', // No change needed
        ],
        'text' => [
            'fr' => "Voyages scolaires & auberges de jeunesse à Paris",
            'en' => "School trips & youth hostels in Paris",
        ],
        'tag' => ['Wordpress'],
        'web' => 'https://www.mije.com',
        'year' => 2019
    ],
    [
        'logo' => asset('media/logos/airbus.png'),
        'logo_width' => 60,
        'account' => [
            'fr' => 'CSE Airbus Hélicoptères',
            'en' => 'Airbus Helicopters',
        ],
        'tag' => ['Custom','Laravel'],
        'text' => [
            'fr' => "Portail associations CSE Airbus Hélicptères",
            'en' => "Airbus Helicopters Employee Associations Portal",
        ],
        'web' => 'https://associations-cse-airbushelicopters.com',
        'year' => 2018
    ],
    [
        'logo' => asset('media/logos/bg.png'),
        'logo_width' => 100,
        'account' => [
            'fr' => 'Portail tourisme Bulgarie',
            'en' => 'Bulgaria Tourism Portal',
        ],
        'tag' => ['Laravel'],
        'text' => [
            'fr' => "Bulgarie : culture, histoire, tourisme | Guide de voyage",
            'en' => "Bulgaria: culture, history, tourism | Travel Guide",
        ],
        'web' => 'https://la-bulgarie.fr',
        'year' => 2022
    ],
    [
        'logo' => asset('media/logos/madre.png'),
        'logo_width' => 100,
        'account' => [
            'fr' => 'Agri Madre',
            'en' => 'Agri Madre', // No change needed
        ],
        'tag' => ['Wordpress'],
        'text' => [
            'fr' => "Portail EU sur les ystèmes agricoles et alimentaires métropolitains en Méditerranée",
            'en' => "EU portal on metropolitan agricultural and food systems in the Mediterranean",
        ],
        'web' => 'https://agri-madre.net',
        'year' => 2018
    ],
    [
        'logo' => asset('media/logos/staffizy.png'),
        'logo_width' => 100,
        'account' => [
            'fr' => 'Staffizy',
            'en' => 'Staffizy', // No change needed
        ],
        'tag' => ['Laravel'],
        'text' => [
            'fr' => "Solution digitale qui optimise la gestion des contrats de Travail Temporaire",
            'en' => "Digital solution that optimizes the management of temporary employment contracts",
        ],
        'web' => 'https://staffizy.com/',
        'year' => 2018
    ],
    [
        'logo' => asset('media/logos/oicr.png'),
        'logo_width' => 60,
        'account' => [
            'fr' => 'Observatoire Immobilier Connecté',
            'en' => 'Connected Real Estate Observatory',
        ],
        'tag' => ['Laravel'],
        'text' => [
            'fr' => "Annuaires interactifs entreprises Google Places / Google Maps",
            'en' => "Interactive business directories Google Places / Google Maps",
        ],
        'web' => 'https://observatoire-immobilier-connecte.org',
        'year' => 2024
    ],
]);

    @endphp

    <div class="row mb-5 projects row-gap-4">
        @foreach($data as $project)
            <x-project :input="$project"/>
        @endforeach
    </div>

</section>
