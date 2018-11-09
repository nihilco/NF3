<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $websites = \App\Models\Website::all();
	$categories = \App\Models\Category::all();
	
	$date = new \Carbon\Carbon('first day of July 2018');
	
        //
	$post = factory(App\Models\Post::class)->create([
	     'website_id' => $websites->where('hostname', 'dev.uclemmer.com')->first()->id,
	     'name' => 'Basic Debian Server Setup',
	     'slug' => 'basic-debian-server-setup',
	     'description' => 'Basic Debian Server Setup description.',
	     'content' => '<p>Basic Debian Server Setup content.</p>',
	     'published_at' => $date,
	]);

	$post->categories()->save($categories->where('name', 'Programming')->first());

	//
	$post = factory(App\Models\Post::class)->create([
	     'website_id' => $websites->where('hostname', 'dev.uclemmer.com')->first()->id,
	     'name' => 'The Three Keys to Accumulating Wealth',
	     'slug' => 'the-three-keys-to-accumulating-wealth',
	     'description' => 'The Three Keys to Accumulating Wealth description.',
	     'content' => '<p>The Three Keys to Accumulating Wealth content.</p>',
	     'published_at' => $date->addDays(3),
	]);

	$post->categories()->save($categories->where('name', 'Finance')->first());

	//
	$post = factory(App\Models\Post::class)->create([
	     'website_id' => $websites->where('hostname', 'dev.uclemmer.com')->first()->id,
	     'name' => 'DNS Server Setup',
	     'slug' => 'dns-server-setup',
	     'description' => 'DNS Server Setup description.',
	     'content' => '<p>DNS Server Setup content.</p>',
	     'published_at' => $date->addDays(4),
	]);

	$post->categories()->save($categories->where('name', 'Programming')->first());

	//
	$post = factory(App\Models\Post::class)->create([
	     'website_id' => $websites->where('hostname', 'dev.uclemmer.com')->first()->id,
	     'name' => 'Prioritize and Automate Saving',
	     'slug' => 'prioritize-and-automate-saving',
	     'description' => 'Prioritize and Automate Saving description.',
	     'content' => '<p>Prioritize and Automate Saving content.</p>',
	     'published_at' => $date->addDays(3),
	]);

	$post->categories()->save($categories->where('name', 'Finance')->first());

	//
	$post = factory(App\Models\Post::class)->create([
             'website_id' => $websites->where('hostname', 'dev.uclemmer.com')->first()->id,
	     'name' => 'Web Server Setup',
	     'slug' => 'web-server-setup',
	     'description' => 'Web Server Setup description.',
	     'content' => '<p>Web Server Setup content.</p>',
	     'published_at' => $date->addDays(4),
	]);

	$post->categories()->save($categories->where('name', 'Programming')->first());

	//
	$post = factory(App\Models\Post::class)->create([
	     'website_id' => $websites->where('hostname', 'dev.uclemmer.com')->first()->id,
	     'name' => 'Know Your Numbers.  Make a Budget.',
	     'slug' => 'know-your-numbers-make-a-budget',
	     'description' => 'Know Your Numbers.  Make a Budget description.',
	     'content' => '<p>Know Your Numbers.  Make a Budget content.</p>',
	     'published_at' => $date->addDays(3),
	]);

	$post->categories()->save($categories->where('name', 'Finance')->first());

	//
	$post = factory(App\Models\Post::class)->create([
	     'website_id' => $websites->where('hostname', 'dev.uclemmer.com')->first()->id,
	     'name' => 'Database Server Setup',
	     'slug' => 'database-server-setup',
	     'description' => 'Database Server Setup description.',
	     'content' => '<p>Database Server Setup content.</p>',
	     'published_at' => $date->addDays(4),
	]);

	$post->categories()->save($categories->where('name', 'Programming')->first());

	//
	$post = factory(App\Models\Post::class)->create([
	     'website_id' => $websites->where('hostname', 'dev.uclemmer.com')->first()->id,
	     'name' => 'Frugality: Live Within Your Means',
	     'slug' => 'frugality-live-within-your-means',
	     'description' => 'Frugality: Live Within Your Means description.',
	     'content' => '<p>Frugality: Live WIthin Your Means content.</p>',
	     'published_at' => $date->addDays(3),
	]);

	$post->categories()->save($categories->where('name', 'Finance')->first());

	//
	$post = factory(App\Models\Post::class)->create([
	     'website_id' => $websites->where('hostname', 'dev.uclemmer.com')->first()->id,
	     'name' => 'Email Server Setup',
	     'slug' => 'email-server-setup',
	     'description' => 'Email Server Setup description.',
	     'content' => '<p>Email Server Setup content.</p>',
	     'published_at' => $date->addDays(4),
	]);

	$post->categories()->save($categories->where('name', 'Programming')->first());

	//
	$post = factory(App\Models\Post::class)->create([
	     'website_id' => $websites->where('hostname', 'dev.uclemmer.com')->first()->id,
	     'name' => 'Bourbon',
	     'slug' => 'bourbon',
	     'description' => 'Bourbon description.',
	     'content' => '<p>Bourbon content.</p>',
	     'published_at' => $date->addDays(3),
	]);

	$post->categories()->save($categories->where('name', 'Food')->first());

	//
	$post = factory(App\Models\Post::class)->create([
	     'website_id' => $websites->where('hostname', 'dev.uclemmer.com')->first()->id,
	     'name' => 'Microgreens',
	     'slug' => 'microgreens',
	     'description' => 'Microgreens description.',
	     'content' => '<p>Microgreens content.</p>',
	     'published_at' => $date->addDays(4),
	]);

	$post->categories()->save($categories->where('name', 'Gardening')->first());
	$post->categories()->save($categories->where('name', 'Food')->first());	

	//
	$post = factory(App\Models\Post::class)->create([
	     'website_id' => $websites->where('hostname', 'dev.uclemmer.com')->first()->id,
	     'name' => 'Growing Sunflower Microgreens',
	     'slug' => 'growing-sunflower-microgreens',
	     'description' => 'Growing sunflower microgreens description.',
	     'content' => '<p>Growing sunflower microgreens content.</p>',
	     'published_at' => $date->addDays(3),
	]);

	$post->categories()->save($categories->where('name', 'Gardening')->first());
	$post->categories()->save($categories->where('name', 'Food')->first());	

	//
	$post = factory(App\Models\Post::class)->create([
	     'website_id' => $websites->where('hostname', 'dev.uclemmer.com')->first()->id,
	     'name' => 'Growing Beet Microgreens',
	     'slug' => 'growing-beet-microgreens',
	     'description' => 'Growing beet microgreens description.',
	     'content' => '<p>Growing beet microgreens content.</p>',
	     'published_at' => $date->addDays(4),
	]);

	$post->categories()->save($categories->where('name', 'Gardening')->first());
	$post->categories()->save($categories->where('name', 'Food')->first());

	//
	$post = factory(App\Models\Post::class)->create([
	     'website_id' => $websites->where('hostname', 'dev.uclemmer.com')->first()->id,
	     'name' => 'Brewing Hard Cider',
	     'slug' => 'brewing-hard-cider',
	     'description' => 'Brewing hard cider description.',
	     'content' => '<p>Brewing hard cider content.</p>',
	     'published_at' => $date->addDays(3),
	]);

	$post->categories()->save($categories->where('name', 'Food')->first());
	$post->categories()->save($categories->where('name', 'Brewing')->first());

	//
	$post = factory(App\Models\Post::class)->create([
	     'website_id' => $websites->where('hostname', 'dev.uclemmer.com')->first()->id,
	     'name' => 'My Tiny House',
	     'slug' => 'my-tiny-house',
	     'description' => 'My tiny house description.',
	     'content' => '<p>My tiny house content.</p>',
	     'published_at' => $date->addDays(4),
	]);

	$post->categories()->save($categories->where('name', 'Design')->first());
	$post->categories()->save($categories->where('name', 'Woodworking')->first());

	//
	$post = factory(App\Models\Post::class)->create([
	     'website_id' => $websites->where('hostname', 'dev.uclemmer.com')->first()->id,
	     'name' => 'Perfect Baked Chicken',
	     'slug' => 'perfect-baked-chicken',
	     'description' => 'Perfect baked chicken description.',
	     'content' => '<p>Perfect baked chicken content.</p>',
	     'published_at' => $date->addDays(3),
	]);

	$post->categories()->save($categories->where('name', 'Food')->first());

	//
	$post = factory(App\Models\Post::class)->create([
	     'website_id' => $websites->where('hostname', 'dev.uclemmer.com')->first()->id,
	     'name' => 'WYSIWYG Text Editor with TinyMCE',
	     'slug' => 'wysiwyg-text-editor-with-tinymce',
	     'description' => 'WYSIWYG text editor with TinyMCE description.',
	     'content' => '<p>WYSIWYG text editor with TinyMCE content.</p>',
	     'published_at' => $date->addDays(4),
	]);

	$post->categories()->save($categories->where('name', 'Programming')->first());

	//
	$post = factory(App\Models\Post::class)->create([
	     'website_id' => $websites->where('hostname', 'dev.uclemmer.com')->first()->id,
	     'name' => 'Basic Brewing Equipment',
	     'slug' => 'basic-brewing-equipment',
	     'description' => 'Basic brewing equipment description.',
	     'content' => '<p>Basic brewing equipment content.</p>',
	     'published_at' => $date->addDays(3),
	]);

	$post->categories()->save($categories->where('name', 'Brewing')->first());

	//
	$post = factory(App\Models\Post::class)->create([
	     'website_id' => $websites->where('hostname', 'dev.uclemmer.com')->first()->id,
	     'name' => 'Protect from Injection Attacks with HTML Purifier',
	     'slug' => 'protect-from-injection-attacks-with-html-purifier',
	     'description' => 'Protect from injection attacks with HTML Purifier description.',
	     'content' => '<p>Protect from injection attacks with HTML Purifier content.</p>',
	     'published_at' => $date->addDays(4),
	]);

	$post->categories()->save($categories->where('name', 'Programming')->first());

	//
	$post = factory(App\Models\Post::class)->create([
	     'website_id' => $websites->where('hostname', 'dev.uclemmer.com')->first()->id,
	     'name' => 'Making A Humidor',
	     'slug' => 'making-a-humidor',
	     'description' => 'Making a humidor description.',
	     'content' => '<p>Making a humidor content.</p>',
	     'published_at' => $date->addDays(3),
	]);

	$post->categories()->save($categories->where('name', 'Woodworking')->first());
	$post->categories()->save($categories->where('name', 'Design')->first());	

	//
	$post = factory(App\Models\Post::class)->create([
	     'website_id' => $websites->where('hostname', 'dev.uclemmer.com')->first()->id,
	     'name' => 'Compound Interest Calculator',
	     'slug' => 'compound-interest-calculator',
	     'description' => 'Compound interest calculator description.',
	     'content' => '<p>Compound interest calculator content.</p>',
	     'published_at' => $date->addDays(4),
	]);

	$post->categories()->save($categories->where('name', 'Programming')->first());
	$post->categories()->save($categories->where('name', 'Finance')->first());		
	//
	$post = factory(App\Models\Post::class)->create([
	     'website_id' => $websites->where('hostname', 'dev.uclemmer.com')->first()->id,
	     'name' => 'Making Live Edge Fly Boxes',
	     'slug' => 'making-live-edge-fly-boxes',
	     'description' => 'Making live edge fly boxes description.',
	     'content' => '<p>Making live edge fly boxes content.</p>',
	     'published_at' => $date->addDays(3),
	]);

	$post->categories()->save($categories->where('name', 'Woodworking')->first());
	$post->categories()->save($categories->where('name', 'Fishing')->first());
	$post->categories()->save($categories->where('name', 'Design')->first());	

	//
	$post = factory(App\Models\Post::class)->create([
	     'website_id' => $websites->where('hostname', 'dev.uclemmer.com')->first()->id,
	     'name' => 'Learn to Play the Violin',
	     'slug' => 'learn-to-play-the-violin',
	     'description' => 'Learn to play the violin description.',
	     'content' => '<p>Learn to play the violin content.</p>',
	     'published_at' => $date->addDays(4),
	]);

	$post->categories()->save($categories->where('name', 'Music')->first());

	//
	$post = factory(App\Models\Post::class)->create([
	     'website_id' => $websites->where('hostname', 'dev.uclemmer.com')->first()->id,
	     'name' => 'My Favorite Books',
	     'slug' => 'my-favorite-books',
	     'description' => 'My favorite books description.',
	     'content' => '<p>My favorite books content.</p>',
	     'published_at' => $date->addDays(3),
	]);

	$post->categories()->save($categories->where('name', 'Books')->first());

	//
	$post = factory(App\Models\Post::class)->create([
	     'website_id' => $websites->where('hostname', 'dev.uclemmer.com')->first()->id,
	     'name' => 'How to Tune a Violin',
	     'slug' => 'how-to-tune-a-violin',
	     'description' => 'How to tune a violin description.',
	     'content' => '<p>How to tune a violin content.</p>',
	     'published_at' => $date->addDays(4),
	]);

	$post->categories()->save($categories->where('name', 'Music')->first());

	//
	$post = factory(App\Models\Post::class)->create([
	     'website_id' => $websites->where('hostname', 'dev.uclemmer.com')->first()->id,
	     'name' => 'Ruth Stout Planting Method',
	     'slug' => 'ruth-stout-planting-method',
	     'description' => 'Ruth Stout planting method description.',
	     'content' => '<p>Ruth Stout planting method content.</p>',
	     'published_at' => $date->addDays(3),
	]);

	$post->categories()->save($categories->where('name', 'Gardening')->first());

	//
	$post = factory(App\Models\Post::class)->create([
	     'website_id' => $websites->where('hostname', 'dev.uclemmer.com')->first()->id,
	     'name' => 'Foutain Pens',
	     'slug' => 'foutain-pens',
	     'description' => 'Foutain pens description.',
	     'content' => '<p>Fountain pens content.</p>',
	     'published_at' => $date->addDays(4),
	]);

	$post->categories()->save($categories->where('name', 'Design')->first());

	//
	$post = factory(App\Models\Post::class)->create([
	     'website_id' => $websites->where('hostname', 'dev.uclemmer.com')->first()->id,
	     'name' => 'Water Purification For Your Home',
	     'slug' => 'water-purification-for-your-home',
	     'description' => 'Water purification for your home description.',
	     'content' => '<p>Water purification for your home content.</p>',
	     'published_at' => $date->addDays(3),
	]);

	$post->categories()->save($categories->where('name', 'Health')->first());
	$post->categories()->save($categories->where('name', 'Food')->first());	

	//
	$post = factory(App\Models\Post::class)->create([
	     'website_id' => $websites->where('hostname', 'dev.uclemmer.com')->first()->id,
	     'name' => 'Carve a Pumpkin Like a Pro',
	     'slug' => 'carve-a-pumpkin-like-a-pro',
	     'description' => 'Carve a pumpkin like a pro description.',
	     'content' => '<p>Carve a pumkin like a pro content.</p>',
	     'published_at' => $date->addDays(4),
	]);

	$post->categories()->save($categories->where('name', 'Design')->first());
	$post->categories()->save($categories->where('name', 'Food')->first());	

	//
	$post = factory(App\Models\Post::class)->create([
	     'website_id' => $websites->where('hostname', 'dev.uclemmer.com')->first()->id,
	     'name' => 'Introduction to Peer Lending',
	     'slug' => 'introduction-to-peer-lending',
	     'description' => 'Introduction to peer lending description.',
	     'content' => '<p>Introduction to peer lending content.</p>',
	     'published_at' => $date->addDays(3),
	]);

	$post->categories()->save($categories->where('name', 'Finance')->first());

	//
	$post = factory(App\Models\Post::class)->create([
	     'website_id' => $websites->where('hostname', 'dev.uclemmer.com')->first()->id,
	     'name' => 'Amaryllis Care Tips',
	     'slug' => 'amaryllis-care-tips',
	     'description' => 'Amaryllis care tips description.',
	     'content' => '<p>Amaryllis care tips content.</p>',
	     'published_at' => $date->addDays(4),
	]);

	$post->categories()->save($categories->where('name', 'Gardening')->first());

	//
	$post = factory(App\Models\Post::class)->create([
	     'website_id' => $websites->where('hostname', 'dev.uclemmer.com')->first()->id,
	     'name' => 'Traditional vs. Roth IRAs',
	     'slug' => 'traditional-vs-roth-iras',
	     'description' => 'Traditional vs. Rother IRAs description.',
	     'content' => '<p>Traditional vs. Roth IRAs content.</p>',
	     'published_at' => $date->addDays(3),
	]);

	$post->categories()->save($categories->where('name', 'Finance')->first());

	//
	$post = factory(App\Models\Post::class)->create([
	     'website_id' => $websites->where('hostname', 'dev.uclemmer.com')->first()->id,
	     'name' => 'Introduction to Bonsai',
	     'slug' => 'introduction-to-bonsai',
	     'description' => 'Introduction to bonsai description.',
	     'content' => '<p>Introduction to bonsai content.</p>',
	     'published_at' => $date->addDays(4),
	]);

	$post->categories()->save($categories->where('name', 'Gardening')->first());

	//
	$post = factory(App\Models\Post::class)->create([
	     'website_id' => $websites->where('hostname', 'dev.uclemmer.com')->first()->id,
	     'name' => 'Making Live-Edge River Tables',
	     'slug' => 'making-live-edge-river-tables',
	     'description' => 'Making live edge river tables description.',
	     'content' => '<p>Making live edge river tables content.</p>',
	     'published_at' => $date->addDays(3),
	]);

	$post->categories()->save($categories->where('name', 'Woodworking')->first());
	$post->categories()->save($categories->where('name', 'Design')->first());

	//
	$post = factory(App\Models\Post::class)->create([
	     'website_id' => $websites->where('hostname', 'dev.uclemmer.com')->first()->id,
	     'name' => 'National Novel Writing Month',
	     'slug' => 'national-novel-writing-month',
	     'description' => 'National novel writing month description.',
	     'content' => '<p>National novel writing month content.</p>',
	     'published_at' => $date->addDays(4),
	]);

	$post->categories()->save($categories->where('name', 'Writing')->first());

	//
	$post = factory(App\Models\Post::class)->create([
	     'website_id' => $websites->where('hostname', 'dev.uclemmer.com')->first()->id,
	     'name' => 'No-Shave November',
	     'slug' => 'no-shave-november',
	     'description' => 'No-shave November description.',
	     'content' => '<p>No-shave November content.</p>',
	     'published_at' => $date->addDays(3),
	]);

	$post->categories()->save($categories->where('name', 'Health')->first());
	$post->categories()->save($categories->where('name', 'Programming')->first());	
    }
}
