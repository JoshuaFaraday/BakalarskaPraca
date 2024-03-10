
@extends('layouts.app')

@livewire('filter.filter', ['filters' => $filters])

@livewire('product-list', ['variants' => $variants])
@section('content')
{{-- @if($subcategories->isNotEmpty())
    <div class="subcategories">
        <h3>Subcategories:</h3>
        <ul>
            @foreach($subcategories as $subcategory)
                <li>
                    <a href="{{ route('category.show', $subcategory->name) }}">{{ $subcategory->name }}</a>
                </li>
            @endforeach
        </ul>
    </div>
@endif --}}
@if($subcategories->isNotEmpty())
    <div class="box-container subcategories-container">
        @foreach($subcategories as $subcategory)
            <div class="box subcategory-box">
                <a href="{{ route('category.show', ['name' => $subcategory->name]) }}" class="box-link subcategory-box__link">
                    @if ($subcategory->image)
                    <img src="{{ asset('storage/' . str_replace('\\', '/', $subcategory->image)) }}" alt="{{ $subcategory->name }}" class="box-image">
                    @endif
                    <div class="box-text subcategory-box__text">
                        <b>{{ $subcategory->name }}</b>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
@endif
@endsection
