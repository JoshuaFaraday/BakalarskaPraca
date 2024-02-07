<div>
    <h2> {{$name}} </h2>
    <div>
        <select wire:model="selectedOption">
            <option value="">Vyberte možnosť...</option>
            @foreach($options as $key => $value)
                <option value="{{ $key }}">{{ $value }}</option>
            @endforeach
        </select>
    </div>


</div>
