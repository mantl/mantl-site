@extends('master')

@section('title', 'Features')

@section('page-header')

	<h1 data-scroll-index="0">Less configuration time means more app-making time</h1>

@endsection

@section('content')

<section class="features">
		
	<div class="tabs">
		
		<ul>
			
			<li class="active" data-tab-group-target="business-devops-features" data-tab-target="devops-features">DevOps Features</li>

			<li data-tab-group-target="business-devops-features" data-tab-target="business-features">Business Features</li>

		</ul>

	</div>

	<div class="tab-content" data-tab-group-name="business-devops-features">
		
		<div 
			id="tab-1" 
			class="tab active" 
			data-tab-name="devops-features" 
			class="active"
		>
			
			@include('components.feature', ['features' => $devops_features])

		</div>


		<div 
			id="tab-2"
			class="tab" 
			data-tab-name="business-features" 
		>
		
			@include('components.feature', ['features' => $business_features])

		</div>

	</div>

	@include('components.back2top')

</section>

@endsection