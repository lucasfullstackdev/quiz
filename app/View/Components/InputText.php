<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\User;

class InputText extends Component
{
    public $label;
    public $placeholder;
    public $inputName;
    public $collection;
    public $grid;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($inputName, $label, $collection, $placeholder="", $grid="12")
    {
        $this->inputName = $inputName;
        $this->label = $label;
        $this->placeholder = $placeholder;
        $this->grid = $grid;
        $this->collection = $collection->toArray();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.input-text');
    }
}
