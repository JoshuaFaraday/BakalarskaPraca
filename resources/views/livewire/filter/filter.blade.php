<div>
    <h1> Hello World </h1>
    @livewire('filter.filter-input' , ['name' => 'Velkosť',
    'options' => [
        '1' => 'Možnosť 1',
        '2' => 'Možnosť 2',
        '3' => 'Možnosť 3',

    ]])
     @livewire('filter.filter-input' , ['name' => 'Farba',
     'options' => [
         '1' => 'Možnosť 1',
         '2' => 'Možnosť 2',
         '3' => 'Možnosť 3',

     ]])
      @livewire('filter.filter-input' , ['name' => 'Pohlavie',
      'options' => [
          '1' => 'Možnosť 1',
          '2' => 'Možnosť 2',
          '3' => 'Možnosť 3',

      ]])
</div>
