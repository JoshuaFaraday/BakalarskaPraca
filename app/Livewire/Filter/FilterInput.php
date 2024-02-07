<?php

namespace App\Livewire\Filter;

use Livewire\Component;

class FilterInput extends Component
{
    public $name;
    public $options;


    public function mount($name, $options)
    {
        $this->name = $name;
        $this->options = $options;
    }


    public function render()
    {
        return view('livewire.filter.filter-input');
    }
}
