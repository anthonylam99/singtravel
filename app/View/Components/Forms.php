<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Forms extends Component
{
    /**
     * The alert type.
     *
     * @var string
     */
    public string $title = '';
    /**
     * The alert type.
     *
     * @var array
     */
    public array $dataJson = [];

    public string $action = '';
    public string $method = '';

    /**
     * Create the component instance.
     *
     * @param  string $title
     * @param  array $dataJson
     * @return void
     */
    public function __construct(string $title, array $dataJson, string $action, string $method)
    {
        $this->dataJson = $dataJson;
        $this->title = $title;
        $this->action = $action;
        $this->method = $method;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.forms');
    }
}
