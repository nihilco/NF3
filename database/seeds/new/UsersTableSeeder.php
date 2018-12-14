<?php

use Illuminate\Database\Seeder;

class NewUsersTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{

		factory(\App\Models\User::class)->create([
			"username" => "uriah.clemmer@nihil.co",
			"contact_id" => 1,
			"email" => "uriah@nihil.co",
			"slug" => "uclemmer",
			'password' => Hash::make(env('MY_PASSWORD')),
			"avatar" => "avatar.png",
			"dob_at" => "1987-09-22 00:00:00",
			"accepted_tos_at" => "2018-07-01 11:08:44",
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => 1,
			"deleted_at" => null,
			"created_at" => "2018-12-13 16:08:44",
			"updated_at" => "2018-12-13 16:09:27",
		]);

		factory(\App\Models\User::class)->create([
			"username" => "kgribbin2@gmail.com",
			"contact_id" => 2,
			"email" => "kgribbin2@gmail.com",
			"slug" => "kgribbin",
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => 1,
			"deleted_at" => null,
			"created_at" => "2018-12-13 16:08:44",
			"updated_at" => "2018-12-13 16:09:28",
		]);

		factory(\App\Models\User::class)->create([
			"username" => "ataylor@baylorschool.org",
			"contact_id" => 3,
			"email" => "ataylor@baylorschool.org",
			"slug" => "aktaylor",
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => 1,
			"deleted_at" => null,
			"created_at" => "2018-12-13 16:08:44",
			"updated_at" => "2018-12-13 16:09:28",
		]);

		factory(\App\Models\User::class)->create([
			"username" => "wray@caseantiques.com",
			"contact_id" => 4,
			"email" => "wray@caseantiques.com",
			"slug" => "wwilliams",
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => 1,
			"deleted_at" => null,
			"created_at" => "2018-12-13 16:08:44",
			"updated_at" => "2018-12-13 16:09:29",
		]);

		factory(\App\Models\User::class)->create([
			"username" => "ben.hollerbach@gmail.com",
			"contact_id" => 5,
			"email" => "ben.hollerbach@gmail.com",
			"slug" => "bhollerbach",
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => 1,
			"deleted_at" => null,
			"created_at" => "2018-12-13 16:08:44",
			"updated_at" => "2018-12-13 16:09:29",
		]);

