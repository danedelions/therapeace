@component('mail::message')
# Welcome to theraPeace

**Thank You for Signing Up!**<br>
We Appreciate your concern to our fellow human. Please do contact us for more concerns and queries.

@component('mail::button', ['url' => 'http://localhost:8000/'])
View My Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
