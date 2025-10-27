@extends('layouts.app')

@section('title', 'TanCare - Healthcare Quality Certification in Tanzania')

@section('content')
<div>
    @include('components.hero')
    @include('components.about_section') 
    @include('components.certification_section')
    @include('components.stakeholders_section')
    @include('components.app_section')
</div>
@endsection