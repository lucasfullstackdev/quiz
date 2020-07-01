<?php

namespace App\View\Components;

use Illuminate\View\Component;

class InputIcon extends Component
{
    public $type;
    public $icon;
    public $label;
    public $placeholder;
    public $inputName;
    public $collection;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($inputName, $label, $collection, $placeholder="", $type="text", $icon)
    {
        $this->inputName = $inputName;
        $this->label = $label;
        $this->placeholder = $placeholder;
        $this->type = $type;
        $this->icon = $icon;
        $this->collection = $collection->toArray();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.input-icon');
    }
}