		factory(\App\Models\User::class)->create([
			"username" => "carlschow@gmail.com",
			"contact_id" => 6,
			"email" => "carlschow@gmail.com",
			"slug" => "cschow",
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => 1,
			"deleted_at" => null,
			"created_at" => "2018-12-13 16:08:44",
			"updated_at" => "2018-12-13 16:09:29",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "chadegary@gmail.com",
			"contact_id" => 7,
			"email" => "chadegary@gmail.com",
			"slug" => "cgary",
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => 1,
			"deleted_at" => null,
			"created_at" => "2018-12-13 16:08:44",
			"updated_at" => "2018-12-13 16:09:29",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "nancyclemmer@me.com",
			"contact_id" => 8,
			"email" => "nancyclemmer@me.com",
			"slug" => "nclemmer",
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => 1,
			"deleted_at" => null,
			"created_at" => "2018-12-13 16:08:44",
			"updated_at" => "2018-12-13 16:09:29",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "chandler@mazestonelaw.com",
			"contact_id" => 9,
			"email" => "chandler@mazestonelaw.com",
			"slug" => "cmaze",
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => 1,
			"deleted_at" => null,
			"created_at" => "2018-12-13 16:08:45",
			"updated_at" => "2018-12-13 16:09:30",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "clayton@mazestonelaw.com",
			"contact_id" => null,
			"email" => "clayton@mazestonelaw.com",
			"slug" => "cstone",
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => 1,
			"deleted_at" => null,
			"created_at" => "2018-12-13 16:08:45",
			"updated_at" => "2018-12-13 16:08:45",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "annenexum@gmail.com",
			"contact_id" => 10,
			"email" => "annenexum@gmail.com",
			"slug" => "anexum",
			'password' => '$2y$10$rD69WvWOXyvmWALLaps/peY8pBUf2Bx5RBqcX5wqDWZtxrl1myqQi',
			"avatar" => "avatar.png",
			"dob_at" => "1949-10-22 00:00:00",
			"accepted_tos_at" => "2018-10-30 19:10:14",
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => 1,
			"deleted_at" => null,
			"created_at" => "2018-12-13 16:08:45",
			"updated_at" => "2018-12-13 16:09:30",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "mclemmer@gmail.com",
			"contact_id" => 11,
			"email" => "mclemmer@gmail.com",
			"slug" => null,
			'password' => Hash::make(env('MY_PASSWORD2')),
			"avatar" => "avatar.png",
			"dob_at" => "1987-09-22 00:00:00",
			"accepted_tos_at" => "2018-07-15 11:08:45",
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => 1,
			"deleted_at" => null,
			"created_at" => "2018-12-13 16:08:45",
			"updated_at" => "2018-12-13 16:09:30",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "dcross9999@gmail.com",
			"contact_id" => 12,
			"email" => "dcross9999@gmail.com",
			"slug" => "dcross9999",
			'password' => '$2y$10$fA0XbRKrpHBkKpjPVsZiPuzGMzVuyMiiw4o3Yg6fAAWWT1LN6AsDy',
			"avatar" => "avatar.png",
			"dob_at" => "2018-11-06 00:00:00",
			"accepted_tos_at" => "2018-11-06 11:30:47",
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => 1,
			"deleted_at" => null,
			"created_at" => "2018-12-13 16:08:45",
			"updated_at" => "2018-12-13 16:09:30",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "klooz.chris@gmail.com",
			"contact_id" => null,
			"email" => "klooz.chris@gmail.com",
			"slug" => "klooz.chris",
			'password' => '$2y$10$6./jWosi/dkRwv7n2FY.W.i9AZ.LOf2WAfij5rMwnBxDlRfBkpFuq',
			"avatar" => "avatar.png",
			"dob_at" => "2018-11-06 00:00:00",
			"accepted_tos_at" => "2018-11-06 11:30:47",
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => 1,
			"deleted_at" => null,
			"created_at" => "2018-12-13 16:08:45",
			"updated_at" => "2018-12-13 16:08:45",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "kendra.montejos@centre.edu",
			"contact_id" => 20,
			"email" => "kendra.montejos@centre.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:07:45",
			"updated_at" => "2018-12-13 20:07:45",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "k.cantelou@gmail.com",
			"contact_id" => 21,
			"email" => "k.cantelou@gmail.com",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:07:46",
			"updated_at" => "2018-12-13 20:07:46",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "sara.morency@centre.edu",
			"contact_id" => 22,
			"email" => "sara.morency@centre.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:07:46",
			"updated_at" => "2018-12-13 20:07:46",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "Lee-Pierce@utc.edu",
			"contact_id" => 23,
			"email" => "Lee-Pierce@utc.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:07:47",
			"updated_at" => "2018-12-13 20:07:47",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "Brandon-Justice@utc.edu",
			"contact_id" => 24,
			"email" => "Brandon-Justice@utc.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:07:48",
			"updated_at" => "2018-12-13 20:07:48",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "tyler@utk.edu",
			"contact_id" => 25,
			"email" => "tyler@utk.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:07:48",
			"updated_at" => "2018-12-13 20:07:48",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "cutler@clemson.edu",
			"contact_id" => 26,
			"email" => "cutler@clemson.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:07:49",
			"updated_at" => "2018-12-13 20:07:49",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "asmedbe@clemson.edu",
			"contact_id" => 27,
			"email" => "asmedbe@clemson.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:07:49",
			"updated_at" => "2018-12-13 20:07:49",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "KAAN@kenyon.edu",
			"contact_id" => 28,
			"email" => "KAAN@kenyon.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:07:50",
			"updated_at" => "2018-12-13 20:07:50",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "gaio@kenyon.edu",
			"contact_id" => 29,
			"email" => "gaio@kenyon.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:07:50",
			"updated_at" => "2018-12-13 20:07:50",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "jjemison@kenyon.edu",
			"contact_id" => 30,
			"email" => "jjemison@kenyon.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:07:51",
			"updated_at" => "2018-12-13 20:07:51",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "acrabtree@usfca.edu",
			"contact_id" => 31,
			"email" => "acrabtree@usfca.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:07:51",
			"updated_at" => "2018-12-13 20:07:51",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "kemills@usfca.edu",
			"contact_id" => 32,
			"email" => "kemills@usfca.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:07:52",
			"updated_at" => "2018-12-13 20:07:52",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "esdong@usfca.edu",
			"contact_id" => 33,
			"email" => "esdong@usfca.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:07:53",
			"updated_at" => "2018-12-13 20:07:53",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "penn@roanoke.edu",
			"contact_id" => 34,
			"email" => "penn@roanoke.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:07:53",
			"updated_at" => "2018-12-13 20:07:53",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "mtyree@roanoke.edu",
			"contact_id" => 35,
			"email" => "mtyree@roanoke.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:07:54",
			"updated_at" => "2018-12-13 20:07:54",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "crutchd@juniata.edu",
			"contact_id" => 36,
			"email" => "crutchd@juniata.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:07:54",
			"updated_at" => "2018-12-13 20:07:54",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "cschrider@leeuniversity.edu",
			"contact_id" => 37,
			"email" => "cschrider@leeuniversity.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:07:54",
			"updated_at" => "2018-12-13 20:07:54",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "mparker@leeuniversity.edu",
			"contact_id" => 38,
			"email" => "mparker@leeuniversity.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:07:55",
			"updated_at" => "2018-12-13 20:07:55",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "ctipton@leeuniversity.edu",
			"contact_id" => 39,
			"email" => "ctipton@leeuniversity.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:07:56",
			"updated_at" => "2018-12-13 20:07:56",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "awilson@leeuniversity.edu",
			"contact_id" => 40,
			"email" => "awilson@leeuniversity.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:07:56",
			"updated_at" => "2018-12-13 20:07:56",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "glemost@millsaps.edu",
			"contact_id" => 41,
			"email" => "glemost@millsaps.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:07:56",
			"updated_at" => "2018-12-13 20:07:56",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "tye.menist@millsaps.edu",
			"contact_id" => 42,
			"email" => "tye.menist@millsaps.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:07:57",
			"updated_at" => "2018-12-13 20:07:57",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "murrake@millsaps.edu",
			"contact_id" => 43,
			"email" => "murrake@millsaps.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:07:57",
			"updated_at" => "2018-12-13 20:07:57",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "jedbrech@samford.edu",
			"contact_id" => 44,
			"email" => "jedbrech@samford.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:07:58",
			"updated_at" => "2018-12-13 20:07:58",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "rstanbac@samford.edu",
			"contact_id" => 45,
			"email" => "rstanbac@samford.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:07:58",
			"updated_at" => "2018-12-13 20:07:58",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "jsimpso2@samford.edu",
			"contact_id" => 46,
			"email" => "jsimpso2@samford.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:07:58",
			"updated_at" => "2018-12-13 20:07:58",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "harper.haynes@vanderbilt.edu",
			"contact_id" => 47,
			"email" => "harper.haynes@vanderbilt.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:07:59",
			"updated_at" => "2018-12-13 20:07:59",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "marybeth.tift@vanderbilt.edu",
			"contact_id" => 48,
			"email" => "marybeth.tift@vanderbilt.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:08:00",
			"updated_at" => "2018-12-13 20:08:00",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "mmcmillan@oglethorpe.edu",
			"contact_id" => 49,
			"email" => "mmcmillan@oglethorpe.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:08:00",
			"updated_at" => "2018-12-13 20:08:00",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "mcarter2@oglethorpe.edu",
			"contact_id" => 50,
			"email" => "mcarter2@oglethorpe.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:08:01",
			"updated_at" => "2018-12-13 20:08:01",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "lauren.robertson@ung.edu",
			"contact_id" => 51,
			"email" => "lauren.robertson@ung.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:08:02",
			"updated_at" => "2018-12-13 20:08:02",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "katie.johnson@ung.edu",
			"contact_id" => 52,
			"email" => "katie.johnson@ung.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:08:05",
			"updated_at" => "2018-12-13 20:08:05",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "avacsren@skidmore.edu",
			"contact_id" => 53,
			"email" => "avacsren@skidmore.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:08:06",
			"updated_at" => "2018-12-13 20:08:06",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "dnemer@skidmore.edu",
			"contact_id" => 54,
			"email" => "dnemer@skidmore.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:08:06",
			"updated_at" => "2018-12-13 20:08:06",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "Nichole.Poe@mtsu.edu",
			"contact_id" => 55,
			"email" => "Nichole.Poe@mtsu.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:08:07",
			"updated_at" => "2018-12-13 20:08:07",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "Caitlin.Sadler@mtsu.edu",
			"contact_id" => 56,
			"email" => "Caitlin.Sadler@mtsu.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:08:07",
			"updated_at" => "2018-12-13 20:08:07",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "Caitlin.Clough@mtsu.edu",
			"contact_id" => 57,
			"email" => "Caitlin.Clough@mtsu.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:08:08",
			"updated_at" => "2018-12-13 20:08:08",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "llabens@tulane.edu",
			"contact_id" => 58,
			"email" => "llabens@tulane.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:08:09",
			"updated_at" => "2018-12-13 20:08:09",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "jmallard@georgiasouthern.edu",
			"contact_id" => 59,
			"email" => "jmallard@georgiasouthern.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:08:10",
			"updated_at" => "2018-12-13 20:08:10",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "bduncan@georgiasouthern.edu",
			"contact_id" => 60,
			"email" => "bduncan@georgiasouthern.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:08:11",
			"updated_at" => "2018-12-13 20:08:11",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "admission@depauw.edu",
			"contact_id" => 61,
			"email" => "admission@depauw.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:08:12",
			"updated_at" => "2018-12-13 20:08:12",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "marshalladams@depauw.edu",
			"contact_id" => 62,
			"email" => "marshalladams@depauw.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:08:12",
			"updated_at" => "2018-12-13 20:08:12",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "leh@uab.edu",
			"contact_id" => 63,
			"email" => "leh@uab.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:08:14",
			"updated_at" => "2018-12-13 20:08:14",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "kpiet@uab.edu",
			"contact_id" => 64,
			"email" => "kpiet@uab.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:08:17",
			"updated_at" => "2018-12-13 20:08:17",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "ckercheval@wittenberg.edu",
			"contact_id" => 65,
			"email" => "ckercheval@wittenberg.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:08:18",
			"updated_at" => "2018-12-13 20:08:18",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "ckercheval@earthlink.net",
			"contact_id" => 66,
			"email" => "ckercheval@earthlink.net",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:08:18",
			"updated_at" => "2018-12-13 20:08:18",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "lfletch@aum.edu",
			"contact_id" => 67,
			"email" => "lfletch@aum.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:08:19",
			"updated_at" => "2018-12-13 20:08:19",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "ncook3@elon.edu",
			"contact_id" => 68,
			"email" => "ncook3@elon.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:08:19",
			"updated_at" => "2018-12-13 20:08:19",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "jpetrizzi@elon.edu",
			"contact_id" => 69,
			"email" => "jpetrizzi@elon.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:08:19",
			"updated_at" => "2018-12-13 20:08:19",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "sharon.robbins@converse.edu",
			"contact_id" => 70,
			"email" => "sharon.robbins@converse.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:08:20",
			"updated_at" => "2018-12-13 20:08:20",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "jennifer.barksdale@converse.edu",
			"contact_id" => 71,
			"email" => "jennifer.barksdale@converse.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:08:23",
			"updated_at" => "2018-12-13 20:08:23",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "cymone.eldridge@converse.edu",
			"contact_id" => 72,
			"email" => "cymone.eldridge@converse.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:08:24",
			"updated_at" => "2018-12-13 20:08:24",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "claire.hirte@covenant.edu",
			"contact_id" => 73,
			"email" => "claire.hirte@covenant.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:08:25",
			"updated_at" => "2018-12-13 20:08:25",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "erik.vitolins@covenant.edu",
			"contact_id" => 74,
			"email" => "erik.vitolins@covenant.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:08:26",
			"updated_at" => "2018-12-13 20:08:26",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "mamadm@rit.edu",
			"contact_id" => 75,
			"email" => "mamadm@rit.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:08:26",
			"updated_at" => "2018-12-13 20:08:26",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "mark.muenzer@rit.edu",
			"contact_id" => 76,
			"email" => "mark.muenzer@rit.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:08:27",
			"updated_at" => "2018-12-13 20:08:27",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "swilliams@highpoint.edu",
			"contact_id" => 77,
			"email" => "swilliams@highpoint.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:08:27",
			"updated_at" => "2018-12-13 20:08:27",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "hatcher2@memphis.edu",
			"contact_id" => 78,
			"email" => "hatcher2@memphis.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:08:28",
			"updated_at" => "2018-12-13 20:08:28",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "samizell@memphis.edu",
			"contact_id" => 79,
			"email" => "samizell@memphis.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:08:29",
			"updated_at" => "2018-12-13 20:08:29",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "jnewcomer1@radford.edu",
			"contact_id" => 80,
			"email" => "jnewcomer1@radford.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:08:29",
			"updated_at" => "2018-12-13 20:08:29",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "ogerardi@radford.edu",
			"contact_id" => 81,
			"email" => "ogerardi@radford.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:08:30",
			"updated_at" => "2018-12-13 20:08:30",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "jloveless@wpi.edu",
			"contact_id" => 82,
			"email" => "jloveless@wpi.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:08:30",
			"updated_at" => "2018-12-13 20:08:30",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "fglitman@lynn.edu",
			"contact_id" => 83,
			"email" => "fglitman@lynn.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:08:30",
			"updated_at" => "2018-12-13 20:08:30",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "jaye.west@msstate.edu",
			"contact_id" => 84,
			"email" => "jaye.west@msstate.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:08:31",
			"updated_at" => "2018-12-13 20:08:31",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "brownj2@queens.edu",
			"contact_id" => 85,
			"email" => "brownj2@queens.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:08:31",
			"updated_at" => "2018-12-13 20:08:31",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "LuszczykD@arcadia.edu",
			"contact_id" => 86,
			"email" => "LuszczykD@arcadia.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:08:32",
			"updated_at" => "2018-12-13 20:08:32",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "mcamp@uga.edu",
			"contact_id" => 87,
			"email" => "mcamp@uga.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:08:32",
			"updated_at" => "2018-12-13 20:08:32",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "adm-hsc@uga.edu",
			"contact_id" => 88,
			"email" => "adm-hsc@uga.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:08:33",
			"updated_at" => "2018-12-13 20:08:33",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "edward.pickett@tufts.edu",
			"contact_id" => 89,
			"email" => "edward.pickett@tufts.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:08:33",
			"updated_at" => "2018-12-13 20:08:33",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "klee8@montevallo.edu",
			"contact_id" => 90,
			"email" => "klee8@montevallo.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:08:35",
			"updated_at" => "2018-12-13 20:08:35",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "kblanke1@montevallo.edu",
			"contact_id" => 91,
			"email" => "kblanke1@montevallo.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:08:37",
			"updated_at" => "2018-12-13 20:08:37",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "engler@montevallo.edu",
			"contact_id" => 92,
			"email" => "engler@montevallo.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:08:38",
			"updated_at" => "2018-12-13 20:08:38",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "Annette.Mollenkopf@kit.edu",
			"contact_id" => 93,
			"email" => "Annette.Mollenkopf@kit.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:08:38",
			"updated_at" => "2018-12-13 20:08:38",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "Annette.Gambach@kit.edu",
			"contact_id" => 94,
			"email" => "Annette.Gambach@kit.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:08:38",
			"updated_at" => "2018-12-13 20:08:38",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "a.mwakisu@jacobs-university.de",
			"contact_id" => 95,
			"email" => "a.mwakisu@jacobs-university.de",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:08:44",
			"updated_at" => "2018-12-13 20:08:44",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "gwadley@colum.edu",
			"contact_id" => 96,
			"email" => "gwadley@colum.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:08:44",
			"updated_at" => "2018-12-13 20:08:44",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "Kinsey.miller@trinity.edu",
			"contact_id" => 97,
			"email" => "Kinsey.miller@trinity.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:08:45",
			"updated_at" => "2018-12-13 20:08:45",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "armstm10@erau.edu",
			"contact_id" => 98,
			"email" => "armstm10@erau.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:08:45",
			"updated_at" => "2018-12-13 20:08:45",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "wehanson319@gmail.com",
			"contact_id" => 99,
			"email" => "wehanson319@gmail.com",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:08:46",
			"updated_at" => "2018-12-13 20:08:46",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "pwalsh.seg@gmail.com",
			"contact_id" => 100,
			"email" => "pwalsh.seg@gmail.com",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:08:47",
			"updated_at" => "2018-12-13 20:08:47",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "anna.thomason@uah.edu",
			"contact_id" => 101,
			"email" => "anna.thomason@uah.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:08:47",
			"updated_at" => "2018-12-13 20:08:47",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "tacallis@tntech.edu",
			"contact_id" => 102,
			"email" => "tacallis@tntech.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:08:47",
			"updated_at" => "2018-12-13 20:08:47",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "diallen@tntech.edu",
			"contact_id" => 103,
			"email" => "diallen@tntech.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:08:48",
			"updated_at" => "2018-12-13 20:08:48",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "lmcgauvran@tntech.edu",
			"contact_id" => 104,
			"email" => "lmcgauvran@tntech.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:08:49",
			"updated_at" => "2018-12-13 20:08:49",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "ejdowney@loyno.edu",
			"contact_id" => 105,
			"email" => "ejdowney@loyno.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:08:49",
			"updated_at" => "2018-12-13 20:08:49",
			
		]);


