<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Inputs extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public string $label = '';
    public string $placeholder = '';
    public string $id = '';
    public string $class = '';
    public string $type = '';
    public string $name = '';

    public function __construct($type, $class, $id, $placeholder, $label, $name)
    {
        $this->name = $name;
        $this->label = $label;
        $this->type = $type;
        $this->class = $class;
        $this->id = $id;
        $this->placeholder = $placeholder;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.input');
    }
}
