<?php

namespace App\Livewire\Filter;

use Livewire\Component;

class Filter extends Component
{
    public $filters;

    public function mount($filters)
    {
        $this->filters = $filters; // Priame prijatie pola
    }

    public function render()
    {
        return view('livewire.filter.filter');
    }
}