		factory(\App\Models\User::class)->create([
			"username" => "jbuhler@loyno.edu",
			"contact_id" => 106,
			"email" => "jbuhler@loyno.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:08:50",
			"updated_at" => "2018-12-13 20:08:50",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "edharris@loyno.edu",
			"contact_id" => 107,
			"email" => "edharris@loyno.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:08:50",
			"updated_at" => "2018-12-13 20:08:50",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "rsapough@piedmont.edu",
			"contact_id" => 108,
			"email" => "rsapough@piedmont.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:08:50",
			"updated_at" => "2018-12-13 20:08:50",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "kfowler@piedmont.edu",
			"contact_id" => 109,
			"email" => "kfowler@piedmont.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:08:51",
			"updated_at" => "2018-12-13 20:08:51",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "cmcginness@hillsdale.edu",
			"contact_id" => 110,
			"email" => "cmcginness@hillsdale.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:08:54",
			"updated_at" => "2018-12-13 20:08:54",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "alupo@hillsdale.edu",
			"contact_id" => 111,
			"email" => "alupo@hillsdale.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:08:55",
			"updated_at" => "2018-12-13 20:08:55",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "lcarville@hillsdale.edu",
			"contact_id" => 112,
			"email" => "lcarville@hillsdale.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:08:55",
			"updated_at" => "2018-12-13 20:08:55",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "teverdow@king.edu",
			"contact_id" => 113,
			"email" => "teverdow@king.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:08:55",
			"updated_at" => "2018-12-13 20:08:55",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "mgroberts@king.edu",
			"contact_id" => 114,
			"email" => "mgroberts@king.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:08:56",
			"updated_at" => "2018-12-13 20:08:56",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "tori.irvin@furman.edu",
			"contact_id" => 115,
			"email" => "tori.irvin@furman.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:08:56",
			"updated_at" => "2018-12-13 20:08:56",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "heather.lorenz@furman.edu",
			"contact_id" => 116,
			"email" => "heather.lorenz@furman.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:08:57",
			"updated_at" => "2018-12-13 20:08:57",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "rlian@brenau.edu",
			"contact_id" => 117,
			"email" => "rlian@brenau.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:08:57",
			"updated_at" => "2018-12-13 20:08:57",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "mhubbard1@brenau.edu",
			"contact_id" => 118,
			"email" => "mhubbard1@brenau.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:08:57",
			"updated_at" => "2018-12-13 20:08:57",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "lwburns@sewanee.edu",
			"contact_id" => 119,
			"email" => "lwburns@sewanee.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:08:57",
			"updated_at" => "2018-12-13 20:08:57",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "castwellfider@southern.edu",
			"contact_id" => 120,
			"email" => "castwellfider@southern.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:08:59",
			"updated_at" => "2018-12-13 20:08:59",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "nanderson@ut.edu",
			"contact_id" => 121,
			"email" => "nanderson@ut.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:09:00",
			"updated_at" => "2018-12-13 20:09:00",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "benjamin.oxford@trincoll.edu",
			"contact_id" => 122,
			"email" => "benjamin.oxford@trincoll.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:09:00",
			"updated_at" => "2018-12-13 20:09:00",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "dacrowe1@cofc.edu",
			"contact_id" => 123,
			"email" => "dacrowe1@cofc.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:09:01",
			"updated_at" => "2018-12-13 20:09:01",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "michael.waters@belmont.edu",
			"contact_id" => 124,
			"email" => "michael.waters@belmont.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:09:02",
			"updated_at" => "2018-12-13 20:09:02",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "hblanton@tusculum.edu",
			"contact_id" => 125,
			"email" => "hblanton@tusculum.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:09:03",
			"updated_at" => "2018-12-13 20:09:03",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "ecoker@tusculum.edu",
			"contact_id" => 126,
			"email" => "ecoker@tusculum.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:09:03",
			"updated_at" => "2018-12-13 20:09:03",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "memery@tusculum.edu",
			"contact_id" => 127,
			"email" => "memery@tusculum.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:09:03",
			"updated_at" => "2018-12-13 20:09:03",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "kkehner1@udayton.edu",
			"contact_id" => 128,
			"email" => "kkehner1@udayton.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:09:04",
			"updated_at" => "2018-12-13 20:09:04",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "slewis1@udayton.edu",
			"contact_id" => 129,
			"email" => "slewis1@udayton.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:09:07",
			"updated_at" => "2018-12-13 20:09:07",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "askkatharine@missouri.edu",
			"contact_id" => 130,
			"email" => "askkatharine@missouri.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:09:07",
			"updated_at" => "2018-12-13 20:09:07",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "kaluginata@missouri.edu",
			"contact_id" => 131,
			"email" => "kaluginata@missouri.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:09:08",
			"updated_at" => "2018-12-13 20:09:08",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "bauld_d@mercer.edu",
			"contact_id" => 132,
			"email" => "bauld_d@mercer.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:09:08",
			"updated_at" => "2018-12-13 20:09:08",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "landon.parrish@lipscomb.edu",
			"contact_id" => 133,
			"email" => "landon.parrish@lipscomb.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:09:09",
			"updated_at" => "2018-12-13 20:09:09",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "acembor@providence.edu",
			"contact_id" => 134,
			"email" => "acembor@providence.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:09:09",
			"updated_at" => "2018-12-13 20:09:09",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "dgingles@providence.edu",
			"contact_id" => 135,
			"email" => "dgingles@providence.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:09:10",
			"updated_at" => "2018-12-13 20:09:10",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "hshore@brandeis.edu",
			"contact_id" => 136,
			"email" => "hshore@brandeis.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:09:10",
			"updated_at" => "2018-12-13 20:09:10",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "vlasisji@wfu.edu",
			"contact_id" => 137,
			"email" => "vlasisji@wfu.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:09:10",
			"updated_at" => "2018-12-13 20:09:10",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "fennertw@wofford.edu",
			"contact_id" => 138,
			"email" => "fennertw@wofford.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:09:11",
			"updated_at" => "2018-12-13 20:09:11",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "LorenzHE@wofford.edu",
			"contact_id" => 139,
			"email" => "LorenzHE@wofford.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:09:12",
			"updated_at" => "2018-12-13 20:09:12",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "rwest@agnesscott.edu",
			"contact_id" => 140,
			"email" => "rwest@agnesscott.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:09:14",
			"updated_at" => "2018-12-13 20:09:14",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "russellc@rhodes.edu",
			"contact_id" => 141,
			"email" => "russellc@rhodes.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:09:14",
			"updated_at" => "2018-12-13 20:09:14",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "brownm@rhodes.edu",
			"contact_id" => 142,
			"email" => "brownm@rhodes.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:09:15",
			"updated_at" => "2018-12-13 20:09:15",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "pbrogdon@wustl.edu",
			"contact_id" => 143,
			"email" => "pbrogdon@wustl.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:09:15",
			"updated_at" => "2018-12-13 20:09:15",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "birda_lewis@wustl.edu",
			"contact_id" => 144,
			"email" => "birda_lewis@wustl.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:09:16",
			"updated_at" => "2018-12-13 20:09:16",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "loren.wright@wustl.edu",
			"contact_id" => 145,
			"email" => "loren.wright@wustl.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:09:17",
			"updated_at" => "2018-12-13 20:09:17",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "boylan@american.edu",
			"contact_id" => 146,
			"email" => "boylan@american.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:09:18",
			"updated_at" => "2018-12-13 20:09:18",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "Kayla@american.edu",
			"contact_id" => 147,
			"email" => "Kayla@american.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:09:19",
			"updated_at" => "2018-12-13 20:09:19",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "lfindley@jsu.edu",
			"contact_id" => 148,
			"email" => "lfindley@jsu.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:09:21",
			"updated_at" => "2018-12-13 20:09:21",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "hlginn@jsu.edu",
			"contact_id" => 149,
			"email" => "hlginn@jsu.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:09:22",
			"updated_at" => "2018-12-13 20:09:22",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "mimansuy@davidson.edu",
			"contact_id" => 150,
			"email" => "mimansuy@davidson.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:09:22",
			"updated_at" => "2018-12-13 20:09:22",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "paorr@davidson.edu",
			"contact_id" => 151,
			"email" => "paorr@davidson.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:09:23",
			"updated_at" => "2018-12-13 20:09:23",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "miya.walker@miamioh.edu",
			"contact_id" => 152,
			"email" => "miya.walker@miamioh.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:09:24",
			"updated_at" => "2018-12-13 20:09:24",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "corleyle@mailbox.sc.edu",
			"contact_id" => 153,
			"email" => "corleyle@mailbox.sc.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:09:25",
			"updated_at" => "2018-12-13 20:09:25",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "loricrawford@sc.edu",
			"contact_id" => 154,
			"email" => "loricrawford@sc.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:09:25",
			"updated_at" => "2018-12-13 20:09:25",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "crononha@mailbox.sc.edu",
			"contact_id" => 155,
			"email" => "crononha@mailbox.sc.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:09:26",
			"updated_at" => "2018-12-13 20:09:26",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "nelor@oxy.edu",
			"contact_id" => 156,
			"email" => "nelor@oxy.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:09:26",
			"updated_at" => "2018-12-13 20:09:26",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "ebrandt@neu.edu",
			"contact_id" => 157,
			"email" => "ebrandt@neu.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:09:27",
			"updated_at" => "2018-12-13 20:09:27",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "rpabich@northeastern.edu",
			"contact_id" => 158,
			"email" => "rpabich@northeastern.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:09:27",
			"updated_at" => "2018-12-13 20:09:27",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "dardenm@etsu.edu",
			"contact_id" => 159,
			"email" => "dardenm@etsu.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:09:28",
			"updated_at" => "2018-12-13 20:09:28",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "duncandj@etsu.edu",
			"contact_id" => 160,
			"email" => "duncandj@etsu.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:09:28",
			"updated_at" => "2018-12-13 20:09:28",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "ike.megwalu@nova.edu",
			"contact_id" => 161,
			"email" => "ike.megwalu@nova.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:09:28",
			"updated_at" => "2018-12-13 20:09:28",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "arichter@flsouthern.edu",
			"contact_id" => 162,
			"email" => "arichter@flsouthern.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:09:29",
			"updated_at" => "2018-12-13 20:09:29",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "jjtaylor@olemiss.edu",
			"contact_id" => 163,
			"email" => "jjtaylor@olemiss.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:09:29",
			"updated_at" => "2018-12-13 20:09:29",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "rivers@olemiss.edu",
			"contact_id" => 164,
			"email" => "rivers@olemiss.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:09:30",
			"updated_at" => "2018-12-13 20:09:30",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "brandi.ferrebee@goucher.edu",
			"contact_id" => 165,
			"email" => "brandi.ferrebee@goucher.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:09:30",
			"updated_at" => "2018-12-13 20:09:30",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "anthony.davis@ccga.edu",
			"contact_id" => 166,
			"email" => "anthony.davis@ccga.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:09:31",
			"updated_at" => "2018-12-13 20:09:31",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "bbeveridge@mcdaniel.edu",
			"contact_id" => 167,
			"email" => "bbeveridge@mcdaniel.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:09:31",
			"updated_at" => "2018-12-13 20:09:31",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "lkeita@carleton.edu",
			"contact_id" => 168,
			"email" => "lkeita@carleton.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:09:31",
			"updated_at" => "2018-12-13 20:09:31",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "mhamilton@carleton.edu",
			"contact_id" => 169,
			"email" => "mhamilton@carleton.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:09:32",
			"updated_at" => "2018-12-13 20:09:32",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "rcrep@hamilton.edu",
			"contact_id" => 170,
			"email" => "rcrep@hamilton.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:09:32",
			"updated_at" => "2018-12-13 20:09:32",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "amora01@daltonstate.edu",
			"contact_id" => 171,
			"email" => "amora01@daltonstate.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:09:33",
			"updated_at" => "2018-12-13 20:09:33",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "jensley@edsouth.org",
			"contact_id" => 172,
			"email" => "jensley@edsouth.org",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:09:33",
			"updated_at" => "2018-12-13 20:09:33",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "katie.morgan@auburn.edu",
			"contact_id" => 173,
			"email" => "katie.morgan@auburn.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:09:34",
			"updated_at" => "2018-12-13 20:09:34",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "MLawhorn@xusom.com",
			"contact_id" => 174,
			"email" => "MLawhorn@xusom.com",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:09:34",
			"updated_at" => "2018-12-13 20:09:34",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "mbreed10@earlham.edu",
			"contact_id" => 175,
			"email" => "mbreed10@earlham.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:09:35",
			"updated_at" => "2018-12-13 20:09:35",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "ezuccher@bsc.edu",
			"contact_id" => 176,
			"email" => "ezuccher@bsc.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:09:35",
			"updated_at" => "2018-12-13 20:09:35",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "kphamilt@bsc.edu",
			"contact_id" => 177,
			"email" => "kphamilt@bsc.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:09:36",
			"updated_at" => "2018-12-13 20:09:36",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "lmorris@coastal.edu",
			"contact_id" => 178,
			"email" => "lmorris@coastal.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:09:36",
			"updated_at" => "2018-12-13 20:09:36",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "toverton@coastal.edu",
			"contact_id" => 179,
			"email" => "toverton@coastal.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:09:38",
			"updated_at" => "2018-12-13 20:09:38",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "averittb@apsu.edu",
			"contact_id" => 180,
			"email" => "averittb@apsu.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:09:40",
			"updated_at" => "2018-12-13 20:09:40",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "nelsona@apsu.edu",
			"contact_id" => 181,
			"email" => "nelsona@apsu.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:09:40",
			"updated_at" => "2018-12-13 20:09:40",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "pricer@apsu.edu",
			"contact_id" => 182,
			"email" => "pricer@apsu.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:09:41",
			"updated_at" => "2018-12-13 20:09:41",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "rganand@emory.edu",
			"contact_id" => 183,
			"email" => "rganand@emory.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:09:41",
			"updated_at" => "2018-12-13 20:09:41",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "fjerman@emory.edu",
			"contact_id" => 184,
			"email" => "fjerman@emory.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:09:42",
			"updated_at" => "2018-12-13 20:09:42",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "lgwimpey@catawba.edu",
			"contact_id" => 185,
			"email" => "lgwimpey@catawba.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:09:44",
			"updated_at" => "2018-12-13 20:09:44",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "will.brown@gcsu.edu",
			"contact_id" => 186,
			"email" => "will.brown@gcsu.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:09:44",
			"updated_at" => "2018-12-13 20:09:44",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "jessi.jenkins@gcsu.edu",
			"contact_id" => 187,
			"email" => "jessi.jenkins@gcsu.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:09:45",
			"updated_at" => "2018-12-13 20:09:45",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "coneil@berry.edu",
			"contact_id" => 188,
			"email" => "coneil@berry.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:09:46",
			"updated_at" => "2018-12-13 20:09:46",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "cbradham@berry.edu",
			"contact_id" => 189,
			"email" => "cbradham@berry.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:09:46",
			"updated_at" => "2018-12-13 20:09:46",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "millershawn@hendrix.edu",
			"contact_id" => 190,
			"email" => "millershawn@hendrix.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:09:47",
			"updated_at" => "2018-12-13 20:09:47",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "hillh@hendrix.edu",
			"contact_id" => 191,
			"email" => "hillh@hendrix.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:09:47",
			"updated_at" => "2018-12-13 20:09:47",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "park@denison.edu",
			"contact_id" => 192,
			"email" => "park@denison.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:09:48",
			"updated_at" => "2018-12-13 20:09:48",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "kronischzi@guilford.edu",
			"contact_id" => 193,
			"email" => "kronischzi@guilford.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:09:48",
			"updated_at" => "2018-12-13 20:09:48",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "mhead7@kennesaw.edu",
			"contact_id" => 194,
			"email" => "mhead7@kennesaw.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:09:49",
			"updated_at" => "2018-12-13 20:09:49",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "aande118@kennesaw.edu",
			"contact_id" => 195,
			"email" => "aande118@kennesaw.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:09:50",
			"updated_at" => "2018-12-13 20:09:50",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "rwenzel@kennesaw.edu",
			"contact_id" => 196,
			"email" => "rwenzel@kennesaw.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:09:50",
			"updated_at" => "2018-12-13 20:09:50",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "donna.sheehan@fandm.edu",
			"contact_id" => 197,
			"email" => "donna.sheehan@fandm.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:09:52",
			"updated_at" => "2018-12-13 20:09:52",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "jbo78cp@gmail.com",
			"contact_id" => 198,
			"email" => "jbo78cp@gmail.com",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:09:53",
			"updated_at" => "2018-12-13 20:09:53",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "vellinem@union.edu",
			"contact_id" => 199,
			"email" => "vellinem@union.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:09:54",
			"updated_at" => "2018-12-13 20:09:54",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "gmassey@mca.edu",
			"contact_id" => 200,
			"email" => "gmassey@mca.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:09:54",
			"updated_at" => "2018-12-13 20:09:54",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "sandra.labrecque@ehl.ch",
			"contact_id" => 201,
			"email" => "sandra.labrecque@ehl.ch",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:09:55",
			"updated_at" => "2018-12-13 20:09:55",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "mldaniel@smu.edu",
			"contact_id" => 202,
			"email" => "mldaniel@smu.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:09:56",
			"updated_at" => "2018-12-13 20:09:56",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "bradybe@hiwassee.edu",
			"contact_id" => 203,
			"email" => "bradybe@hiwassee.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:09:56",
			"updated_at" => "2018-12-13 20:09:56",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "christian.montgomery@wku.edu",
			"contact_id" => 204,
			"email" => "christian.montgomery@wku.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:09:58",
			"updated_at" => "2018-12-13 20:09:58",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "ben.liebman@wku.edu",
			"contact_id" => 205,
			"email" => "ben.liebman@wku.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:09:58",
			"updated_at" => "2018-12-13 20:09:58",
			
		]);


