<?php

namespace App\Livewire\Filter;

use Livewire\Component;

class FilterInput extends Component
{
    public $name;
    public $options;
    public $default = true;

    protected $listeners = ['resetFilterInput' => 'resetFilterInput'];

    public function resetFilterInput()
    {
        $this->default = true;
        $filter = ['name' => $this->name, 'value' => ''];
        $this->dispatch('filterChanged', $filter);
    }


    public function mount($name, $options)
    {
        $this->name = $name;
        $this->options = $options;
    }

    public function onSelectChange($value)
    {
        $filter = ['name' => $this->name, 'value' => $value];
        $this->default = false;
        $this->dispatch('filterChanged', $filter);

    }


    public function render()
    {
        return view('livewire.filter.filter-input');
    }
}
