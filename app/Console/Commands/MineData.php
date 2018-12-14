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
    		"\t" . '/**' . PHP_EOL .
		"\t" . ' * Run the database seeds.' . PHP_EOL .
     		"\t" . ' *' . PHP_EOL .
     		"\t" . ' * @return void' . PHP_EOL .
     		"\t" . ' */' . PHP_EOL .
    		"\t" . 'public function run()' . PHP_EOL .
    		"\t" . '{' . PHP_EOL;

        \Storage::append($this->filename . '.php', $text);

	$this->model::chunk(100, function ($rows) {

	    $text = '';

	    foreach ($rows as $row) {

	        $a = $row->toArray();

	        $t = "\t\t" . 'factory(' . $this->model . '::class)->create([' . PHP_EOL;

	        foreach($a as $key => $value)
		{
		    if(
		        $key == 'id' ||
			$key == 'defaultOrganization' ||
			$key == 'defaultAddress'
		    ) continue;

		    $t .= "\t\t\t" . '"' . $key . '" => ';
		    
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

		$t .= "\t\t" . ']);' . PHP_EOL . PHP_EOL;

		$text .= $t;

	    }

	    \Storage::append($this->filename . '.php', $text);

	});

        $text = "\t" . '}' . PHP_EOL .
     	         '}';

        //
        \Storage::append($this->filename . '.php', $text);

        //
        $this->info('Parsed ' . $f . ' rows.');

    }
}