		factory(\App\Models\User::class)->create([
			"username" => "lfekete@cn.edu",
			"contact_id" => 206,
			"email" => "lfekete@cn.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:09:59",
			"updated_at" => "2018-12-13 20:09:59",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "xan.roseberry@admission.gatech.edu",
			"contact_id" => 207,
			"email" => "xan.roseberry@admission.gatech.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:10:00",
			"updated_at" => "2018-12-13 20:10:00",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "larry.stokes@admission.gatech.edu",
			"contact_id" => 208,
			"email" => "larry.stokes@admission.gatech.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:10:03",
			"updated_at" => "2018-12-13 20:10:03",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "troane@wooster.edu",
			"contact_id" => 209,
			"email" => "troane@wooster.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:10:05",
			"updated_at" => "2018-12-13 20:10:05",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "ccoffey@ncobs.org",
			"contact_id" => 210,
			"email" => "ccoffey@ncobs.org",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:10:05",
			"updated_at" => "2018-12-13 20:10:05",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "stacy.hall@ua.edu",
			"contact_id" => 211,
			"email" => "stacy.hall@ua.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:10:06",
			"updated_at" => "2018-12-13 20:10:06",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "shall@ua.edu",
			"contact_id" => 212,
			"email" => "shall@ua.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:10:07",
			"updated_at" => "2018-12-13 20:10:07",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "mwhitten@ua.edu",
			"contact_id" => 213,
			"email" => "mwhitten@ua.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:10:07",
			"updated_at" => "2018-12-13 20:10:07",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "jessica_krom@baylor.edu",
			"contact_id" => 214,
			"email" => "jessica_krom@baylor.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:10:08",
			"updated_at" => "2018-12-13 20:10:08",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "aliffmt@hollins.edu",
			"contact_id" => 215,
			"email" => "aliffmt@hollins.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:10:08",
			"updated_at" => "2018-12-13 20:10:08",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "teaguemt2@hollins.edu",
			"contact_id" => 216,
			"email" => "teaguemt2@hollins.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:10:09",
			"updated_at" => "2018-12-13 20:10:09",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "megg.obrien92@gmail.com",
			"contact_id" => 217,
			"email" => "megg.obrien92@gmail.com",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:10:10",
			"updated_at" => "2018-12-13 20:10:10",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "mary.stewart@salem.edu",
			"contact_id" => 218,
			"email" => "mary.stewart@salem.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:10:11",
			"updated_at" => "2018-12-13 20:10:11",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "audrey.gauss@salem.edu",
			"contact_id" => 219,
			"email" => "audrey.gauss@salem.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:10:13",
			"updated_at" => "2018-12-13 20:10:13",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "jsams@transy.edu",
			"contact_id" => 220,
			"email" => "jsams@transy.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:10:16",
			"updated_at" => "2018-12-13 20:10:16",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "bachmanc@lafayette.edu",
			"contact_id" => 221,
			"email" => "bachmanc@lafayette.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:10:16",
			"updated_at" => "2018-12-13 20:10:16",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "bianchae@lafayette.edu",
			"contact_id" => 222,
			"email" => "bianchae@lafayette.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:10:16",
			"updated_at" => "2018-12-13 20:10:16",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "wruder@purdue.edu",
			"contact_id" => 223,
			"email" => "wruder@purdue.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:10:17",
			"updated_at" => "2018-12-13 20:10:17",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "gpolizzi@purdue.edu",
			"contact_id" => 224,
			"email" => "gpolizzi@purdue.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:10:18",
			"updated_at" => "2018-12-13 20:10:18",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "jessica.yevicks@ie.edu",
			"contact_id" => 225,
			"email" => "jessica.yevicks@ie.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:10:18",
			"updated_at" => "2018-12-13 20:10:18",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "Belen.VanDerWerth@ie.edu",
			"contact_id" => 226,
			"email" => "Belen.VanDerWerth@ie.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:10:19",
			"updated_at" => "2018-12-13 20:10:19",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "denisse.disla@ie.edu",
			"contact_id" => 227,
			"email" => "denisse.disla@ie.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:10:20",
			"updated_at" => "2018-12-13 20:10:20",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "mpc7290@bu.edu",
			"contact_id" => 228,
			"email" => "mpc7290@bu.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:10:20",
			"updated_at" => "2018-12-13 20:10:20",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "mricharson@richmond.edu",
			"contact_id" => 229,
			"email" => "mricharson@richmond.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:10:22",
			"updated_at" => "2018-12-13 20:10:22",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "nsaint@richmond.edu",
			"contact_id" => 230,
			"email" => "nsaint@richmond.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:10:22",
			"updated_at" => "2018-12-13 20:10:22",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "CCORP@BATES.EDU",
			"contact_id" => 231,
			"email" => "CCORP@BATES.EDU",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:10:22",
			"updated_at" => "2018-12-13 20:10:22",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "cara.franke@uky.edu",
			"contact_id" => 232,
			"email" => "cara.franke@uky.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:10:23",
			"updated_at" => "2018-12-13 20:10:23",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "joshua.palmer@uky.edu",
			"contact_id" => 233,
			"email" => "joshua.palmer@uky.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:10:24",
			"updated_at" => "2018-12-13 20:10:24",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "katie-davis@utulsa.edu",
			"contact_id" => 234,
			"email" => "katie-davis@utulsa.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:10:26",
			"updated_at" => "2018-12-13 20:10:26",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "audrey-crum@utulsa.edu",
			"contact_id" => 235,
			"email" => "audrey-crum@utulsa.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:10:27",
			"updated_at" => "2018-12-13 20:10:27",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "maggiemae@warren-wilson.edu",
			"contact_id" => 236,
			"email" => "maggiemae@warren-wilson.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:10:27",
			"updated_at" => "2018-12-13 20:10:27",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "mnaughton@warren-wilson.edu",
			"contact_id" => 237,
			"email" => "mnaughton@warren-wilson.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:10:28",
			"updated_at" => "2018-12-13 20:10:28",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "slytle@warren-wilson.edu",
			"contact_id" => 238,
			"email" => "slytle@warren-wilson.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:10:28",
			"updated_at" => "2018-12-13 20:10:28",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "chobanim@dickinson.edu",
			"contact_id" => 239,
			"email" => "chobanim@dickinson.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:10:29",
			"updated_at" => "2018-12-13 20:10:29",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "baytopsr@dickinson.edu",
			"contact_id" => 240,
			"email" => "baytopsr@dickinson.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:10:29",
			"updated_at" => "2018-12-13 20:10:29",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "hallam@dickinson.edu",
			"contact_id" => 241,
			"email" => "hallam@dickinson.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:10:29",
			"updated_at" => "2018-12-13 20:10:29",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "kristen.richards@usm.edu",
			"contact_id" => 242,
			"email" => "kristen.richards@usm.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:10:30",
			"updated_at" => "2018-12-13 20:10:30",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "acurrie@uu.edu",
			"contact_id" => 243,
			"email" => "acurrie@uu.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:10:30",
			"updated_at" => "2018-12-13 20:10:30",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "bbell@uu.edu",
			"contact_id" => 244,
			"email" => "bbell@uu.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:10:31",
			"updated_at" => "2018-12-13 20:10:31",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "philip.taylor@lesroches-admissions.com",
			"contact_id" => 245,
			"email" => "philip.taylor@lesroches-admissions.com",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:10:31",
			"updated_at" => "2018-12-13 20:10:31",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "maggie.brown@bryan.edu",
			"contact_id" => 246,
			"email" => "maggie.brown@bryan.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:10:33",
			"updated_at" => "2018-12-13 20:10:33",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "andrew.smith@bryan.edu",
			"contact_id" => 247,
			"email" => "andrew.smith@bryan.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:10:34",
			"updated_at" => "2018-12-13 20:10:34",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "ocruger@bowdoin.edu",
			"contact_id" => 248,
			"email" => "ocruger@bowdoin.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:10:34",
			"updated_at" => "2018-12-13 20:10:34",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "a.north@msstate.edu",
			"contact_id" => 249,
			"email" => "a.north@msstate.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:10:34",
			"updated_at" => "2018-12-13 20:10:34",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "mplourd@holycross.edu",
			"contact_id" => 250,
			"email" => "mplourd@holycross.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:10:35",
			"updated_at" => "2018-12-13 20:10:35",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "fjones@scad.edu",
			"contact_id" => 251,
			"email" => "fjones@scad.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:10:35",
			"updated_at" => "2018-12-13 20:10:35",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "wsilber@scad.edu",
			"contact_id" => 252,
			"email" => "wsilber@scad.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:10:36",
			"updated_at" => "2018-12-13 20:10:36",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "jhudson@scad.edu",
			"contact_id" => 253,
			"email" => "jhudson@scad.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:10:37",
			"updated_at" => "2018-12-13 20:10:37",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "tbyrne3@gmu.edu",
			"contact_id" => 254,
			"email" => "tbyrne3@gmu.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:10:37",
			"updated_at" => "2018-12-13 20:10:37",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "abarrett@stlawu.edu",
			"contact_id" => 255,
			"email" => "abarrett@stlawu.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:10:38",
			"updated_at" => "2018-12-13 20:10:38",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "gpinkston@fhu.edu",
			"contact_id" => 256,
			"email" => "gpinkston@fhu.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:10:38",
			"updated_at" => "2018-12-13 20:10:38",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "mollienel@yahoo.com",
			"contact_id" => 257,
			"email" => "mollienel@yahoo.com",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:10:39",
			"updated_at" => "2018-12-13 20:10:39",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "didoss@comcast.net",
			"contact_id" => 258,
			"email" => "didoss@comcast.net",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:10:39",
			"updated_at" => "2018-12-13 20:10:39",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "enadeau@southalabama.edu",
			"contact_id" => 259,
			"email" => "enadeau@southalabama.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:10:42",
			"updated_at" => "2018-12-13 20:10:42",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "rmclaughlin@southalabama.edu",
			"contact_id" => 260,
			"email" => "rmclaughlin@southalabama.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:10:42",
			"updated_at" => "2018-12-13 20:10:42",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "brad.carlyle@chattanoogastate.edu",
			"contact_id" => 261,
			"email" => "brad.carlyle@chattanoogastate.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:10:43",
			"updated_at" => "2018-12-13 20:10:43",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "brittany.smith@chattanoogastate.edu",
			"contact_id" => 262,
			"email" => "brittany.smith@chattanoogastate.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:10:44",
			"updated_at" => "2018-12-13 20:10:44",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "CSevier2@slu.edu",
			"contact_id" => 263,
			"email" => "CSevier2@slu.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:10:44",
			"updated_at" => "2018-12-13 20:10:44",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "Christy.Sevier@slu.edu",
			"contact_id" => 264,
			"email" => "Christy.Sevier@slu.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:10:45",
			"updated_at" => "2018-12-13 20:10:45",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "taylorb@lsu.edu",
			"contact_id" => 265,
			"email" => "taylorb@lsu.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:10:45",
			"updated_at" => "2018-12-13 20:10:45",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "gharris@wlu.edu",
			"contact_id" => 266,
			"email" => "gharris@wlu.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:10:46",
			"updated_at" => "2018-12-13 20:10:46",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "eaustin@wlu.edu",
			"contact_id" => 267,
			"email" => "eaustin@wlu.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:10:47",
			"updated_at" => "2018-12-13 20:10:47",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "kde4@lehigh.edu",
			"contact_id" => 268,
			"email" => "kde4@lehigh.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:10:47",
			"updated_at" => "2018-12-13 20:10:47",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "sck7@lehigh.edu",
			"contact_id" => 269,
			"email" => "sck7@lehigh.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:10:47",
			"updated_at" => "2018-12-13 20:10:47",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "masonnheller@uchicago.edu",
			"contact_id" => 270,
			"email" => "masonnheller@uchicago.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:10:48",
			"updated_at" => "2018-12-13 20:10:48",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "rynemc@uchicago.edu",
			"contact_id" => 271,
			"email" => "rynemc@uchicago.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:10:49",
			"updated_at" => "2018-12-13 20:10:49",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "esparks@utm.edu",
			"contact_id" => 272,
			"email" => "esparks@utm.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:10:49",
			"updated_at" => "2018-12-13 20:10:49",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "lthoma49@utm.edu",
			"contact_id" => 273,
			"email" => "lthoma49@utm.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:10:50",
			"updated_at" => "2018-12-13 20:10:50",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "Rowen@twcnet.edu",
			"contact_id" => 274,
			"email" => "Rowen@twcnet.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:10:50",
			"updated_at" => "2018-12-13 20:10:50",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "jferguson@tnwesleyan.edu",
			"contact_id" => 275,
			"email" => "jferguson@tnwesleyan.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:10:50",
			"updated_at" => "2018-12-13 20:10:50",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "kmeadors@tnwesleyan.edu",
			"contact_id" => 276,
			"email" => "kmeadors@tnwesleyan.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:10:51",
			"updated_at" => "2018-12-13 20:10:51",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "kmccuin@ju.edu",
			"contact_id" => 277,
			"email" => "kmccuin@ju.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:10:51",
			"updated_at" => "2018-12-13 20:10:51",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "jparker17@ju.edu",
			"contact_id" => 278,
			"email" => "jparker17@ju.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:10:52",
			"updated_at" => "2018-12-13 20:10:52",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "jwiesne@ju.edu",
			"contact_id" => 279,
			"email" => "jwiesne@ju.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:10:52",
			"updated_at" => "2018-12-13 20:10:52",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "Kayla@rsm.org",
			"contact_id" => 280,
			"email" => "Kayla@rsm.org",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:10:52",
			"updated_at" => "2018-12-13 20:10:52",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "lbrown9@una.edu",
			"contact_id" => 281,
			"email" => "lbrown9@una.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:10:53",
			"updated_at" => "2018-12-13 20:10:53",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "aj.kupec@assumption.edu",
			"contact_id" => 282,
			"email" => "aj.kupec@assumption.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:10:53",
			"updated_at" => "2018-12-13 20:10:53",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "PNG0002@UAH.edu",
			"contact_id" => 283,
			"email" => "PNG0002@UAH.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:10:53",
			"updated_at" => "2018-12-13 20:10:53",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "kimmy.hilson@jhu.edu",
			"contact_id" => 284,
			"email" => "kimmy.hilson@jhu.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:10:54",
			"updated_at" => "2018-12-13 20:10:54",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "Jesse.Mungin@marist.edu",
			"contact_id" => 285,
			"email" => "Jesse.Mungin@marist.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:10:54",
			"updated_at" => "2018-12-13 20:10:54",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "cmack@cortland.edu",
			"contact_id" => 286,
			"email" => "cmack@cortland.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:10:55",
			"updated_at" => "2018-12-13 20:10:55",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "jerica.johnson@maryvillecollege.edu",
			"contact_id" => 287,
			"email" => "jerica.johnson@maryvillecollege.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:10:55",
			"updated_at" => "2018-12-13 20:10:55",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "bbrady@shorter.edu",
			"contact_id" => 288,
			"email" => "bbrady@shorter.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:10:56",
			"updated_at" => "2018-12-13 20:10:56",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "meredith.howard2013@gmail.com",
			"contact_id" => 289,
			"email" => "meredith.howard2013@gmail.com",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:10:57",
			"updated_at" => "2018-12-13 20:10:57",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "heather.zeman@simmons.edu",
			"contact_id" => 290,
			"email" => "heather.zeman@simmons.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:10:57",
			"updated_at" => "2018-12-13 20:10:57",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "Deneen.brown@villanova.edu",
			"contact_id" => 291,
			"email" => "Deneen.brown@villanova.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:10:57",
			"updated_at" => "2018-12-13 20:10:57",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "cdrcataldi@tds.net",
			"contact_id" => 292,
			"email" => "cdrcataldi@tds.net",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:10:58",
			"updated_at" => "2018-12-13 20:10:58",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "kthayer@clarku.edu",
			"contact_id" => 293,
			"email" => "kthayer@clarku.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:10:58",
			"updated_at" => "2018-12-13 20:10:58",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "tragland@cumberland.edu",
			"contact_id" => 294,
			"email" => "tragland@cumberland.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:10:59",
			"updated_at" => "2018-12-13 20:10:59",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "msteinbach@wesleyancollege.edu",
			"contact_id" => 295,
			"email" => "msteinbach@wesleyancollege.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:10:59",
			"updated_at" => "2018-12-13 20:10:59",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "cdeatly@colgate.edu",
			"contact_id" => 296,
			"email" => "cdeatly@colgate.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:11:00",
			"updated_at" => "2018-12-13 20:11:00",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "brightonesmith@gmail.com",
			"contact_id" => 297,
			"email" => "brightonesmith@gmail.com",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:11:01",
			"updated_at" => "2018-12-13 20:11:01",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "cteare@drew.edu",
			"contact_id" => 298,
			"email" => "cteare@drew.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:11:02",
			"updated_at" => "2018-12-13 20:11:02",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "liz.stark@case.edu",
			"contact_id" => 299,
			"email" => "liz.stark@case.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:11:03",
			"updated_at" => "2018-12-13 20:11:03",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "Giuffrida@marshall.edu",
			"contact_id" => 300,
			"email" => "Giuffrida@marshall.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:11:04",
			"updated_at" => "2018-12-13 20:11:04",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "wellsme@vcu.edu",
			"contact_id" => 301,
			"email" => "wellsme@vcu.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:11:04",
			"updated_at" => "2018-12-13 20:11:04",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "frantalove@gmail.com",
			"contact_id" => 302,
			"email" => "frantalove@gmail.com",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:11:04",
			"updated_at" => "2018-12-13 20:11:04",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "erica.mitchell@cbu.edu",
			"contact_id" => 303,
			"email" => "erica.mitchell@cbu.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:11:05",
			"updated_at" => "2018-12-13 20:11:05",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "hoefler@lakeforest.edu",
			"contact_id" => 304,
			"email" => "hoefler@lakeforest.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:11:06",
			"updated_at" => "2018-12-13 20:11:06",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "bljohnson@aii.edu",
			"contact_id" => 305,
			"email" => "bljohnson@aii.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:11:06",
			"updated_at" => "2018-12-13 20:11:06",
			
		]);


