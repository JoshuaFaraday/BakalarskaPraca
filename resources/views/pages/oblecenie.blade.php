@extends('layouts.app')

@section('content')
    <x-productVariants :products="$products" />
@endsection
