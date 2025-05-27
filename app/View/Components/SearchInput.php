<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SearchInput extends Component
{
    public $name;
    public $placeholder;
    public $value;
    
    public function __construct($name = 'search', $placeholder = 'Buscar...', $value = null)
    {
        $this->name = $name;
        $this->placeholder = $placeholder;
        $this->value = $value;
    }

    public function render()
    {
        return view('components.search-input');
    }
}
