<x-front-layout>
    <div class="container">
        <section id="presentation">
            <div class="row align-items-center">
                <div class="col-sm-7">
                    <h1 class="name" style="font-weight: 200">
                        <span style="font-weight: 600">Andrian</span>
                        Mihailov
                    </h1>
                    <span class="email">andrian@developpeur-php-backend.fr</span>
                    <span class="job-title"><span class="lg_fr">Developpeur Full Stack PHP</span><span
                            class="lg_en d-none">Full Stack PHP Developer</span> </span>
                    <span class="job-title" style="background-color: #3f5370;">
                        <span class="lg_fr">Chef de projet technique</span>
                        <span class="lg_en d-none">Technical Project Manager</span>
                    </span>
                </div>
                <div class="col-sm-5 text-sm-end text-center">
                    <img src="{{ asset('media/amihailov.jpg') }}" class="amihailov" height="270"
                         alt="Andrian Mihailov"/>
                </div>
            </div>
            <h2 class="lead">
                <span class="lg_fr">
                Développement et conception d'applications web pour startups et grandes entreprises
                </span>
                <span class="lg_en d-none">
                Web application development and design for startups and large companies
                </span>
            </h2>

            <div class="aboleon-framework-line-separator my-4"></div>

            @include('static.logos')

            <div class="aboleon-framework-line-separator my-4"></div>


            @include('static.hello')
        </section>
        @include('static.parcours')
        @include('static.projects')
        @include('static.stack')
        @include('static.softskill')
        @include('static.personal')


    </div>


    <br><br>

    @push('js')

        <script>
            $(document).ready(function () {
                const offset = 100;

                $('.nav-link').not('.static').on('click', function (e) {
                    e.preventDefault();

                    // Extract the hash part of the URL
                    let href = $(this).attr('href');
                    let targetId = href.substring(href.indexOf('#'));

                    let targetElement = $(targetId),
                        targetPosition = targetElement.offset().top - offset;

                    $('html, body').animate({
                        scrollTop: targetPosition
                    }, 700);

                    // Remove 'active' class from all links
                    $('.nav-link').removeClass('active');
                    // Add 'active' class to the clicked link
                    $(this).addClass('active');

                    // Collapse the navbar
                    $('.navbar-collapse').collapse('hide');
                });

                function updateActiveLink() {
                    let currentSection = null;

                    $('section').each(function () {
                        const sectionTop = $(this).offset().top - offset - 10;
                        const sectionBottom = sectionTop + $(this).outerHeight();

                        if ($(window).scrollTop() >= sectionTop && $(window).scrollTop() < sectionBottom) {
                            currentSection = $(this).attr('id');
                        }
                    });

                    if (currentSection) {
                        $('.nav-link').removeClass('active');
                        $(`.nav-link[href$="#${currentSection}"]`).addClass('active');
                    }
                }

                // Listen for scroll events
                $(window).on('scroll', updateActiveLink);

                // Initial call to set the active link on page load
                updateActiveLink();
            });

            /*

            $('.lg_fr').addClass('d-none');
            $('.lg_en').removeClass('d-none');


             */

        </script>
    @endpush


</x-front-layout>
