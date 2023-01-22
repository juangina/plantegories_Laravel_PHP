<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Welcome extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $message;

    public function __construct($message)
    {
        $this->message = $message;
    }

    public function cMethod () {
        return "Component Method";
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.welcome');
    }
}
