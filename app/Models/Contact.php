<?php

namespace App\Models;

class Contact extends Base
{
    //
    protected $appends = ['defaultOrganization', 'defaultAddress'];
    
    //
    public function path() {
        return '/contacts/' . $this->id;
    }

    public function organizations()
    {
        return $this->belongsToMany(Organization::class, 'contact_organization')->withTimestamps();
    }

    public function addresses()
    {
        return $this->belongsToMany(Address::class, 'contact_address')->withTimestamps();
    }

    public function phonenumbers()
    {
        return $this->belongsToMany(PhoneNumber::class, 'contact_phonenumber')->withTimestamps();
    }

    public function name()
    {
        return $this->belongsTo(Name::class);
    }

    public function getDefaultAddressAttribute()
    {
	return $this->addresses()->first();
    }

    public function getDefaultOrganizationAttribute()
    {
	return $this->organizations()->first();
    }

    public function getDefaultPhoneNumberAttribute()
    {
	return $this->phonenumbers()->first();
    }

    public function addOrganization(Organization $organization)
    {
	$ret = $this->organizations()->save($organization);

	$this->increment('organizations_count');
	$organization->increment('contacts_count');

	return $ret;
    }

    public function removeOrganization(Organization $organization)
    {
	$ret = $this->organizations()->detach($organization->id);

	$this->decrement('organizations_count');
	$organization->decrement('contacts_count');

	return $ret;
    }
}
