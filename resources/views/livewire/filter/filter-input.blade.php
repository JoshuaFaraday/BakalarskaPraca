
<div class="select-component">

    <h2 class="select-component__title"> {{  __('messages.filter.'.$name) }} </h2>
    <div class="select-component__select-wrapper">
        <select class="select-component__select" wire:change="onSelectChange($event.target.value)">
            <option value="" @if ($default)
            selected
            @endif>Vyberte možnosť...</option>
                @foreach($options as $key => $value)
                    <option value="{{ $key }}"> {{ $value }}</option> {{-- {{$key}} pre zobrazenie id --}}
                @endforeach

        </select>
    </div>
</div>
