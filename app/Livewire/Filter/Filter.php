<?php

namespace App\Livewire\Filter;

use Livewire\Component;

class Filter extends Component
{
    public $filters;
    public $selectedOptions;

    protected $listeners = ['filterChanged' => 'handleFilterChanged'];

    public function handleFilterChanged($filter)
    {
        // spracuje vybranú hodnotu, pr uložením do vlastnosti
         $this->selectedOptions[$filter['name']] = $filter['value'];
         $this->dispatch('filterVariants', $this->selectedOptions);
    }
    public function resetFilter()
    {
        $this->dispatch('filterVariants', []);
        $this->dispatch('resetFilterInput');
    }

    public function mount($filters)
    {
        $this->filters = $filters; // Priame prijatie pola
    }

    public function render()
    {
        return view('livewire.filter.filter');
    }
}
