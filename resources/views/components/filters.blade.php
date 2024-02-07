<div class="filters">
    <form action="{{ route('variants.filter') }}" method="GET" class="filters-form">
        <div class="filters-form__group">
            <label for="size">Veľkosť:</label>
            <select name="size" id="size">
                <option value="">Všetky veľkosti</option>
                {{-- Dynamicky generované možnosti veľkostí --}}
                @foreach ($sizes as $size)
                <option value="{{ $size }}">{{ $size }}</option>
            @endforeach
            </select>
        </div>

        <div class="filters-form__group">
            <label for="color">Farba:</label>
            <select name="color" id="color">
                <option value="">Všetky farby</option>
                {{-- Dynamicky generované možnosti farieb --}}
                @foreach ($colors as $color)
                    <option value="{{ $color }}">{{ $color }}</option>
                @endforeach
            </select>
        </div>

        <div class="filters-form__group">
            <label for="gender">Pohlavie:</label>
            <select name="gender" id="gender">
                <option value="">Všetky pohlavia</option>
                {{-- Dynamicky generované možnosti pohlaví --}}
                @foreach ($genders as $gender)
                    <option value="{{ $gender->id }}">{{ $gender->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="filters-form__group">
            <label for="price">Cena:</label>
            <input type="range" name="price" id="price" min="0" max="1000" step="10" oninput="this.nextElementSibling.value = this.value">
            <output>0</output>
        </div>

        <div class="filters-form__group">
            <label for="search">Hľadať podľa názvu:</label>
            <input type="text" name="search" id="search">
        </div>

        <button type="submit" class="filters-form__submit">Filtrovať</button>
    </form>
</div>
