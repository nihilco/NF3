<?php

use Illuminate\Database\Seeder;

class StatusChecksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	//
        // STATUS CHECKS TYPES
	//
	$typeStatusCheck = factory(\App\Models\Type::class)->create([
	    'name' => 'Status Check',
	    'slug' => 'status-check',
	    'description' => 'Status Check Type description.',
	]);

	$typeServer = factory(\App\Models\Type::class)->create([
	    'parent_id' => $typeStatusCheck->id,
	    'name' => 'Server',
	    'slug' => 'Server',
	    'description' => 'Server.',
	]);

	$typeWebsite = factory(\App\Models\Type::class)->create([
	    'parent_id' => $typeStatusCheck->id,
	    'name' => 'Website',
	    'slug' => 'website',
	    'description' => 'Website.',
	]);

	//
        // STATUS CHECKS STATUS TYPES
	//
	$typeStatusCheckStatus = factory(\App\Models\Type::class)->create([
	    'name' => 'Status Check Status',
	    'slug' => 'status-check-status',
	    'description' => 'Status Check Status Type description.',
	]);

	$typeOK = factory(\App\Models\Type::class)->create([
	    'parent_id' => $typeStatusCheckStatus->id,
	    'name' => 'OK',
	    'slug' => 'ok',
	    'description' => 'Status OK.',
	]);

	$typeInactive = factory(\App\Models\Type::class)->create([
	    'parent_id' => $typeStatusCheckStatus->id,
	    'name' => 'Inactive',
	    'slug' => 'inactive',
	    'description' => 'Status Inactive.',
	]);

	$typeInsecure = factory(\App\Models\Type::class)->create([
	    'parent_id' => $typeStatusCheckStatus->id,
	    'name' => 'Insecure',
	    'slug' => 'insecure',
	    'description' => 'Status Insecure.',
	]);

	$typeUnreachable = factory(\App\Models\Type::class)->create([
	    'parent_id' => $typeStatusCheckStatus->id,
	    'name' => 'Unreachable',
	    'slug' => 'unreachable',
	    'description' => 'Status Unreachable.',
	]);

	$typeError = factory(\App\Models\Type::class)->create([
	    'parent_id' => $typeStatusCheckStatus->id,
	    'name' => 'Error',
	    'slug' => 'Error',
	    'description' => 'Status Error.',
	]);
    }
}
