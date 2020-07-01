<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Questao extends Component
{

    public $perguntaCollection;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($perguntaCollection)
    {
        $this->perguntaCollection = $perguntaCollection;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.questao');
    }
}
