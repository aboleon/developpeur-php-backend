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
                </div>
                <div class="col-sm-5">
                    <span class="job-title">Developpeur Full Stack PHP</span>
                </div>
            </div>
            <h2 class="lead">Développement et conception d'applications web pour startups et grandes entreprises
            </h2>

            <div class="aboleon-framework-line-separator my-4"></div>

            @include('static.logos')

            <div class="aboleon-framework-line-separator my-4"></div>


            @include('static.hello')
        </section>
        @include('static.stack')
        @include('static.parcours')
        @include('static.projects')


    </div>


    <br><br>


    <footer class="container mb-5">
        <span style="font-size: 16px;">Code & Design : Andrian Mihailov &copy; {{ date('Y') }}</span>
    </footer>

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

        </script>
    @endpush


</x-front-layout>
