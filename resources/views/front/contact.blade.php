<x-front-layout>
    <div class="container">

        <style>
            h3 {
                margin-bottom: 40px;
            }

            button {

                display: inline-flex;
                align-items: center;
                justify-content: center;
                text-decoration: none;
                border: none;
                line-height: 1rem;
                transition: 0.25s;
                box-shadow: none;
                cursor: pointer;
                padding: 1rem 1.5rem;
                border-radius: 4px;
                background-color: var(--base-1);
                color: white;
            }

            button:hover {

                background-color: #071430;
            }
            .messages {
                margin-bottom: 30px;
            }
        </style>

        <x-form form="contact"/>
    </div>


</x-front-layout>
