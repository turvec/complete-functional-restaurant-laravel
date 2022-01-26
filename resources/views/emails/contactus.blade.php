@component('mail::message')
{{$name}}

{{$comments}}

@component('mail::button', ['url' => ''])
{{$phone}}
@endcomponent

Thanks,{{$email}}<br>
{{ config('app.name') }}
@endcomponent
