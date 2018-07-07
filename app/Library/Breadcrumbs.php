<?php
namespace App\Library;

use Illuminate\Contracts\View\Factory as ViewFactory;
use Illuminate\Support\Traits\Macroable;
use Illuminate\Support\Collection;
use Illuminate\Support\HtmlString;

class Breadcrumbs
{
    use Macroable;
    
    public $breadcrumbs;
    public $viewFactory;

    public function __construct()
    {
	$this->breadcrumbs = new Collection();
    }

    public function push($label, $url = null)
    {
	$this->breadcrumbs->push(compact('label', 'url'));
    }

    public function render()
    {
         return $this->view('partials.breadcrumbs');
    }

    public function view(string $view)
    {
	 $html = view()->make($view, ['breadcrumbs' => $this->breadcrumbs->toArray()])->render();
	 return new HtmlString($html);
    }
}