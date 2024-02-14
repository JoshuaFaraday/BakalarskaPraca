{{-- <div>
    <h2> {{$name}} </h2>
    <div>
        <select wire:model="selectedOption">
            <option value="">Vyberte možnosť...</option>
            @foreach($options as $key => $value)
                <option value="{{ $key }}">{{ $value }}</option>
            @endforeach
        </select>
    </div>
</div> --}}

<div class="select-component">

    <h2 class="select-component__title"> {{  __('messages.filter.'.$name) }} </h2>
    <div class="select-component__select-wrapper">
        <select class="select-component__select" wire:model="selectedOption">
            <option value="">Vyberte možnosť...</option>

                @foreach($options as $key => $value)
                    <option value="{{ $key }}">{{ $value }}</option>
                @endforeach

        </select>
    </div>
</div>
