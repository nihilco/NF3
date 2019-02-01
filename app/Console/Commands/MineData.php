<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class MineData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mine:data {model} {filename}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Mine data from database for a particular model.';

    protected $model;
    protected $filename;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //
	$this->model = $this->argument('model');
	$this->filename = $this->argument('filename');

	if(!class_exists($this->model)) {
	    $this->error('No model by the name: "' . $this->model . '"');
	    return;
	}

	$c = 0;
	$f = $this->model::count();

	//
       	$text = '<?php' . PHP_EOL . PHP_EOL .
                'use Illuminate\Database\Seeder;' . PHP_EOL . PHP_EOL .
                'class ' . $this->filename . ' extends Seeder' . PHP_EOL .
	        '{' . PHP_EOL .
    		"  " . '/**' . PHP_EOL .
		"  " . ' * Run the database seeds.' . PHP_EOL .
     		"  " . ' *' . PHP_EOL .
     		"  " . ' * @return void' . PHP_EOL .
     		"  " . ' */' . PHP_EOL .
    		"  " . 'public function run()' . PHP_EOL .
    		"  " . '{' . PHP_EOL;

        \Storage::append('miners/' . $this->filename . '.php', $text);

	$this->model::chunk(100, function ($rows) {

            $text = "    " . '\DB::table(\'' . (new $this->model)->getTable() . '\')->insert([' . PHP_EOL;

	    foreach ($rows as $row) {

	    $t = "      " . '[' . PHP_EOL;

	        $a = $row->toArray();

	        foreach($a as $key => $value)
		{
		    if(
		        $key == 'id' ||
			$key == 'defaultOrganization' ||
			$key == 'defaultAddress'
		    ) continue;

		    $t .= "        " . '"' . $key . '" => ';
		    
		    if(!$value) {
		        $t .= 'null';
		    } elseif(is_int($value)) {
		        $t .= $value;
		    } else {
		        if(is_array($value)) {
		            dd($key);
			}
		        $t .= '"' . $value . '"';
		    }
		    
		    $t .= ',' . PHP_EOL;
		}

		if($user = \App\Models\User::where('contact_id', $row->id)->first()) {
  	            $t .= '        "user_id" => ' . $user->id . ',' . PHP_EOL;
		} else {
		    $t .= '"user_id" => NULL';
		}

		$t .= "      " . '],' .  PHP_EOL;

		$text .= $t;

	    }

	    $text .= "    " . ']);' . PHP_EOL;

	    \Storage::append('miners/' . $this->filename . '.php', $text);

	});

        $text = "  " . '}' . PHP_EOL . '}';

        //
        \Storage::append('miners/' . $this->filename . '.php', $text);

        //
        $this->info('Parsed ' . $f . ' rows.');

    }
}
