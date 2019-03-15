@component('mail::message')
# Attention Dear User!

**Thank You for Signing Up!**<br>
We Appreciate your concern to our fellow human. Sadly, We have notice that your PRC License is about to EXPIRE on MM/DD/YYYY.
If you have not renewed this account will be blocked. 

@component('mail::button', ['url' => 'http://localhost:8000/'])
Update Account
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
