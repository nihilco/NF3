<?php

namespace App\Library\Torn;

class Api
{
    protected $api_url = 'https://api.torn.com';
    protected $api_key;

    public $palyer;
    public $company;
    public $faction;

    public $USER_SELECTIONS = [
        'networth',
	'bazaar',
	'display',
	'inventory',
	'hof',
	'travel',
	'events',
	'messages',
	'education',
	'medals',
	'honors',
	'notifications',
	'personalstats',
	'workstats',
	'crimes',
	'icons',
	'cooldowns',
	'money',
	'perks',
	'battlestats',
	'bars',
	'profile',
	'basic',
	'attacks',
	'attacksfull',
	'stocks',
	'properties',
	'jobpoints',
	'merits',
	'refills',
	'discord',
	'gym',
    ];

    public $COMPANY_SELECTIONS = [
        'profile',
	'detailed',
	'stock',
	'employees',
	'news',
	'newsfull',
    ];

    public $FACTION_SELECTIONS = [
        'basic',
	'chain',
	'currency',
	'weapons',
	'armor',
	'temporary',
	'medical',
	'drugs',
	'boosters',
	'cesium',
	'mainnews',
	'mainnewsfull',
	'attacknews',
	'attacknewsfull',
	'armorynews',
	'armorynewsfull',
	'donationnews',
	'donationnewsfull',
	'crimes',
	'attacks',
	'attacksfull',
	'upgrades',
	'stats',
	'donations',
	'chains',
    ];

    public $TORN_SELECTIONS = [
         'items',
	 'medals',
	 'honors',
	 'organisedcrimes',
	 'gyms',
	 'companies',
	 'properties',
	 'education',
	 'stats',
	 'stocks',
	 'factiontree',
	 'timestamp'
    ];

    public function __construct()
    {
        $this->player = \App\Models\Torn\Player::find(1);

	$this->api_key = $this->player->api_key;	
    }

    public function user($torn_id = null)
    {
        $url = $this->api_url . '/user';
	if($torn_id) {
	    $url .= '/' . $torn_id;
	}
	$url .= '?selections=networth&key=' . $this->api_key;

	$json = json_decode(file_get_contents($url), true);

	return $json;
    }

    public function company($torn_id)
    {
    
    }

    public function faction($torn_id)
    {
        $url = $this->api_url . '/faction/' . $torn_id;

	$url .= '?selections=basic&key=' . $this->api_key;

	$json = json_decode(file_get_contents($url), true);

	return $json;
    }

    public function torn()
    {
        $url = $this->api_url . '/torn/';

	$url .= '?selections=items&key=' . $this->api_key;

	$json = json_decode(file_get_contents($url), true);

	return $json;	
    }
    
}