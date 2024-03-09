<?php

namespace App\Livewire;

use Illuminate\Support\Arr;
use Livewire\Component;
use Livewire\WithPagination;

use function PHPUnit\Framework\isNull;

class ProductList extends Component
{
    use WithPagination;
    public $variants;
    public $filteredVariants;
    public $selectedOption;

    protected $listeners = ['filterVariants' => 'handleFiltering'];

    public function handleFiltering($value)
    {
        //spracuje vybranú hodnotu, uložením do vlastnosti
        $this->selectedOption = $value;
        $this->filter();
    }
    public function filter() {
        $this->filteredVariants = Arr::where($this->variants, function ($variant) {
            foreach ($this->selectedOption as $key => $value) {
                if ($value=="" || NULL) {
                    continue;
                }
                if (!Arr::has($variant, $key) || Arr::get($variant, $key)['id'] != $value) {
                    return false;
                }
            }
            return true;
        });

    }

    public function mount($variants)
    {
        $this->filteredVariants = $variants;

    }
    public function render()
    {


        return view('livewire.product-list');
    }
}
