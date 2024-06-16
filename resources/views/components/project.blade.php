<div class="col-sm-4">
    <div class="ab-card shadow p-4 bg-body-tertiary rounded">

        <div class="row align-items-center">
            <div class="col-4">
                <img loading="lazy" src="{{ $input['logo'] }}" width="{{ $input['logo_width'] ?? 60 }}" alt="{{ $input['account'] }}"/>
            </div>
            <div class="col-8 text-sm-end">
                <strong>{{ $input['account'] }}</strong>
            </div>
        </div>

        <p class="my-3">
            {{ $input['text'] }}
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
        $(function() {
            $('.row.projects .ab-card').click(function() {
               window.open($(this).find('a').attr('href'), '_blank');
            });
        });
    </script>
@endpushonce
