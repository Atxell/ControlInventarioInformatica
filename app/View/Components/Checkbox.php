<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Checkbox extends Component
{
    public $name;
    public $label;
    public $checked;
    public $value;

    public function __construct($name, $label = null, $checked = false, $value = null)
    {
        $this->name = $name;
        $this->label = $label;
        $this->checked = $checked;
        $this->value = $value;
    }

    public function render()
    {
        return view('components.checkbox');
    }
}
