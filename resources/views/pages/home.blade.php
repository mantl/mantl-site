@extends('master')

@section('title', 'Home')

@section('content')

	@include('sections.hero')

	@include('sections.features', ['devops_features' => $devops_features, 'business_features' => $business_features])

	@include('sections.use-cases')

	@include('sections.technologies')

@endsection