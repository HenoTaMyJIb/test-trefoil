@component('mail::message')
# trefoil.ee tagasiside

Saabunud uus tagasiside

Nimi: {{$name}}

E-post: {{$email}}

Sõnum:

{{$message}}

<br>
{{ config('app.name') }}
@endcomponent
