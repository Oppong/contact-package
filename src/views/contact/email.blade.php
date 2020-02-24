@component('mail::message')
# Introduction

this is the senders email {{ $email}}
The body of your message.
{{$content}}

This is senders name
{{$name}}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
