<?php

namespace App\Models;

class Organization extends Base
{
    //
    public static function boot()
    {
        parent::boot();

	static::creating(function($organization) {
	     if(!$organization->name_alpha) {
	         $organization->name_alpha = Organization::createAlphaName($organization->name_display);
	     }
	});
    }

    //
    public function path()
    {
        return '/organizations/' . $this->id;
    }

    public function website()
    {
	return $this->belongsTo(Website::class);
    }

    public function contacts()
    {
        return $this->belongsToMany(Contact::class, 'contact_organization')->withTimestamps();
    }

    public static function createAlphaName(string $name)
    {
        $pieces = explode(' ', $name);

	$head = '';
	$tail = '';

	if(count($pieces) <= 2) {
	    if(ucfirst($pieces[0]) == 'The') {
	        $head = $pieces[1];
	    } else {
	        $head = $name;
	    }
	} elseif(count($pieces) == 3) {
	    if($pieces[1] == 'of') {
	        $head = $pieces[2];
		$tail = ', ' . $pieces[0] . ' ' . $pieces[1];
	    } else {
	        $head = $name;
	    }
	} elseif(count($pieces) == 4) {
	    if(ucfirst($pieces[0]) == 'The' && $pieces[2] == 'of') {
	        $head = $pieces[3];
		$tail = ', ' . $pieces[1] . ' ' . $pieces[2];
	    } else {
	        $head = $name;
	    }
	} else {
	    $head = $name;
	}

        return $head . $tail;
    }

    public function addContact(Contact $contact)
    {
	$ret = $this->contacts()->save($contact);

	$this->increment('contacts_count');
	$contact->increment('organizations_count');

	return $ret;
    }

    public function removeContact(Contact $contact)
    {
	$ret = $this->contacts()->save($contact);

	$this->decrement('contacts_count');
	$contact->decrement('organizations_count');

	return $ret;
    }
}
