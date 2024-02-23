<div class="filter-container">

    @foreach ($filters as $name => $options)
        @livewire('filter.filter-input', ['name' => $name, 'options' => $options], key('filter-input-' . $name))
    @endforeach
    <button wire:click="resetFilter" type="button" class="btn btn-light">Reset</button>
</div>
