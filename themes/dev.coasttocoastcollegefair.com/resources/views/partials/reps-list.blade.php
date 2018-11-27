      <h3 class="title">Who is coming?</h3>
      <ul class="job-list custom-list-style">
        @php
	    $event = \App\Models\Event::find(4);
	    $orgs = [];
	    foreach($event->participants as $participant)
	    {
	        $orgs[] = $participant->owner->contact->defaultOrganization->name_display;
	    }
	    $rand_keys = array_rand($orgs, 4);
	@endphp
        <li>{{ $orgs[$rand_keys[0]] }}</li>
        <li>{{ $orgs[$rand_keys[1]] }}</li>
        <li>{{ $orgs[$rand_keys[2]] }}</li>
        <li>{{ $orgs[$rand_keys[3]] }}</li>
      </ul>
      <a class="btn btn-primary" href="/representatives/this-year">Explore Representatives</a>