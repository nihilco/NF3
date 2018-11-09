Coast-to-Coast College Fair

Welcome to {{ config('app.name') }}

Thanks for registering at {{ config('app.website')->hostname }}.

For your records, here is a copy of the data you provided when you signed up on our website.  We will not spam your inbox, but we will notify you for administrative purposes.  Please keep this email for future reference.

Email: {{ $user->email }}
Birthday: {{ $user->dob_at->toFormattedDateString() }}

Copyright &copy; {{ date('Y') }} {{ config('app.name') }}.  All rights reserved.

unsubscribe
preferences
{{ config('app.website')->hostname }}	