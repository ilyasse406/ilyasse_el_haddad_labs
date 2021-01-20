@component('mail::message')
# Bienvenue {{ $user->name }}

merci de vous etre enregistré avec l'adresse suivante {{ $user->email }}.
@endcomponent
