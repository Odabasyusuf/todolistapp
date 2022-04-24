@extends('layouts.panel.master')

@section('title', $category->name)

@section('content')
    <livewire:category-page :category_id="$category->id" />
@endsection
