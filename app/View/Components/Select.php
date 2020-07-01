<?php

namespace App\View\Components;

use Illuminate\View\Component;
use DB;

class Select extends Component
{
    public $inputName;
    public $label;
    public $collection;
    public $dataCollection;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($inputName, $label, $collection, $table, $nat=['value' => 'id', 'description' => 'title'])
    {
        $this->inputName = $inputName;
        $this->label = $label;
        $this->collection = $collection;
        $this->dataCollection = DB::table($table)
                                  ->select([
                                       $nat['value'] . ' as value',
                                       $nat['description'] . ' as description'
                                  ])
                                  ->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.select');
    }
}
