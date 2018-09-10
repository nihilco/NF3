<?php

use Illuminate\Database\Seeder;

class SupportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	//
        // TICKET TYPES
	//
	$typeTicket = factory(\App\Models\Type::class)->create([
	    'name' => 'Ticket',
	    'slug' => 'ticket',
	    'description' => 'Ticket Type description.',
	]);

	$typeClaim = factory(\App\Models\Type::class)->create([
	    'parent_id' => $typeTicket->id,
	    'name' => 'Claim',
	    'slug' => 'claim',
	    'description' => 'A client, customer, or user has a question about something.',
	]);

	$typeTypo = factory(\App\Models\Type::class)->create([
	    'parent_id' => $typeTicket->id,
	    'name' => 'Typo',
	    'slug' => 'typo',
	    'description' => 'Learn to spel, dummy!',
	]);

	$typeImprovement = factory(\App\Models\Type::class)->create([
	    'parent_id' => $typeTicket->id,
	    'name' => 'Improvement',
	    'slug' => 'improvement',
	    'description' => 'This could be an improvement or enhancement to an existing feature or task.',
	]);

	$typeBug = factory(\App\Models\Type::class)->create([
	    'parent_id' => $typeTicket->id,
	    'name' => 'Bug',
	    'slug' => 'bug',
	    'description' => 'This is an issue which impairs or prevents the function of the product.',
	]);

	$typeTask = factory(\App\Models\Type::class)->create([
	    'parent_id' => $typeTicket->id,
	    'name' => 'Task',
	    'slug' => 'task',
	    'description' => 'Action that needs to be performed or executed not necessarily to fix a problem, but more to better a piece of the whole.',
	]);

	$typeTechnical = factory(\App\Models\Type::class)->create([
	    'parent_id' => $typeTicket->id,
	    'name' => 'Technical',
	    'slug' => 'technical',
	    'description' => 'A technical task.',
	]);

	$typeStory = factory(\App\Models\Type::class)->create([
	    'parent_id' => $typeTicket->id,
	    'name' => 'Story',
	    'slug' => 'story',
	    'description' => 'This is an issue where there are a distinct order, or collection, of events which lead to a particular problem.',
	]);

	$typeEpicStory = factory(\App\Models\Type::class)->create([
	    'parent_id' => $typeTicket->id,
	    'name' => 'Epic Story',
	    'slug' => 'epic-story',
	    'description' => 'This issue is too big and elaborate to handle as is; it needs to be broken down into individual parts.',
	]);

	$typeNewFeature = factory(\App\Models\Type::class)->create([
	    'parent_id' => $typeTicket->id,
	    'name' => 'New Feature',
	    'slug' => 'new-feature',
	    'description' => 'Take this idea and run with it; we want something completely new here.',
	]);

	$typeProject = factory(\App\Models\Type::class)->create([
	    'parent_id' => $typeTicket->id,
	    'name' => 'Project',
	    'slug' => 'project',
	    'description' => 'Multi-step collection of items to complete a goal.',
	]);

	$typeCase = factory(\App\Models\Type::class)->create([
	    'parent_id' => $typeTicket->id,
	    'name' => 'Case',
	    'slug' => 'case',
	    'description' => 'Legal Case',
	]);

	//
	// RESOLUTION TYPES
	//
	$typeResolution = factory(\App\Models\Type::class)->create([
	    'name' => 'Resolution',
	    'slug' => 'resolution',
	    'description' => 'Resolution Type description.',
	]);

	$typeResolutionUnresolved = factory(\App\Models\Type::class)->create([
	    'parent_id' => $typeResolution->id,
	    'name' => 'Unresolved',
	    'slug' => 'unresolved',
	    'description' => 'No solution has been discovered for the issue at this time; this issue is unresolved.',
	]);

	$typeResolutionResolved = factory(\App\Models\Type::class)->create([
	    'parent_id' => $typeResolution->id,
	    'name' => 'Resolved',
	    'slug' => 'resolved',
	    'description' => 'This issue is resolved - a solution has been found for this issue.',
	]);

	$typeResolutionNeedsMoreInfo = factory(\App\Models\Type::class)->create([
	    'parent_id' => $typeResolution->id,
	    'name' => 'Needs More Info',
	    'slug' => 'needs-more-info',
	    'description' => 'What is going on here?  We need more information to diagnose this issue.',
	]);

	$typeResolutionDuplicate = factory(\App\Models\Type::class)->create([
	    'parent_id' => $typeResolution->id,
	    'name' => 'Duplicate',
	    'slug' => 'duplicate',
	    'description' => 'This issue is a duplicate of a previously submitted issue.  Please refer back to the parent issue for more details.',
	]);

	//
	// STATUS TYPES
	//
	$typeStatus = factory(\App\Models\Type::class)->create([
	    'name' => 'Status',
	    'slug' => 'status',
	    'description' => 'Status Type description.',
	]);

	$typeStatusNew = factory(\App\Models\Type::class)->create([
	    'parent_id' => $typeStatus->id,
	    'name' => 'New',
	    'slug' => 'new',
	    'description' => 'This is a newly reported issue and is awaiting processing and assignment.',
	]);

	$typeStatusFixed = factory(\App\Models\Type::class)->create([
	    'parent_id' => $typeStatus->id,
	    'name' => 'Fixed',
	    'slug' => 'fixed',
	    'description' => 'Action has been taken to correct this issue which is awaiting reporter verification.',
	]);

	$typeStatusInProgress = factory(\App\Models\Type::class)->create([
	    'parent_id' => $typeStatus->id,
	    'name' => 'In Progress',
	    'slug' => 'in-progress',
	    'description' => 'The issue is actively being worked on.',
	]);

	$typeStatusReopened = factory(\App\Models\Type::class)->create([
	    'parent_id' => $typeStatus->id,
	    'name' => 'Reopened',
	    'slug' => 'reopened',
	    'description' => 'If a previous resolution fails, the issue is reassigned and reopened.',
	]);

	$typeStatusOpen = factory(\App\Models\Type::class)->create([
	    'parent_id' => $typeStatus->id,
	    'name' => 'Open',
	    'slug' => 'open',
	    'description' => 'The issue has been assigned, opened, and is ready for the assignee to start work.',
	]);

	$typeStatusClosed = factory(\App\Models\Type::class)->create([
	    'parent_id' => $typeStatus->id,
	    'name' => 'Closed',
	    'slug' => 'closed',
	    'description' => 'This issue is considered finished; the resolution is correct.',
	]);

	//
	// PRIORITY TYPES
	//
	$typePriority = factory(\App\Models\Type::class)->create([
	    'name' => 'Priority',
	    'slug' => 'priority',
	    'description' => 'Priority Type description.',
	]);

	$typePriorityCritical = factory(\App\Models\Type::class)->create([
	    'parent_id' => $typePriority->id,
	    'name' => 'Critical',
	    'slug' => 'critical',
	    'description' => 'The issue blocks development and/or testing work; production could not run because of this critical error.',
	]);

	$typePriorityHigh = factory(\App\Models\Type::class)->create([
	    'parent_id' => $typePriority->id,
	    'name' => 'High',
	    'slug' => 'high',
	    'description' => 'The issue causes the system to crash, the loss of data, or severe memory leaks which makes it our highest priority.',
	]);

	$typePriorityMedium = factory(\App\Models\Type::class)->create([
	    'parent_id' => $typePriority->id,
	    'name' => 'Medium',
	    'slug' => 'medium',
	    'description' => 'The issue causes a major loss of function which, while it sounds bad, is usually only a medium priority.',
	]);

	$typePriorityLow = factory(\App\Models\Type::class)->create([
	    'parent_id' => $typePriority->id,
	    'name' => 'Low',
	    'slug' => 'low',
	    'description' => 'The low priority issue causes a minor loss of function or presents another problem with an easy work around.',
	]);

	$typePriorityTrivial = factory(\App\Models\Type::class)->create([
	    'parent_id' => $typePriority->id,
	    'name' => 'Trivial',
	    'slug' => 'trivial',
	    'description' => 'This issue is simply a cosmetic problem like a misspelled word or block misalignment - its trivial.',
	]);

	//
	//  TICKETS
	//
	$ticket = factory(\App\Models\Ticket::class)->create([
	    'subject' => 'Setup Second Web Server',
	    'slug' => 'setup-second-web-server',
	    'content' => 'Setup a master-master web server.',
	    'assignee_id' => 1,
	    'type_id' => $typeTask->id,
	    'status_type_id' => $typeStatusNew->id,
	    'priority_type_id' => $typePriorityMedium->id,
	    'resolution_type_id' => $typeResolutionUnresolved->id,
	]);

	$ticket = factory(\App\Models\Ticket::class)->create([
	    'subject' => 'Setup Second Database Server',
	    'slug' => 'setup-second-database-server',
	    'content' => 'Setup a master-master database server.',
	    'assignee_id' => 1,
	    'type_id' => $typeTask->id,
	    'status_type_id' => $typeStatusNew->id,
	    'priority_type_id' => $typePriorityMedium->id,
	    'resolution_type_id' => $typeResolutionUnresolved->id,
	]);

	$ticket = factory(\App\Models\Ticket::class)->create([
	    'subject' => 'Setup Email Servers',
	    'slug' => 'setup-email-server',
	    'content' => 'Setup master-master email servers.',
	    'assignee_id' => 1,
	    'type_id' => $typeTask->id,
	    'status_type_id' => $typeStatusNew->id,
	    'priority_type_id' => $typePriorityMedium->id,
	    'resolution_type_id' => $typeResolutionUnresolved->id,
	]);

	$ticket = factory(\App\Models\Ticket::class)->create([
	    'subject' => 'Migrate Taraloka Email to New Servers',
	    'slug' => 'migrate-taraloka-email-to-new-servers',
	    'content' => 'Migrate Taraloka Email to new servers.',
	    'assignee_id' => 1,
	    'type_id' => $typeTask->id,
	    'status_type_id' => $typeStatusNew->id,
	    'priority_type_id' => $typePriorityMedium->id,
	    'resolution_type_id' => $typeResolutionUnresolved->id,
	]);

	$ticket = factory(\App\Models\Ticket::class)->create([
	    'subject' => 'Install Website Analytics',
	    'slug' => 'install-website-analytics',
	    'content' => 'Install website analytics.',
	    'assignee_id' => 1,
	    'type_id' => $typeTask->id,
	    'status_type_id' => $typeStatusNew->id,
	    'priority_type_id' => $typePriorityMedium->id,
	    'resolution_type_id' => $typeResolutionUnresolved->id,
	]);

	$ticket = factory(\App\Models\Ticket::class)->create([
	    'subject' => 'Cancel All AWS Resources',
	    'slug' => 'cancel-all-aws-resources',
	    'content' => 'Cancel all AWS resources.',
	    'assignee_id' => 1,
	    'type_id' => $typeTask->id,
	    'status_type_id' => $typeStatusNew->id,
	    'priority_type_id' => $typePriorityMedium->id,
	    'resolution_type_id' => $typeResolutionUnresolved->id,
	]);

	$ticket = factory(\App\Models\Ticket::class)->create([
	    'subject' => 'Cancel ALl EC2 Instances',
	    'slug' => 'cancel-all-ec2-instances',
	    'content' => 'Cancel all EC2 instances.',
	    'assignee_id' => 1,
	    'type_id' => $typeTask->id,
	    'status_type_id' => $typeStatusNew->id,
	    'priority_type_id' => $typePriorityMedium->id,
	    'resolution_type_id' => $typeResolutionUnresolved->id,
	]);

	$ticket = factory(\App\Models\Ticket::class)->create([
	    'subject' => 'Cancel All Route 53 Zones',
	    'slug' => 'cancel-all-route-53-zones',
	    'content' => 'Cancel all Route 53 zones.',
	    'assignee_id' => 1,
	    'type_id' => $typeTask->id,
	    'status_type_id' => $typeStatusNew->id,
	    'priority_type_id' => $typePriorityMedium->id,
	    'resolution_type_id' => $typeResolutionUnresolved->id,
	]);

	$ticket = factory(\App\Models\Ticket::class)->create([
	    'subject' => 'Cancel Hostgator Reseller Account',
	    'slug' => 'cancel-hostgator-reseller-account',
	    'content' => 'Cancel Hostgator reseller account.',
	    'assignee_id' => 1,
	    'type_id' => $typeTask->id,
	    'status_type_id' => $typeStatusNew->id,
	    'priority_type_id' => $typePriorityMedium->id,
	    'resolution_type_id' => $typeResolutionUnresolved->id,
	]);

	$ticket = factory(\App\Models\Ticket::class)->create([
	    'subject' => 'Migrate Schows Estate Sales to new web server',
	    'slug' => 'migrate-schows-estate-sales-to-new-web-server',
	    'content' => 'Migrate Schows Estate Sales to new web server..',
	    'assignee_id' => 1,
	    'type_id' => $typeTask->id,
	    'status_type_id' => $typeStatusNew->id,
	    'priority_type_id' => $typePriorityMedium->id,
	    'resolution_type_id' => $typeResolutionUnresolved->id,
	]);

	$ticket = factory(\App\Models\Ticket::class)->create([
	    'subject' => 'Migrate Crosby Jeep Club to new web server',
	    'slug' => 'migrate-crosby-jeep-club-to-new-web-server',
	    'content' => 'Migrate Crosby Jeep CLub to new web server.',
	    'assignee_id' => 1,
	    'type_id' => $typeTask->id,
	    'status_type_id' => $typeStatusNew->id,
	    'priority_type_id' => $typePriorityMedium->id,
	    'resolution_type_id' => $typeResolutionUnresolved->id,
	]);
    }
}
