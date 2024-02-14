<div class="filter-container">
     
    @foreach ($filters as $name => $options)
        @livewire('filter.filter-input', ['name' => $name, 'options' => $options])
    @endforeach
</div>
