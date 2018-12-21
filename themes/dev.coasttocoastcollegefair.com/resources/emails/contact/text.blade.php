Thanks for Contaction Us

Dear {{ $issue->creator->contact->name->nickname ?? 'Contact' }},

Thanks for contacting us.  Here is the info you submitted:

Name:
{{ $issue->creator->contact->name->fullName }}
			  
Email:
{{ $issue->creator->email }}

@if($issue->creator->contact->defaultPhone)
Phone:
{{ $issue->creator->contact->defaultPhone }}
@endif
			  
Message:
{{ $issue->content }}

We will get back to you shortly.

Anne Exum
C2C Coordinator

Copyright &copy; {{ date('Y') }} Coast-to-Coast College Fair.  All rights reserved.

coasttocoastcollegefair.com