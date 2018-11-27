<?php

use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	//
	// SERVER TYPES
	//

	//
        $type = factory(\App\Models\Type::class)->create([
	    'grouping' => \App\Models\Server::class,
	    'name' => 'Server Type',
	    'slug' => 'server-type',
	    'description' => 'Server Type description.',
	]);	
	
	//
        factory(\App\Models\Type::class)->create([
	    'parent_id' => $type->id,
	    'grouping' => \App\Models\Server::class . ":Type",
	    'name' => 'Master',
	    'slug' => 'master',
	    'description' => 'Server type master description.',
	]);

	//
	factory(\App\Models\Type::class)->create([
	    'parent_id' => $type->id,
	    'grouping' => \App\Models\Server::class . ":Type",
	    'name' => 'Slave',
	    'slug' => 'slave',
	    'description' => 'Server type slave description.',
	]);

	//
        // ISSUE TYPES
	//

	//
	$type = factory(\App\Models\Type::class)->create([
	    'grouping' => \App\Models\Issue::class,
	    'name' => 'Issue',
	    'slug' => 'issue',
	    'description' => 'Issue type description.',
	]);

	//
	factory(\App\Models\Type::class)->create([
	    'parent_id' => $type->id,
	    'grouping' => \App\Models\Issue::class . ":Type",
	    'name' => 'Claim',
	    'slug' => 'claim',
	    'description' => 'A client, customer, or user has a question about something.',
	]);

	factory(\App\Models\Type::class)->create([
	    'parent_id' => $type->id,
	    'grouping' => \App\Models\Issue::class . ":Type",
	    'name' => 'Typo',
	    'slug' => 'typo',
	    'description' => 'Learn to spel, dummy!',
	]);

	factory(\App\Models\Type::class)->create([
	    'parent_id' => $type->id,
	    'grouping' => \App\Models\Issue::class . ":Type",
	    'name' => 'Improvement',
	    'slug' => 'improvement',
	    'description' => 'This could be an improvement or enhancement to an existing feature or task.',
	]);

	factory(\App\Models\Type::class)->create([
	    'parent_id' => $type->id,
	    'grouping' => \App\Models\Issue::class . ":Type",
	    'name' => 'Bug',
	    'slug' => 'bug',
	    'description' => 'This is an issue which impairs or prevents the function of the product.',
	]);

	factory(\App\Models\Type::class)->create([
	    'parent_id' => $type->id,
	    'grouping' => \App\Models\Issue::class . ":Type",
	    'name' => 'Task',
	    'slug' => 'task',
	    'description' => 'Action that needs to be performed or executed not necessarily to fix a problem, but more to better a piece of the whole.',
	]);

	factory(\App\Models\Type::class)->create([
	    'parent_id' => $type->id,
	    'grouping' => \App\Models\Issue::class . ":Type",
	    'name' => 'Technical',
	    'slug' => 'technical',
	    'description' => 'A technical task.',
	]);

	factory(\App\Models\Type::class)->create([
	    'parent_id' => $type->id,
	    'grouping' => \App\Models\Issue::class . ":Type",
	    'name' => 'Story',
	    'slug' => 'story',
	    'description' => 'This is an issue where there are a distinct order, or collection, of events which lead to a particular problem.',
	]);

	$typeEpicStory = factory(\App\Models\Type::class)->create([
	    'parent_id' => $type->id,
	    'grouping' => \App\Models\Issue::class . ":Type",
	    'name' => 'Epic Story',
	    'slug' => 'epic-story',
	    'description' => 'This issue is too big and elaborate to handle as is; it needs to be broken down into individual parts.',
	]);

	factory(\App\Models\Type::class)->create([
	    'parent_id' => $type->id,
	    'grouping' => \App\Models\Issue::class . ":Type",
	    'name' => 'New Feature',
	    'slug' => 'new-feature',
	    'description' => 'Take this idea and run with it; we want something completely new here.',
	]);

	factory(\App\Models\Type::class)->create([
	    'parent_id' => $type->id,
	    'grouping' => \App\Models\Issue::class . ":Type",
	    'name' => 'Project',
	    'slug' => 'project',
	    'description' => 'Multi-step collection of items to complete a goal.',
	]);

	factory(\App\Models\Type::class)->create([
	    'parent_id' => $type->id,
	    'grouping' => \App\Models\Issue::class . ":Type",
	    'name' => 'Case',
	    'slug' => 'case',
	    'description' => 'Legal Case',
	]);

	//
	// RESOLUTION TYPES
	//

	//
	$type = factory(\App\Models\Type::class)->create([
	    'grouping' => \App\Models\Issue::class,
	    'name' => 'Resolution',
	    'slug' => 'resolution',
	    'description' => 'Resolution Type description.',
	]);

	//
	factory(\App\Models\Type::class)->create([
	    'parent_id' => $type->id,
	    'grouping' => \App\Models\Issue::class . ":Resolution",
	    'name' => 'Unresolved',
	    'slug' => 'unresolved',
	    'description' => 'No solution has been discovered for the issue at this time; this issue is unresolved.',
	]);

	//
	factory(\App\Models\Type::class)->create([
	    'parent_id' => $type->id,
	    'grouping' => \App\Models\Issue::class . ":Resolution",
	    'name' => 'Resolved',
	    'slug' => 'resolved',
	    'description' => 'This issue is resolved - a solution has been found for this issue.',
	]);

	//
	factory(\App\Models\Type::class)->create([
	    'parent_id' => $type->id,
	    'grouping' => \App\Models\Issue::class . ":Resolution",
	    'name' => 'Needs More Info',
	    'slug' => 'needs-more-info',
	    'description' => 'What is going on here?  We need more information to diagnose this issue.',
	]);

	//
	factory(\App\Models\Type::class)->create([
	    'parent_id' => $type->id,
	    'grouping' => \App\Models\Issue::class . ":Resolution",
	    'name' => 'Duplicate',
	    'slug' => 'duplicate',
	    'description' => 'This issue is a duplicate of a previously submitted issue.  Please refer back to the parent issue for more details.',
	]);

	//
	// STATUS TYPES
	//
	
	$type = factory(\App\Models\Type::class)->create([
	    'grouping' => \App\Models\Issue::class,
	    'name' => 'Status',
	    'slug' => 'status',
	    'description' => 'Status Type description.',
	]);

	//
	factory(\App\Models\Type::class)->create([
	    'parent_id' => $type->id,
	    'grouping' => \App\Models\Issue::class . ":Status",
	    'name' => 'New',
	    'slug' => 'new',
	    'description' => 'This is a newly reported issue and is awaiting processing and assignment.',
	]);

	//
	factory(\App\Models\Type::class)->create([
	    'parent_id' => $type->id,
	    'grouping' => \App\Models\Issue::class . ":Status",
	    'name' => 'Fixed',
	    'slug' => 'fixed',
	    'description' => 'Action has been taken to correct this issue which is awaiting reporter verification.',
	]);

	//
	factory(\App\Models\Type::class)->create([
	    'parent_id' => $type->id,
	    'grouping' => \App\Models\Issue::class . ":Status",
	    'name' => 'In Progress',
	    'slug' => 'in-progress',
	    'description' => 'The issue is actively being worked on.',
	]);

	//
	factory(\App\Models\Type::class)->create([
	    'parent_id' => $type->id,
	    'grouping' => \App\Models\Issue::class . ":Status",
	    'name' => 'Reopened',
	    'slug' => 'reopened',
	    'description' => 'If a previous resolution fails, the issue is reassigned and reopened.',
	]);

	//
	factory(\App\Models\Type::class)->create([
	    'parent_id' => $type->id,
	    'grouping' => \App\Models\Issue::class . ":Status",
	    'name' => 'Open',
	    'slug' => 'open',
	    'description' => 'The issue has been assigned, opened, and is ready for the assignee to start work.',
	]);

	//
	factory(\App\Models\Type::class)->create([
	    'parent_id' => $type->id,
	    'grouping' => \App\Models\Issue::class . ":Status",
	    'name' => 'Closed',
	    'slug' => 'closed',
	    'description' => 'This issue is considered finished; the resolution is correct.',
	]);

	//
	// PRIORITY TYPES
	//

	//
	$type = factory(\App\Models\Type::class)->create([
	    'grouping' => \App\Models\Issue::class,
	    'name' => 'Priority',
	    'slug' => 'priority',
	    'description' => 'Priority Type description.',
	]);

	//
	factory(\App\Models\Type::class)->create([
	    'parent_id' => $type->id,
	    'grouping' => \App\Models\Issue::class . ":Priority",
	    'name' => 'Critical',
	    'slug' => 'critical',
	    'description' => 'The issue blocks development and/or testing work; production could not run because of this critical error.',
	]);

	//
	factory(\App\Models\Type::class)->create([
	    'parent_id' => $type->id,
	    'grouping' => \App\Models\Issue::class . ":Priority",
	    'name' => 'High',
	    'slug' => 'high',
	    'description' => 'The issue causes the system to crash, the loss of data, or severe memory leaks which makes it our highest priority.',
	]);

	//
	factory(\App\Models\Type::class)->create([
	    'parent_id' => $type->id,
	    'grouping' => \App\Models\Issue::class . ":Priority",
	    'name' => 'Medium',
	    'slug' => 'medium',
	    'description' => 'The issue causes a major loss of function which, while it sounds bad, is usually only a medium priority.',
	]);

	//
	factory(\App\Models\Type::class)->create([
	    'parent_id' => $type->id,
	    'grouping' => \App\Models\Issue::class . ":Priority",
	    'name' => 'Low',
	    'slug' => 'low',
	    'description' => 'The low priority issue causes a minor loss of function or presents another problem with an easy work around.',
	]);

	//
	factory(\App\Models\Type::class)->create([
	    'parent_id' => $type->id,
	    'grouping' => \App\Models\Issue::class . ":Priority",
	    'name' => 'Trivial',
	    'slug' => 'trivial',
	    'description' => 'This issue is simply a cosmetic problem like a misspelled word or block misalignment - its trivial.',
	]);

	//
	// INVOICE TYPES
	//

	//
	$type = factory(\App\Models\Type::class)->create([
	    'grouping' => \App\Models\Invoice::class,
	    'name' => 'Invoice Type',
	    'slug' => 'invoice-type',
	    'description' => 'Invoice Type description.',
	]);

	//
	factory(\App\Models\Type::class)->create([
	    'parent_id' => $type->id,
	    'grouping' => \App\Models\Invoice::class . ":Type",
	    'name' => 'Invoice',
	    'slug' => 'invoice',
	    'description' => 'Invoice type invoice.',
	]);

	//
	factory(\App\Models\Type::class)->create([
	    'parent_id' => $type->id,
	    'grouping' => \App\Models\Invoice::class . ":Type",
	    'name' => 'Estimate',
	    'slug' => 'estimate',
	    'description' => 'Invoice type estimate.',
	]);

	//
	factory(\App\Models\Type::class)->create([
	    'parent_id' => $type->id,
	    'grouping' => \App\Models\Invoice::class . ":Type",
	    'name' => 'Quote',
	    'slug' => 'quote',
	    'description' => 'Invoice type quote.',
	]);

	//
	// INVOICE STATUS TYPES
	//

	//
	$type = factory(\App\Models\Type::class)->create([
	    'grouping' => \App\Models\Invoice::class,
	    'name' => 'Invoice Status Type',
	    'slug' => 'invoice-status-type',
	    'description' => 'Invoice Status Type description.',
	]);

	//
	factory(\App\Models\Type::class)->create([
	    'parent_id' => $type->id,
	    'grouping' => \App\Models\Invoice::class . ":Status",
	    'name' => 'Open',
	    'slug' => 'open',
	    'description' => 'Invoice status type open.',
	]);

	//
	factory(\App\Models\Type::class)->create([
	    'parent_id' => $type->id,
	    'grouping' => \App\Models\Invoice::class . ":Status",
	    'name' => 'New',
	    'slug' => 'new',
	    'description' => 'Invoice status type new.',
	]);

	//
	factory(\App\Models\Type::class)->create([
	    'parent_id' => $type->id,
	    'grouping' => \App\Models\Invoice::class . ":Status",
	    'name' => 'Late',
	    'slug' => 'late',
	    'description' => 'Invoice status type late.',
	]);

	//
	factory(\App\Models\Type::class)->create([
	    'parent_id' => $type->id,
	    'grouping' => \App\Models\Invoice::class . ":Status",
	    'name' => 'Overdue',
	    'slug' => 'overdue',
	    'description' => 'Invoice status type overdue.',
	]);

	//
	factory(\App\Models\Type::class)->create([
	    'parent_id' => $type->id,
	    'grouping' => \App\Models\Invoice::class . ":Status",
	    'name' => 'Paid',
	    'slug' => 'paid',
	    'description' => 'Invoice status type paid.',
	]);

	//
	factory(\App\Models\Type::class)->create([
	    'parent_id' => $type->id,
	    'grouping' => \App\Models\Invoice::class . ":Status",
	    'name' => 'Partial',
	    'slug' => 'partial',
	    'description' => 'Invoice status type partial.',
	]);

	//
	factory(\App\Models\Type::class)->create([
	    'parent_id' => $type->id,
	    'grouping' => \App\Models\Invoice::class . ":Status",
	    'name' => 'Void',
	    'slug' => 'void',
	    'description' => 'Invoice status type void.',
	]);

	//
	// TRANSACTION TYPES
	//

	//
	$type = factory(\App\Models\Type::class)->create([
	    'grouping' => \App\Models\Transaction::class,
	    'name' => 'Transaction Type',
	    'slug' => 'transaction-type',
	    'description' => 'Transaction Type description.',
	]);

	//
	factory(\App\Models\Type::class)->create([
	    'parent_id' => $type->id,
	    'grouping' => \App\Models\Transaction::class . ":Type",
	    'name' => 'Payment',
	    'slug' => 'payment',
	    'description' => 'Transaction type payment.',
	]);

	//
        // STATUS CHECKS TYPES
	//
	$type = factory(\App\Models\Type::class)->create([
	    'grouping' => \App\Models\StatusCheck::class,
	    'name' => 'Status Check',
	    'slug' => 'status-check',
	    'description' => 'Status Check Type description.',
	]);

	factory(\App\Models\Type::class)->create([
	    'parent_id' => $type->id,
	    'grouping' => \App\Models\StatusCheck::class . ":Type",
	    'name' => 'Server',
	    'slug' => 'Server',
	    'description' => 'Server.',
	]);

	factory(\App\Models\Type::class)->create([
	    'parent_id' => $type->id,
	    'grouping' => \App\Models\StatusCheck::class . ":Type",
	    'name' => 'Website',
	    'slug' => 'website',
	    'description' => 'Website.',
	]);

	//
        // STATUS CHECKS STATUS TYPES
	//
	$type = factory(\App\Models\Type::class)->create([
	    'grouping' => \App\Models\StatusCheck::class,
	    'name' => 'Status Check Status',
	    'slug' => 'status-check-status',
	    'description' => 'Status Check Status Type description.',
	]);

	factory(\App\Models\Type::class)->create([
	    'parent_id' => $type->id,
	    'grouping' => \App\Models\StatusCheck::class . ":Status",
	    'name' => 'OK',
	    'slug' => 'ok',
	    'description' => 'Status OK.',
	]);

	factory(\App\Models\Type::class)->create([
	    'parent_id' => $type->id,
	    'grouping' => \App\Models\StatusCheck::class . ":Status",
	    'name' => 'Inactive',
	    'slug' => 'inactive',
	    'description' => 'Status Inactive.',
	]);

	factory(\App\Models\Type::class)->create([
	    'parent_id' => $type->id,
	    'grouping' => \App\Models\StatusCheck::class . ":Status",
	    'name' => 'Insecure',
	    'slug' => 'insecure',
	    'description' => 'Status Insecure.',
	]);

	factory(\App\Models\Type::class)->create([
	    'parent_id' => $type->id,
	    'grouping' => \App\Models\StatusCheck::class . ":Status",
	    'name' => 'Unreachable',
	    'slug' => 'unreachable',
	    'description' => 'Status Unreachable.',
	]);

	factory(\App\Models\Type::class)->create([
	    'parent_id' => $type->id,
	    'grouping' => \App\Models\StatusCheck::class . ":Status",
	    'name' => 'Error',
	    'slug' => 'Error',
	    'description' => 'Status Error.',
	]);

    }
    
}