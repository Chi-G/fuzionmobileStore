<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FormSection extends Component
{
    /**
     * Create a new component instance.
     */

    public $submit;

    public function __construct($submit = null)
    {
        $this->submit = $submit;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form-section');
    }
}
