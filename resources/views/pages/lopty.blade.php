@extends('layouts.app')
<x-filters :sizes="$sizes" :colors="$colors" :genders="$genders" />
@livewire('filter.filter')
<x-variant :variants="$variants" />

