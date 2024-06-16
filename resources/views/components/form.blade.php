@php
    $config = collect(config('forms'))->where('name', $form)->first();

@endphp

    <form class="form-{{ $form }}" action="{{ route('form', $form) }}" method="post" id="form-{{ $form }}">
        @csrf
        <h3>{!! $label ?: __('forms.labels.'.$form) !!}</h3>

        <x-aboleon-framework::response-messages/>

        <div class="row">
            @foreach($config['fields'] as $field)
                <div class="col {{ $field['grid'] }} mb-4">
                    @php
                        $use_as_label = $field['label'] ?? $field['name'];
                        $label = array_key_exists($use_as_label, trans('forms')) ?  __('forms.'.$use_as_label) : $use_as_label;
                    @endphp
                    @switch($field['type'])
                        @case('textarea')
                            <x-aboleon-inputable::textarea :name="$field['name']" :label="$label" :value="old($field['name'])"/>
                            @break
                        @case('radio')
                            <x-aboleon-inputable::radio :name="$field['name']" :label="$label" :values="$field['values']" :affected="old($field['name'])"/>
                            @break
                        @case('checkbox')
                            <x-aboleon-inputable::checkbox :name="$field['name']" :label="$label" value="1" :affected="null"/>
                            @break
                        @case('select')
                            <x-aboleon-inputable::select :name="$field['name']" :label="$label" :values="$field['values']" :affected="null" />
                            @break
                        @default
                            <x-aboleon-inputable::input type="{{ $field['type'] }}" :name="$field['name']" :label="$label" :value="old($field['name'])" autocomplete="off"/>
                    @endswitch
                </div>
            @endforeach
            <div class="col text-center {{ $config['submit']['grid'] ?? 'col-12' }}">
                <button form="form-{{ $form }}" type="submit">{{ $btn ?: __('forms.save') }}</button>
            </div>
        </div>
    </form>
