@extends('layouts.app')

@section('content')
    @include('components.hero')
    @include('components.about_section')
    @include('components.certification_section')
    @include('components.stakeholders_section')
    @include('components.app_section')
    {{-- @include('components.stakeholders-section')
    @include('components.app-section') --}}
@endsection