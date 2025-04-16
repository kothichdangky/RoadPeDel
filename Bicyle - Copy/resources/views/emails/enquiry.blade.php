<x-mail::message>
# Introduction

hello bạn

<h3>Name: {{$data['name']}}</h3>
<h3>Email: {{$data['email']}}</h3>
<h3>Phone: {{$data['phone']}}</h3>
<h3>Message: {{$data['message']}}</h3>
<x-mail::button :url="$url">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
