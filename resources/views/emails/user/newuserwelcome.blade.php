@component('mail::message')
# Welcome to this App {{ $user->name }}.

Remember to change your **pasword**.!

@component('mail::panel')
	Your email is: {{ $user->email }}
@endcomponent

@component('mail::button', ['url' => ''])
View my Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
