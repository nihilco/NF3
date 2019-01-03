Coast-to-Coast College Fair

Registration Confirmation

Dear {{ $user->contact->name->first }},

The Coast to Coast College Fair will be held at the Chattanooga Convention Center on {{ $event->starts_at->format('l, F jS, Y') }} from 6:30pm to 8:30pm - be sure to save the date! Dinner will be provided before hand and for those needing lodging, a block of rooms is reserved at the downtown Chattanooga Marriott:

https://www.marriott.com/meeting-event-hotels/group-corporate-travel/groupCorp.mi?resLinkData=Coast%20to%20Coast%20College%20Fair%5Echadt%60ctcctca%7Cctcctcb%7Cctcctcf%60149.00%60USD%60false%605%603/4/19%603/6/19%6002/11/19&app=resvlink&stop_mobi=yes

Payment Details

Name: {{ $user->contact->name->fullName }}
Organization: {{ $user->contact->defaultOrganization->name_display }}
Amount: ${{ number_format( 150 + ($additional * 25) + (($scanner=='yes') ? 80 : 0), 2 ) }}
Reps: {{ 1 + $additional }}
Scanner: {{ ucfirst($scanner) }}

Please make checks payable to "Chattanooga's Coast-to-Coast College Fair" and mail to:

Coast-to-Coast College Fair
Attn: Anne Exum
P.O. Box 4221
Chattanooga, TN 37405

Thank you,
Anne Exum
Fair Coordinator


Additional Information

For more information, or if you have any questions or concerns, about the Fair, please contact us directly. Look here to download our W-9:

{{ url('/files/2018_C2C_W9.pdf') }}

Contact Us

Coast-to-Coast College Fair
P.O. Box 4221
Chattanooga, TN 37405
(423) 505-4036


Copyright &copy; {{ date('Y') }} {{ config('app.name') }}.  All rights reserved.

www.coasttocoastcollegefair.com