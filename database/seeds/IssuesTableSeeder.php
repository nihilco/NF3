<?php

use Illuminate\Database\Seeder;

class IssuesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = App\Models\Type::all();
	$typesTypes = $types->where('grouping', App\Models\Issue::class . ":Type");
	$typesResolutions = $types->where('grouping', App\Models\Issue::class . ":Resolution");
	$typesStatuses = $types->where('grouping', App\Models\Issue::class . ":Status");
	$typesPriorities = $types->where('grouping', App\Models\Issue::class . ":Priority");
	$wid = App\Models\Website::where('hostname', 'dev.nihil.co')->first()->id;

	//
	//  ISSUES
	//
	$issue = factory(\App\Models\Issue::class)->create([
	    'website_id' => $wid,
	    'subject' => 'Setup Second Web Server',
	    'slug' => 'setup-second-web-server',
	    'content' => 'Setup a master-master web server.',
	    'assignee_id' => 1,
	    'type_id' => $typesTypes->where('name', 'Task')->first()->id,
	    'status_type_id' => $typesStatuses->where('name', 'New')->first()->id,
	    'priority_type_id' => $typesPriorities->where('name', 'Medium')->first()->id,
	    'resolution_type_id' => $typesResolutions->where('name', 'Unresolved')->first()->id,
	]);

	$issue = factory(\App\Models\Issue::class)->create([
	    'website_id' => $wid,
	    'subject' => 'Setup Second Database Server',
	    'slug' => 'setup-second-database-server',
	    'content' => 'Setup a master-master database server.',
	    'assignee_id' => 1,
	    'type_id' => $typesTypes->where('name', 'Task')->first()->id,
	    'status_type_id' => $typesStatuses->where('name', 'New')->first()->id,
	    'priority_type_id' => $typesPriorities->where('name', 'Medium')->first()->id,
	    'resolution_type_id' => $typesResolutions->where('name', 'Unresolved')->first()->id,
	]);

	$issue = factory(\App\Models\Issue::class)->create([
	    'website_id' => $wid,
	    'subject' => 'Setup Email Servers',
	    'slug' => 'setup-email-server',
	    'content' => 'Setup master-master email servers.',
	    'assignee_id' => 1,
	    'type_id' => $typesTypes->where('name', 'Task')->first()->id,
	    'status_type_id' => $typesStatuses->where('name', 'New')->first()->id,
	    'priority_type_id' => $typesPriorities->where('name', 'Medium')->first()->id,
	    'resolution_type_id' => $typesResolutions->where('name', 'Unresolved')->first()->id,
	]);

	$issue = factory(\App\Models\Issue::class)->create([
	    'website_id' => $wid,
	    'subject' => 'Migrate Taraloka Email to New Servers',
	    'slug' => 'migrate-taraloka-email-to-new-servers',
	    'content' => 'Migrate Taraloka Email to new servers.',
	    'assignee_id' => 1,
	    'type_id' => $typesTypes->where('name', 'Task')->first()->id,
	    'status_type_id' => $typesStatuses->where('name', 'New')->first()->id,
	    'priority_type_id' => $typesPriorities->where('name', 'Medium')->first()->id,
	    'resolution_type_id' => $typesResolutions->where('name', 'Unresolved')->first()->id,
	]);

	$issue = factory(\App\Models\Issue::class)->create([
	    'website_id' => $wid,
	    'subject' => 'Install Website Analytics',
	    'slug' => 'install-website-analytics',
	    'content' => 'Install website analytics.',
	    'assignee_id' => 1,
	    'type_id' => $typesTypes->where('name', 'Task')->first()->id,
	    'status_type_id' => $typesStatuses->where('name', 'New')->first()->id,
	    'priority_type_id' => $typesPriorities->where('name', 'Medium')->first()->id,
	    'resolution_type_id' => $typesResolutions->where('name', 'Unresolved')->first()->id,
	]);

	$issue = factory(\App\Models\Issue::class)->create([
	    'website_id' => $wid,
	    'subject' => 'Cancel All AWS Resources',
	    'slug' => 'cancel-all-aws-resources',
	    'content' => 'Cancel all AWS resources.',
	    'assignee_id' => 1,
	    'type_id' => $typesTypes->where('name', 'Task')->first()->id,
	    'status_type_id' => $typesStatuses->where('name', 'New')->first()->id,
	    'priority_type_id' => $typesPriorities->where('name', 'Medium')->first()->id,
	    'resolution_type_id' => $typesResolutions->where('name', 'Unresolved')->first()->id,
	]);

	$issue = factory(\App\Models\Issue::class)->create([
	    'website_id' => $wid,
	    'subject' => 'Cancel ALl EC2 Instances',
	    'slug' => 'cancel-all-ec2-instances',
	    'content' => 'Cancel all EC2 instances.',
	    'assignee_id' => 1,
	    'type_id' => $typesTypes->where('name', 'Task')->first()->id,
	    'status_type_id' => $typesStatuses->where('name', 'New')->first()->id,
	    'priority_type_id' => $typesPriorities->where('name', 'Medium')->first()->id,
	    'resolution_type_id' => $typesResolutions->where('name', 'Unresolved')->first()->id,
	]);

	$issue = factory(\App\Models\Issue::class)->create([
	    'website_id' => $wid,
	    'subject' => 'Cancel All Route 53 Zones',
	    'slug' => 'cancel-all-route-53-zones',
	    'content' => 'Cancel all Route 53 zones.',
	    'assignee_id' => 1,
	    'type_id' => $typesTypes->where('name', 'Task')->first()->id,
	    'status_type_id' => $typesStatuses->where('name', 'New')->first()->id,
	    'priority_type_id' => $typesPriorities->where('name', 'Medium')->first()->id,
	    'resolution_type_id' => $typesResolutions->where('name', 'Unresolved')->first()->id,
	]);

	$issue = factory(\App\Models\Issue::class)->create([
	    'website_id' => $wid,
	    'subject' => 'Cancel Hostgator Reseller Account',
	    'slug' => 'cancel-hostgator-reseller-account',
	    'content' => 'Cancel Hostgator reseller account.',
	    'assignee_id' => 1,
	    'type_id' => $typesTypes->where('name', 'Task')->first()->id,
	    'status_type_id' => $typesStatuses->where('name', 'New')->first()->id,
	    'priority_type_id' => $typesPriorities->where('name', 'Medium')->first()->id,
	    'resolution_type_id' => $typesResolutions->where('name', 'Unresolved')->first()->id,
	]);

	$issue = factory(\App\Models\Issue::class)->create([
	    'website_id' => $wid,
	    'subject' => 'Migrate Schows Estate Sales to new web server',
	    'slug' => 'migrate-schows-estate-sales-to-new-web-server',
	    'content' => 'Migrate Schows Estate Sales to new web server..',
	    'assignee_id' => 1,
	    'type_id' => $typesTypes->where('name', 'Task')->first()->id,
	    'status_type_id' => $typesStatuses->where('name', 'New')->first()->id,
	    'priority_type_id' => $typesPriorities->where('name', 'Medium')->first()->id,
	    'resolution_type_id' => $typesResolutions->where('name', 'Unresolved')->first()->id,
	]);

	$issue = factory(\App\Models\Issue::class)->create([
	    'website_id' => $wid,
	    'subject' => 'Migrate Crosby Jeep Club to new web server',
	    'slug' => 'migrate-crosby-jeep-club-to-new-web-server',
	    'content' => 'Migrate Crosby Jeep CLub to new web server.',
	    'assignee_id' => 1,
	    'type_id' => $typesTypes->where('name', 'Task')->first()->id,
	    'status_type_id' => $typesStatuses->where('name', 'New')->first()->id,
	    'priority_type_id' => $typesPriorities->where('name', 'Medium')->first()->id,
	    'resolution_type_id' => $typesResolutions->where('name', 'Unresolved')->first()->id,
	]);        
    }
}
