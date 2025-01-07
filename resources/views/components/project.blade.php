<div class="col-sm-4">
    <div class="ab-card shadow p-4 bg-body-tertiary rounded">

        <div class="row align-items-center">
            <div class="col-4">
                <img loading="lazy" src="{{ $input['logo'] }}" width="{{ $input['logo_width'] ?? 60 }}"
                     alt="{{ $input['account']['fr'] }}"/>
            </div>
            <div class="col-8 text-sm-end">
                 <span class="lg_fr"><strong>{{ $input['account']['fr'] }}</strong></span>
                <span class="lg_en d-none">{{ $input['account']['en'] }}</span>
            </div>
        </div>

        <p class="my-3">
            <span class="lg_fr">{{ $input['text']['fr'] }}</span>
            <span class="lg_en d-none">{{ $input['text']['en'] }}</span>
        </p>
        @if(isset($input['tag']))
            <div class="tags mb-4">
                @foreach($input['tag'] as $tag)
                    <span class="btn btn-sm">{{ $tag }}</span>
                @endforeach
            </div>
        @endif

        <a href="{{ $input['web'] }}" target="_blank">{{ $input['web'] }}</a>

    </div>
</div>
@pushonce('js')
    <script>
        $(function () {
            $('.row.projects .ab-card').click(function () {
                window.open($(this).find('a').attr('href'), '_blank');
            });
        });
    </script>
@endpushonce
