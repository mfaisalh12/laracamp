@component('mail::message')
# Register Camp: {{$checkout->Camp->title}}

Hi, {{$checkout->User->name}}
<br>
Thank you for register on <b>{{$checkout->Camp->title}}</b>, with a price of {{$checkout->Camp->price}}k, please see payment instruction by click the button bellow.

@component('mail::button', ['url' => route('user.dashboard', $checkout->id)])
My Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
