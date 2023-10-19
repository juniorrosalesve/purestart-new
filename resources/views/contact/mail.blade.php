@component('mail::message')
@if($type == 'suscribe')
# New suscribe <small>({{ date('d-m-Y h:i:s') }})</small>
@else
# New contact <small>({{ date('d-m-Y h:i:s') }})</small>
@endif

@if($type == 'suscribe')
@component('mail::table')
| Fullname | Email |
| ---- |:-----:| -----:|
| {{ $data['firstname'] }}      | {{ $data['email'] }}   |
@endcomponent
@else
@component('mail::table')
| Name | Email | Phone | Business |
| ---- |:-----:| -----:| --------:|
| {{ $data['name'] }}      | {{ $data['email'] }}      | {{ $data['phone'] }}      | {{ $data['business'] }}
@endcomponent
@endif

@endcomponent