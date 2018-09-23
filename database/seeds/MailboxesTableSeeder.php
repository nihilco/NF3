<?php

use Illuminate\Database\Seeder;

class MailboxesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	$domains = \App\Models\Domain::all();
	
        //
	factory(\App\Models\Mailbox::class)->create([
	    'domain_id' => $domains->where('domain', 'nihil.co')->first()->id,
	    'email' => 'administrator@nihil.co',
	    'password' => bcrypt(env('MY_PASSWORD')),
	    'active' => true,
	]);

        //
	factory(\App\Models\Mailbox::class)->create([
	    'domain_id' => $domains->where('domain', 'nihil.co')->first()->id,
	    'email' => 'hostmaster@nihil.co',
	    'password' => bcrypt(env('MY_PASSWORD')),
	    'active' => true,
	]);

        //
	factory(\App\Models\Mailbox::class)->create([
	    'domain_id' => $domains->where('domain', 'nihil.co')->first()->id,
	    'email' => 'webmaster@nihil.co',
	    'password' => bcrypt(env('MY_PASSWORD')),
	    'active' => true,
	]);

        //
	factory(\App\Models\Mailbox::class)->create([
	    'domain_id' => $domains->where('domain', 'nihil.co')->first()->id,
	    'email' => 'postmaster@nihil.co',
	    'password' => bcrypt(env('MY_PASSWORD')),
	    'active' => true,
	]);

        //
	factory(\App\Models\Mailbox::class)->create([
	    'domain_id' => $domains->where('domain', 'nihil.co')->first()->id,
	    'email' => 'security@nihil.co',
	    'password' => bcrypt(env('MY_PASSWORD')),
	    'active' => true,
	]);

        //
	factory(\App\Models\Mailbox::class)->create([
	    'domain_id' => $domains->where('domain', 'nihil.co')->first()->id,
	    'email' => 'contact@nihil.co',
	    'password' => bcrypt(env('MY_PASSWORD')),
	    'active' => true,
	]);

        //
	factory(\App\Models\Mailbox::class)->create([
	    'domain_id' => $domains->where('domain', 'nihil.co')->first()->id,
	    'email' => 'uriah@nihil.co',
	    'password' => bcrypt(env('MY_PASSWORD')),
	    'active' => true,
	]);

        //
	factory(\App\Models\Mailbox::class)->create([
	    'domain_id' => $domains->where('domain', 'uclemmer.com')->first()->id,
	    'email' => 'uriah@uclemmer.com',
	    'password' => bcrypt(env('MY_PASSWORD')),
	    'active' => true,
	]);
    }
}