		factory(\App\Models\User::class)->create([
			"username" => "Demond.lester@aamu.edu",
			"contact_id" => 306,
			"email" => "Demond.lester@aamu.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:11:07",
			"updated_at" => "2018-12-13 20:11:07",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "chelsea.duncan@nyu.edu",
			"contact_id" => 307,
			"email" => "chelsea.duncan@nyu.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:11:08",
			"updated_at" => "2018-12-13 20:11:08",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "nostramr@eckerd.edu",
			"contact_id" => 308,
			"email" => "nostramr@eckerd.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:11:09",
			"updated_at" => "2018-12-13 20:11:09",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "dlester3@rustcollege.edu",
			"contact_id" => 309,
			"email" => "dlester3@rustcollege.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:11:09",
			"updated_at" => "2018-12-13 20:11:09",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "christian.smith@montreat.edu",
			"contact_id" => 310,
			"email" => "christian.smith@montreat.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:11:10",
			"updated_at" => "2018-12-13 20:11:10",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "nal56@drexel.edu",
			"contact_id" => 311,
			"email" => "nal56@drexel.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:11:10",
			"updated_at" => "2018-12-13 20:11:10",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "dcorson@stevens.edu",
			"contact_id" => 312,
			"email" => "dcorson@stevens.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:11:11",
			"updated_at" => "2018-12-13 20:11:11",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "frogmail@tcu.edu",
			"contact_id" => 313,
			"email" => "frogmail@tcu.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:11:11",
			"updated_at" => "2018-12-13 20:11:11",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "a.moss@tcu.edu",
			"contact_id" => 314,
			"email" => "a.moss@tcu.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:11:12",
			"updated_at" => "2018-12-13 20:11:12",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "JAK1@reinhardt.edu",
			"contact_id" => 315,
			"email" => "JAK1@reinhardt.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:11:12",
			"updated_at" => "2018-12-13 20:11:12",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "branhamr@bethelu.edu",
			"contact_id" => 316,
			"email" => "branhamr@bethelu.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:11:13",
			"updated_at" => "2018-12-13 20:11:13",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "carly.c.stafford@ColoradoCollege.edu",
			"contact_id" => 317,
			"email" => "carly.c.stafford@ColoradoCollege.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:11:14",
			"updated_at" => "2018-12-13 20:11:14",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "Hannah.wilson@lmunet.edu",
			"contact_id" => 318,
			"email" => "Hannah.wilson@lmunet.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:11:14",
			"updated_at" => "2018-12-13 20:11:14",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "jmays@odu.edu",
			"contact_id" => 319,
			"email" => "jmays@odu.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:11:15",
			"updated_at" => "2018-12-13 20:11:15",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "bspicer@fisk.edu",
			"contact_id" => 320,
			"email" => "bspicer@fisk.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:11:15",
			"updated_at" => "2018-12-13 20:11:15",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "caylor@ehc.edu",
			"contact_id" => 321,
			"email" => "caylor@ehc.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:11:16",
			"updated_at" => "2018-12-13 20:11:16",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "marybennett@valdosta.edu",
			"contact_id" => 322,
			"email" => "marybennett@valdosta.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:11:16",
			"updated_at" => "2018-12-13 20:11:16",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "pcarney@jwu.edu",
			"contact_id" => 323,
			"email" => "pcarney@jwu.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:11:17",
			"updated_at" => "2018-12-13 20:11:17",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "edubois@watkins.edu",
			"contact_id" => 324,
			"email" => "edubois@watkins.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:11:17",
			"updated_at" => "2018-12-13 20:11:17",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "jmayo@watkins.edu",
			"contact_id" => 325,
			"email" => "jmayo@watkins.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:11:17",
			"updated_at" => "2018-12-13 20:11:17",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "gking@iwu.edu",
			"contact_id" => 326,
			"email" => "gking@iwu.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:11:18",
			"updated_at" => "2018-12-13 20:11:18",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "macgregor@presby.edu",
			"contact_id" => 327,
			"email" => "macgregor@presby.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:11:19",
			"updated_at" => "2018-12-13 20:11:19",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "jssaluti@syr.edu",
			"contact_id" => 328,
			"email" => "jssaluti@syr.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:11:19",
			"updated_at" => "2018-12-13 20:11:19",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "stellerl@xavier.edu",
			"contact_id" => 329,
			"email" => "stellerl@xavier.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:11:19",
			"updated_at" => "2018-12-13 20:11:19",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "cconchar@gwu.edu",
			"contact_id" => 330,
			"email" => "cconchar@gwu.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:11:20",
			"updated_at" => "2018-12-13 20:11:20",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "criles@tamu.edu",
			"contact_id" => 331,
			"email" => "criles@tamu.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:11:21",
			"updated_at" => "2018-12-13 20:11:21",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "russellt@berea.edu",
			"contact_id" => 332,
			"email" => "russellt@berea.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:11:21",
			"updated_at" => "2018-12-13 20:11:21",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "cbobb@butler.edu",
			"contact_id" => 333,
			"email" => "cbobb@butler.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:11:22",
			"updated_at" => "2018-12-13 20:11:22",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "nfhedden@yhc.edu",
			"contact_id" => 334,
			"email" => "nfhedden@yhc.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:11:22",
			"updated_at" => "2018-12-13 20:11:22",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "niamh.kavanagh@ul.ie",
			"contact_id" => 335,
			"email" => "niamh.kavanagh@ul.ie",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:11:23",
			"updated_at" => "2018-12-13 20:11:23",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "rotherr@southwestern.edu",
			"contact_id" => 336,
			"email" => "rotherr@southwestern.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:11:23",
			"updated_at" => "2018-12-13 20:11:23",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "vaughnf@etsu.edu",
			"contact_id" => 337,
			"email" => "vaughnf@etsu.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:11:24",
			"updated_at" => "2018-12-13 20:11:24",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "oelnahas@lynn.edu",
			"contact_id" => 338,
			"email" => "oelnahas@lynn.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:11:24",
			"updated_at" => "2018-12-13 20:11:24",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "tmcwilliams@tntech.edu",
			"contact_id" => 339,
			"email" => "tmcwilliams@tntech.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:11:24",
			"updated_at" => "2018-12-13 20:11:24",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "zach.plating@covenant.edu",
			"contact_id" => 340,
			"email" => "zach.plating@covenant.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:11:25",
			"updated_at" => "2018-12-13 20:11:25",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "nbrickhouse@loyola.edu",
			"contact_id" => 341,
			"email" => "nbrickhouse@loyola.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:11:26",
			"updated_at" => "2018-12-13 20:11:26",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "lovelyc@union.edu",
			"contact_id" => 342,
			"email" => "lovelyc@union.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:11:27",
			"updated_at" => "2018-12-13 20:11:27",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "mjcusanz@loyno.edu",
			"contact_id" => 343,
			"email" => "mjcusanz@loyno.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:11:27",
			"updated_at" => "2018-12-13 20:11:27",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "sgreene@ehd.edu",
			"contact_id" => 344,
			"email" => "sgreene@ehd.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:11:27",
			"updated_at" => "2018-12-13 20:11:27",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "guyere@wittenberg.edu",
			"contact_id" => 345,
			"email" => "guyere@wittenberg.edu",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:11:28",
			"updated_at" => "2018-12-13 20:11:28",
			
		]);

		factory(\App\Models\User::class)->create([
			"username" => "matteclayton@yahoo.com",
			"contact_id" => 346,
			"email" => "matteclayton@yahoo.com",
			"slug" => null,
			"avatar" => "avatar.png",
			"dob_at" => null,
			"accepted_tos_at" => null,
			"last_login_at" => null,
			"email_confirmed_at" => null,
			"login_attempts" => null,
			"active" => null,
			"deleted_at" => null,
			"created_at" => "2018-12-13 20:11:28",
			"updated_at" => "2018-12-13 20:11:28",
			
		]);


	}
}