@extends('layouts.app')
@livewire('filter.filter', ['filters' => $filters])
@livewire('product-list', ['variants' => $variants])
