@component('mail::message')
# Welcome to Gs Group

Manage your events with us.

@component('mail::button', ['url' => 'https://gsgroup.co.in'])
Learn More
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
