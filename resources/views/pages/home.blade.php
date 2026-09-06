@extends('layouts.app')

@section('title', __('home.title'))
@section('meta_description', __('home.meta_description'))

@section('content')
    @include('components.hero')
    @include('components.services')
    @include('components.why-us')
    @include('components.portfolio')
    @include('components.cta')
    
@endsection

