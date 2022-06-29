<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AppLayouts extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $title;
    public $style = null; 
    public function __construct($title = null)
    {
        $this->title = $title ?? 'APPs | Surat';
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.app-layouts');
    }
}
