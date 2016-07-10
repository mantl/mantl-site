@extends('master')

@section('title', 'Technologies')

@section('page-header')

	<h1 data-scroll-index="0">Connecting the Best-of-breed technologies</h1>

@endsection

@section('content')
	
<section class="technologies">
	
	<div class="row">
		
		<div class="columns small-12">
		
			<h2 class="hd hd-black">Core components</h2>

			<p class="lead" style="display:none">(The Whole is greater than) the sum of its parts</p>

		</div>

	</div>

	<div class="row">
		
		@foreach ($technologies as $index => $tech)

			<div class="technologies__item columns small-12 medium-6 xlarge-4 @if($index === (count($technologies)) -1) end @endif">
	
				<a href="{{ $tech['url'] }}" target="_blank">
	
					<img src="{{ asset('static/imgs/technologies/'.$tech['icon']) }}">
				
				</a>

				<h2>{{ $tech['name'] }}</h3>

				<h3>{{ $tech['subtitle'] }}</h3>

				<p>{{ $tech['content'] }}</p>

			</div>

		@endforeach

	</div>

</section>

<section class="technologies add-ons">
	
	<div class="row">
		
		<div class="columns small-12">
			
			<h2 class="hd hd-black">Add-ons</h2>

			<p class="lead">Add-ons are Ansible roles or other software configurations that have been known to work well with Mantl. These are not as tested and maintained as the core components.</p>

		</div>

	</div>

	<div class="row">
		
		@foreach ($addons as $index => $tech)

			<div class="technologies__item columns small-12 medium-6 xlarge-4 @if($index === (count($addons)) -1) end @endif">
	
				<a href="{{ $tech['url'] }}" target="_blank">
	
					<img src="{{ asset('static/imgs/technologies/'.$tech['icon']) }}">
				
				</a>
				
				<h2>{{ $tech['name'] }}</h3>

				<p>{{ $tech['content'] }}</p>

			</div>

		@endforeach

	</div>

	@include('components.back2top')

</section>

@endsection