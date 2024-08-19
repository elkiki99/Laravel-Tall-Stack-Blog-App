<x-mail::message>
# Introduction

{{-- Gazzete! {{ $name }} has contacted you.
Message:
    ''

<x-mail::button :url="$url">
View user
</x-mail::button> --}}

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
