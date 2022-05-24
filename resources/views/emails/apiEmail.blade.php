@component('mail::layout')
{{-- Header --}}
@slot('header')
@component('mail::header', ['url' => config('app.url')])
{{ $item['image'] }}
@endcomponent
@endslot

{{-- Body --}}
# Bienvenue {{ $item['name'] }},

{{ $item['message'] }}

@component('mail::button', ['url' => $item['url1'] ])
{{ $item['url1'] }}
@endcomponent

@component('mail::button', ['url' => $item['url2'] ])
{{ $item['url2'] }}
@endcomponent

@component('mail::button', ['url' => $item['url3'] ])
{{ $item['url3'] }}
@endcomponent


Merci,<br>
{{ config('app.name') }}

{{-- Subcopy --}}
@isset($subcopy)
@slot('subcopy')
@component('mail::subcopy')
{{ $subcopy }}
@endcomponent
@endslot
@endisset

{{-- Footer --}}
@slot('footer')
@component('mail::footer')
© {{ date('Y') }} {{ config('app.name') }}. @lang('All rights reserved.')
@endcomponent
@endslot
@endcomponent