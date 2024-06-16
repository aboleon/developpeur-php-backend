<section id="projets">
    <div class="ab-badge-container my-5">
        <h2 class="ab-badge">Projets</h2>
        <div class="aboleon-framework-line-separator"></div>
    </div>

    <p class="pb-4">Projets notables réalisés dans le cadre des différents emplois ou en freelance, en tant que
        développeur prinicpal.</p>

    @php
        $data = collect([
          [
              'logo' => asset('media/logos/github.jpeg'),
              'logo_width' => 60,
              'account' => 'MetaFramework',
              'tag' => ['Laravel'],
              'text' => "Package composer pour développement CMS accéléré sur mesure",
              'web' => 'https://github.com/aboleon/metaframework',
              'year' => 2024
          ],
          [
              'logo' => asset('media/logos/divine.jpeg'),
              'logo_width' => 60,
              'account' => 'Divine ID',
              'tag' => ['Laravel'],
              'text' => "Refonte intégrale CRM gestion évènementielle et organisation de congrès",
              'web' => 'https://www.divine-id.com',
              'year' => 2024
          ],
          [
              'logo' => asset('media/logos/sherlock.svg'),
              'logo_width' => 100,
              'account' => 'SherlockHomes',
              'tag' => ['Laravel'],
              'text' => "Portail de location immobilière, Suisse",
              'web' => 'https://sherlockhomes.ch',
              'year' => 2023
            ],
          [
              'logo' => asset('media/logos/mije.svg'),
              'logo_width' => 100,
              'account' => 'MIJE',
              'text' => "Voyages scolaires & auberges de jeunesse à Paris",
              'tag' => ['Wordpress'],
              'web' => 'https://www.mije.com',
              'year' => 2019
            ],
          [
              'logo' => asset('media/logos/airbus.png'),
              'logo_width' => 60,
              'account' => 'CSE Airbus Hélicoptères',
              'tag' => ['Custom','Laravel'],
              'text' => "Portail associations CSE Airbus Hélicptères",
              'web' => 'https://associations-cse-airbushelicopters.com',
              'year' => 2018
            ],
          [
              'logo' => asset('media/logos/bg.png'),
              'logo_width' => 100,
              'account' => 'Portail tourisme Bulgarie',
              'tag' => ['Laravel'],
              'text' => "Bulgarie : culture, histoire, tourisme | Guide de voyage",
              'web' => 'https://la-bulgarie.fr',
              'year' => 2022
          ],
          [
              'logo' => asset('media/logos/madre.png'),
              'logo_width' => 100,
              'account' => 'Agri Madre',
              'tag' => ['Wordpress'],
              'text' => "Portail EU sur les ystèmes agricoles et alimentaires métropolitains en Méditerranée",
              'web' => 'https://agri-madre.net',
              'year' => 2018
          ],
          [
              'logo' => asset('media/logos/staffizy.png'),
              'logo_width' => 100,
              'account' => 'Staffizy',
              'tag' => ['Laravel'],
              'text' => "Solution digitale qui optimise la gestion des contrats de Travail Temporaire",
              'web' => 'https://staffizy.com/',
              'year' => 2018
          ],
          [
              'logo' => asset('media/logos/oicr.png'),
              'logo_width' => 60,
              'account' => 'Observatoire Immobilier Connecté',
              'tag' => ['Laravel'],
              'text' => "Annuaires interactifs entreprises Google Places / Google Maps",
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
